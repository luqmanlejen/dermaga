<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ost_ref_list".
 *
 * @property integer $id
 * @property string $code
 * @property string $label_my
 * @property string $label_en
 * @property integer $cat
 * @property integer $sort
 * @property string $created_dt
 * @property string $created_by
 * @property string $updated_dt
 * @property string $updated_by
 */
class RefList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ost_ref_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'label_my', 'label_en', 'cat', 'sort', 'created_dt', 'created_by', 'updated_dt', 'updated_by'], 'required'],
            [['cat', 'sort'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['code'], 'string', 'max' => 10],
            [['label_my', 'label_en', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'label_my' => 'Label My',
            'label_en' => 'Label En',
            'cat' => 'Cat',
            'sort' => 'Sort',
            'created_dt' => 'Created Dt',
            'created_by' => 'Created By',
            'updated_dt' => 'Updated Dt',
            'updated_by' => 'Updated By',
        ];
    }
}
