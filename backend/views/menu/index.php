<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
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
            'title_my',
            'display_status',
            [
                'attribute' => 'updated_dt',
                'label' => 'Updated Date',
                'format' => ['date', 'php:d - m - Y'],
            ],
            'updated_by',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
    <?php Pjax::end(); ?></div>

<div class="clearfix"></div>
