<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Facultad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="facultad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FAC_CORREL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CAM_CORREL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAC_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAC_DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
