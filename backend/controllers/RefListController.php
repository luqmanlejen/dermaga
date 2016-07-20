<?php

namespace backend\controllers;

use Yii;
use common\models\RefList;
use common\models\RefListSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class RefListController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex($cat) {
        $searchModel = new RefListSearch();
        $searchModel->cat = $cat;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render("index", [          
                    'cat' => $cat,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate() {
        $cat = $_GET['cat'];
        $model = new RefList();

        if ($model->load(Yii::$app->request->post())) {
            $model->cat = $cat;
            $model->save();
            return $this->redirect(["index?cat=$cat"]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id) {
        $cat = $_GET['cat'];
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(["index?cat=$cat"]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    public function actionDelete($id) {
        $cat = $_GET['cat'];
        $this->findModel($id)->delete();

        return $this->redirect(["index?cat=$cat"]);
    }

    protected function findModel($id) {
        if (($model = RefList::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}