<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DictaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dicta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DIC_CORREL') ?>

    <?= $form->field($model, 'PRO_RUT') ?>

    <?= $form->field($model, 'ASI_CODIGO') ?>

    <?= $form->field($model, 'DIC_SEMESTRE') ?>

    <?= $form->field($model, 'DIC_ANO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
