<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asignatura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignatura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ASI_CODIGO')->textInput(['maxlength' => true]) ?>

  

    <?=$form->field($model, 'DEP_CORREL')->dropDownList($model->comboDepartamento)?>
 
    <?= $form->field($model, 'ASI_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASI_CREDITOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASI_CUPOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASI_SEMESTRE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
