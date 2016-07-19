<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RefCat */

$this->title = 'Tambah Parameter';
$this->params['breadcrumbs'][] = ['label' => 'Tambah Parameter', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-cat-create box box-primary">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <br>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
