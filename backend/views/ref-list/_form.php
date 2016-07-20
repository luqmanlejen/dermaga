<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefList */
/* @var $form yii\widgets\ActiveForm */

$cat = $_GET['cat'];
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

    <?= $form->field($model, 'label_my')->label('Label (versi Malaysia)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'label_en')->label('Label (versi English)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="clearfix"></div>
    <div class="form-group well">
        <div class="container">
            <?= Html::a('<div style="color:#3c8dbc;"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali</div>', ["index?cat=$cat"], ['class' => 'btn btn-flat bg-info']) ?>
            <?= Html::resetButton('<div style="color:#3c8dbc;"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Reset</div>', ['class' => 'btn btn-flat bg-warning']) ?>
            <?= Html::submitButton($model->isNewRecord ? '<div style="color:#3c8dbc;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</div>' : '<div style="color:#3c8dbc;"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Kemaskini</div>', ['class' => $model->isNewRecord ? 'btn btn-flat bg-success' : 'btn btn-flat bg-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
