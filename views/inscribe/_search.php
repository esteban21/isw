<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InscribeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscribe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'INS_CORREL') ?>

    <?= $form->field($model, 'ALU_RUT') ?>

    <?= $form->field($model, 'ASI_CODIGO') ?>

    <?= $form->field($model, 'INS_SEMESTRE') ?>

    <?= $form->field($model, 'INS_ANO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
