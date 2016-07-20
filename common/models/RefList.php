<?php

namespace common\models;

use Yii;
use backend\models\User;
use yii\helpers\Html;

class RefList extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'ost_ref_list';
    }

    public function rules() {
        return [
            [['code', 'label_my', 'sort'], 'required'],
            [['cat', 'sort'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['code'], 'string', 'max' => 10],
            [['label_my', 'label_en', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'code' => 'Kod',
            'label_my' => 'Label',
            'label_en' => 'Label',
            'cat' => 'Cat',
            'sort' => 'Turutan',
            'created_dt' => 'Created Dt',
            'created_by' => 'Created By',
            'updated_dt' => 'Tarikh Kemaskini',
            'updated_by' => 'Dikemaskini Oleh',
        ];
    }

    public function beforeSave($insert) {
        $user = User::findOne(\Yii::$app->user->id);

        if ($this->isNewRecord) {
            $this->created_dt = date('Y-m-d H:i:s');
            $this->created_by = $user->id;
            $this->updated_dt = date('Y-m-d H:i:s');
            $this->updated_by = $user->id;
        } else {
            $this->updated_dt = date('Y-m-d H:i:s');
            $this->updated_by = $user->id;
        }

        return TRUE;
    }

    public function getUsername() {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }
    
    public static function getLang($model){
        $output = '';
        if($model->label_my != ''){
            $output = Html::img('@web/img/lang/my.png', ['class' => '']);
        } else {
            $output = Html::img('@web/img/lang/my.png', ['class' => '', 'style'=>'opacity:0.2;']);
        }
        $output .= '&nbsp';
        if($model->label_en != ''){
            $output .= Html::img('@web/img/lang/en.png', ['class' => '']);
        } else {
            $output .= Html::img('@web/img/lang/en.png', ['class' => '', 'style'=>'opacity:0.2;']);
        }
        return $output;
    }
}
