<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RefList */

$this->title = 'Tambah Parameter';
$this->params['breadcrumbs'][] = ['label' => 'Selenggara Parameter', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-list-create box box-primary">

    <br>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
