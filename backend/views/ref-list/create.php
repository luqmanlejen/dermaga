<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RefList */

$this->title = 'Create Ref List';
$this->params['breadcrumbs'][] = ['label' => 'Ref Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
