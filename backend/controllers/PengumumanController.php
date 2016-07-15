<?php

namespace backend\controllers;

use Yii;
use backend\models\Pengumuman;
use backend\models\PengumumanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PengumumanController implements the CRUD actions for Pengumuman model.
 */
class PengumumanController extends Controller {

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

    public function actionIndex() {
        $searchModel = new PengumumanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
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
        $model = new Pengumuman();

        if ($model->load(Yii::$app->request->post())) {

            $arr[] = explode('-', $_POST['daterange']);
            $count = 0;
            foreach ($arr as $r) {
                if (sizeof($r) > 0) {
                    $model->start_dt = $r[0];
                    $model->end_dt = $r[1];
                }
                $count++;
            }

            $model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            
            $arr[] = explode('-', $_POST['daterange2']);
            if(isset($_POST['daterange2'])){
                $count = 0;
                foreach ($arr as $r) {
                    if (sizeof($r) > 0) {
                        $model->start_dt = $r[0];
                        $model->end_dt = $r[1];
                    }
                    $count++;
                }
            }
//            echo $_POST['daterange2'];
//            exit;
            $model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id) {
        if (($model = Pengumuman::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
