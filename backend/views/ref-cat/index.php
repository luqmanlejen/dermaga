<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RefCatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parameter';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="ref-cat-index box box-default">

    <?php // Pjax::begin(); ?>    
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}\n{summary}<div class=\"pull-right\">{pager}</div><br><br><br>",
        'summary' => "Data menunjukkan <b>{begin}-{end}</b> daripada <b>{totalCount}</b> jumlah data",
        //'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-bordered table-hover'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'cat',
            'descr:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Tindakan',
                'headerOptions' => ['width' => '150'],
                'template' => '{list}&nbsp;{update}&nbsp;{delete}',
                'buttons' => [
                    'list' => function($url, $model){
                        return Html::a('<i class="fa fa-list"></i>', ["ref-list/index?cat=$model->id"], ['class' => 'btn btn-flat bg-success']);                        
                    },
                    'update' => function($url, $model){
                        return Html::a('<i class="fa fa-pencil"></i>', ["ref-cat/update?id=$model->id"], ['class' => 'btn btn-flat bg-info']);                        
                    },
                    'delete' => function($url, $model){
                        return Html::a('<i class="fa fa-trash"></i>', ["ref-cat/delete?id=$model->id"], ['class' => 'btn btn-flat bg-danger']);                        
                    },
                ]
            ],
        ],
    ]);
    ?>
    <?php // Pjax::end(); ?></div>

<div class="clearfix"></div>