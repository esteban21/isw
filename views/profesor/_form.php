<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profesor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PRO_RUT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_NOMBRES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_PATERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_MATERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_FONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_VIGENTE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
