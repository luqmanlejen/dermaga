<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ost_ref_cat".
 *
 * @property integer $id
 * @property string $cat
 * @property string $descr
 */
class RefCat extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'ost_ref_cat';
    }

    public function rules() {
        return [
            [['cat', 'descr'], 'required'],
            [['descr'], 'string'],
            [['cat'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'cat' => 'Kategori',
            'descr' => 'Penerangan',
        ];
    }
    
}