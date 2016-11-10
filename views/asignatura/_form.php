<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asignatura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignatura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'COD_PROFESOR')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_ASIGNATURA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEMESTRE_ASIGNATURA')->textInput() ?>

    <?= $form->field($model, 'CREDITOS_ASIGNATURA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
