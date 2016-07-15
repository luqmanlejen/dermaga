<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengumuman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengumuman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tajuk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <label>Tarikh Paparan</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <?php if(!$model->isNewRecord){ ?>
                <input type="text" class="form-control pull-right" id="reservation" name="daterange2" value="<?php echo $model->start_dt . ' - ' . $model->end_dt?>">
            <?php } else { ?>
                <input type="text" class="form-control pull-right" id="reservation" name="daterange">
            <?php } ?>
        </div>
    </div>

    <?= $form->field($model, 'pengumuman')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'tarikh')->label('Tarikh <div class="input-group date"><div class="input-group-addon"><i class="fa fa-calendar"></i></div>')->textInput(['maxlength' => true, 'class' => 'form-control col-md-8 pull-left', 'id' => 'datepicker', 'data-date-format'=>'yyyy-mm-dd']) ?></div>


    <?= $form->field($model, 'status')->dropDownList(['0' => 'Publish', '1' => 'Archive']); ?>

    <div class="form-group">
        <?= Html::a('Back', ['/pengumuman/index'], ['class'=>'btn btn-success']) ?>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
