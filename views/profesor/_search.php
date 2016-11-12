<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PRO_RUT') ?>

    <?= $form->field($model, 'PRO_NOMBRES') ?>

    <?= $form->field($model, 'PRO_PATERNO') ?>

    <?= $form->field($model, 'PRO_MATERNO') ?>

    <?= $form->field($model, 'PRO_FONO') ?>

    <?php // echo $form->field($model, 'PRO_DIRECCION') ?>

    <?php // echo $form->field($model, 'PRO_EMAIL') ?>

    <?php // echo $form->field($model, 'PRO_VIGENTE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
