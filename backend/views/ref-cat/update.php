<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RefCat */

$this->title = 'Update Ref Cat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ref Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ref-cat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
