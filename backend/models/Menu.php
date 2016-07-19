<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ost_menu".
 *
 * @property integer $id
 * @property string $title_my
 * @property string $title_en
 * @property string $type
 * @property integer $parent_id
 * @property integer $sort
 * @property integer $display_status
 * @property string $url
 * @property string $created_dt
 * @property string $created_by
 * @property string $updated_dt
 * @property string $updated_by
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ost_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_my', 'type', 'created_dt', 'created_by', 'updated_dt', 'updated_by'], 'required'],
            [['parent_id', 'sort', 'display_status'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['title_my', 'title_en', 'url', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_my' => 'Tajuk',
            'title_en' => 'Tajuk',
            'type' => 'Jenis',
            'parent_id' => 'Induk',
            'sort' => 'Susunan',
            'display_status' => 'Status',
            'url' => 'Url',
            'created_dt' => 'Created Dt',
            'created_by' => 'Created By',
            'updated_dt' => 'Tarikh Dikemaskini',
            'updated_by' => 'Dikemaskini Oleh',
        ];
    }
}
