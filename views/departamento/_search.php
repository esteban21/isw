<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DepartamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DEP_CORREL') ?>

    <?= $form->field($model, 'FAC_CORREL') ?>

    <?= $form->field($model, 'DEP_NOMBRE') ?>

    <?= $form->field($model, 'DEP_DESCRIPCION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
