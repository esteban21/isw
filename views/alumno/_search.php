<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ALU_RUT') ?>

    <?= $form->field($model, 'COM_CORREL') ?>

    <?= $form->field($model, 'CAR_CODIGO') ?>

    <?= $form->field($model, 'ALU_NOMBRES') ?>

    <?= $form->field($model, 'ALU_PATERNO') ?>

    <?php // echo $form->field($model, 'ALU_MATERNO') ?>

    <?php // echo $form->field($model, 'ALU_FONO') ?>

    <?php // echo $form->field($model, 'ALU_DIRECCION') ?>

    <?php // echo $form->field($model, 'ALU_SITUACION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
