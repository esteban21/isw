<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ALU_RUT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COM_CORREL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CAR_CODIGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_NOMBRES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_PATERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_MATERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_FONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_SITUACION')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
