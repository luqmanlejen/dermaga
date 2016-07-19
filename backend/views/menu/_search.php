<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-search well">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
                'options' => ['class' => 'form-group'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-md-1\">{label}</div><div class=\"col-md-5\">{input}</div>",
                ],
    ]);
    ?>
    <?= $form->field($model, 'title_my') ?>
    
    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <?= Html::a('<i class="fa fa-plus"></i>&nbsp;&nbsp; Tambah', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton('<i class="fa fa-refresh"></i>&nbsp;&nbsp;Reset', ['class' => 'btn btn-warning']) ?>
            <?= Html::submitButton('<i class="fa fa-search"></i>&nbsp;&nbsp;Carian', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>
    
</div>