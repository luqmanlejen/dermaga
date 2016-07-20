<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RefCat */

$this->title = 'Tambah Ketegori Parameter';
$this->params['breadcrumbs'][] = ['label' => 'Parameter', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-cat-create box box-primary">
    
    <br>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
