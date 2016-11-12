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

    <?= $form->field($model, 'ASI_CODIGO') ?>

    <?= $form->field($model, 'DEP_CORREL') ?>

    <?= $form->field($model, 'ASI_NOMBRE') ?>

    <?= $form->field($model, 'ASI_CREDITOS') ?>

    <?= $form->field($model, 'ASI_CUPOS') ?>

    <?php // echo $form->field($model, 'ASI_SEMESTRE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
