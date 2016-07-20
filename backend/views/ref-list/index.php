<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RefListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Selanggara Parameter';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="ref-list-index box box-default">

    <?php Pjax::begin(); ?>   
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}\n{summary}<div class=\"pull-right\">{pager}</div><br><br><br>",
        'summary' => "Data menunjukkan <b>{begin}-{end}</b> daripada <b>{totalCount}</b> jumlah data",
        //'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-bordered table-hover'],
        'emptyText' => 'Tiada keputusan dijumpai.',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'code',
            'label_my',
            'cat',
            'sort',
            'updated_dt',
            'updated_by',
            'lang',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Tindakan',
                'headerOptions' => ['width' => '150'],
                'template' => '{update}&nbsp;{delete}',
                'buttons' => [
                    'update' => function($url, $model) {
                        return Html::a('<i class="fa fa-pencil"></i>', ["ref-list/update?id=$model->id"], ['class' => 'btn btn-flat bg-info']);
                    },
                            'delete' => function($url, $model) {
                        return Html::a('<i class="fa fa-trash"></i>', ["ref-list/delete?id=$model->id"], ['class' => 'btn btn-flat bg-danger']);
                    },
                        ]
                    ],
                ],
            ]);
            ?>
            <?php Pjax::end(); ?>

</div>