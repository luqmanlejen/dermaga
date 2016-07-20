<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RefList */

$this->title = 'Kemaskini Parameter';
$this->params['breadcrumbs'][] = ['label' => 'Selenggara Parameter', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-list-update box box-primary">

    <br>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
