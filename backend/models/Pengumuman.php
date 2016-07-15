<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengumuman".
 *
 * @property integer $id
 * @property string $tajuk
 * @property string $pengumuman
 * @property string $tarikh
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property string $start_dt
 * @property string $end_dt
 */
class Pengumuman extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'pengumuman';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['pengumuman'], 'string'],
            [['tarikh', 'created_at', 'updated_at'], 'safe'],
            [['tajuk'], 'string', 'max' => 255],
            [['status', 'created_by', 'updated_by', 'start_dt', 'end_dt'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'tajuk' => 'Tajuk',
            'pengumuman' => 'Pengumuman',
            'tarikh' => 'Tarikh',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'start_dt' => 'Start Dt',
            'end_dt' => 'End Dt',
        ];
    }

    public function beforeSave($insert) {
        $user = User::findOne(\Yii::$app->user->id);
        if ($this->isNewRecord) {
            $this->created_at = date('Y-m-d H:i:s');
            $this->created_by = $user->id;            
        } else {
            $this->updated_at = date('Y-m-d H:i:s');
            $this->updated_by = $user->id;
        }        
        return TRUE;
    }    
}
