<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-list-form">

    <?php
    $form = ActiveForm::begin([
                'options' => ['class' => 'form-group'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-md-2\">{label}</div><div class=\"col-md-6\">{input}</div><div class=\"row\">{error}</div>",
                ]
    ]);
    ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'label_my')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'label_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="clearfix"></div>
    <div class="form-group well">
        <div class="container">
            <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali', ['index'], ['class' => 'btn btn-flat bg-purple']) ?>
            <?= Html::resetButton('<i class="fa fa-refresh"></i>&nbsp;&nbsp;Reset', ['class' => 'btn btn-flat btn-warning']) ?>
            <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah' : '<i class="fa fa-arrow-pencil"></i>&nbsp;&nbsp;Kemaskini', ['class' => $model->isNewRecord ? 'btn btn-flat btn-success' : 'btn btn-flat btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
