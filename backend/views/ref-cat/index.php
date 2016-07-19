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

    <?php Pjax::begin(); ?>    
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
            ],
        ],
    ]);
    ?>
    <?php Pjax::end(); ?></div>

<div class="clearfix"></div>