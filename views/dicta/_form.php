<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dicta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dicta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DIC_CORREL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_RUT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASI_CODIGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIC_SEMESTRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIC_ANO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
