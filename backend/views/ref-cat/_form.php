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
            <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali', ['index'], ['class' => 'btn bg-purple']) ?>
            <?= Html::resetButton('<i class="fa fa-refresh"></i>&nbsp;&nbsp;Reset', ['class' => 'btn btn-warning']) ?>
            <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah' : '<i class="fa fa-arrow-pencil"></i>&nbsp;&nbsp;Kemaskini', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>