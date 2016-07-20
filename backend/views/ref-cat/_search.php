<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefCatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-cat-search box box-primary well">

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

    <?= $form->field($model, 'cat') ?>
    
    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <?= Html::a('<i class="fa fa-plus"></i>&nbsp;&nbsp; Tambah', ["create"], ['class' => 'btn btn-flat bg-success']) ?>
            <?= Html::a('<i class="fa fa-refresh"></i>&nbsp;&nbsp; Reset', ["index"], ['class' => 'btn btn-flat bg-warning']) ?>
            <?= Html::submitButton('<div style="color:#3c8dbc;"><i class="fa fa-search"></i>&nbsp;&nbsp; Carian</div>', ['class' => 'btn btn-flat bg-info']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>