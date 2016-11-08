<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsignaturaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignatura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'COD_ASIGNATURA') ?>

    <?= $form->field($model, 'NOMBRE_ADMIN') ?>

    <?= $form->field($model, 'COD_PROFESOR') ?>

    <?= $form->field($model, 'NOMBRE_ASIGNATURA') ?>

    <?= $form->field($model, 'SEMESTRE_ASIGNATURA') ?>

    <?php // echo $form->field($model, 'CREDITOS_ASIGNATURA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
