<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inscribe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscribe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'INS_CORREL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALU_RUT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASI_CODIGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'INS_SEMESTRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'INS_ANO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
