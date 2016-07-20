<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefCat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-cat-form">

    <?php
    $form = ActiveForm::begin([
                'options' => ['class' => 'form-group'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-md-2\">{label}</div><div class=\"col-md-6\">{input}</div><div class=\"row\">{error}</div>",
                ],
    ]);
    ?>

    <?= $form->field($model, 'cat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descr')->textarea(['rows' => 6]) ?>

    <div class="clearfix"></div>
    <div class="form-group well">
        <div class="container">
            <?= Html::a('<div style="color:#3c8dbc;"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali</div>', ["index"], ['class' => 'btn btn-flat bg-info']) ?>
            <?= Html::resetButton('<div style="color:#3c8dbc;"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Reset</div>', ['class' => 'btn btn-flat bg-warning']) ?>
            <?= Html::submitButton($model->isNewRecord ? '<div style="color:#3c8dbc;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</div>' : '<div style="color:#3c8dbc;"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Kemaskini</div>', ['class' => $model->isNewRecord ? 'btn btn-flat bg-success' : 'btn btn-flat bg-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>