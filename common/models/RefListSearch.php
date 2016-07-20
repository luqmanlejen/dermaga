<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefList;

class RefListSearch extends RefList {

    public function rules() {
        return [
            [['id', 'cat', 'sort'], 'integer'],
            [['code', 'label_my', 'label_en', 'created_dt', 'created_by', 'updated_dt', 'updated_by'], 'safe'],
        ];
    }

    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params) {
        $id = $_GET['cat'];
            
        $query = RefList::find()->where("cat=$id")->orderBy(['updated_dt'=>SORT_DESC]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cat' => $this->cat,
            'sort' => $this->sort,
            'created_dt' => $this->created_dt,
            'updated_dt' => $this->updated_dt,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
                ->andFilterWhere(['like', 'label_my', $this->label_my])
                ->andFilterWhere(['like', 'label_en', $this->label_en])
                ->andFilterWhere(['like', 'created_by', $this->created_by])
                ->andFilterWhere(['like', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}