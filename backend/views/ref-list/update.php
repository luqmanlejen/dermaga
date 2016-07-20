<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RefList */

$this->title = 'Kemaskini Parameter ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selenggara Parameter', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Kemaskini';
?>
<div class="ref-list-update">

    <br>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
