<?php

use yii\helpers\Html;
use yii\grid\GridView;

use backend\models\Pengumuman;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PengumumanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengumumen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pengumuman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'tajuk',
            //'pengumuman:ntext',
            [
                'attribute' => 'tarikh',
                'format' => ['date', 'php:d-m-Y'],
                'options' => ['width' => '200']
            ],
            'status',
            [
                'attribute' => 'status',
                'content' => function($model){
                    if($model->status == 0){
                        return 'Publish';
                    } else {
                        return 'Archive';
                    }
                },
            ],
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'start_dt',
            // 'end_dt',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
