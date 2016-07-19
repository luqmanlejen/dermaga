<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php
    $form = ActiveForm::begin([
                'options' => ['class' => 'form-group'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-md-2\">{label}</div><div class=\"col-md-6\">{input}</div><div class=\"row\">{error}</div>",
                ],
    ]);
    ?>

    <?= $form->field($model, 'title_my')->label('Tajuk (versi Malay)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->label('Tajuk (versi English)')->textInput(['maxlength' => true]) ?>    

    <?= $form->field($model, 'parent_id')->dropDownList(['0' => 'Item A', '1' => 'Item B', '2' => 'Item C']); ?>
    
    <?= $form->field($model, 'sort')->dropDownList(['1' => '1', '2' => '2', '3' => '3']); ?>

    <?= $form->field($model, 'display_status')->dropDownList(['1' => 'Papar', '2' => 'Tidak Papar']); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="clearfix"></div>
    <div class="form-group">
        <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali', ['index'], ['class' => 'btn bg-purple']) ?>
        <?= Html::resetButton('<i class="fa fa-refresh"></i>&nbsp;&nbsp;Reset', ['class' => 'btn btn-warning']) ?>
        <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah' : '<i class="fa fa-arrow-pencil"></i>&nbsp;&nbsp;Kemaskini', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
