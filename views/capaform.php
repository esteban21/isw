<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Capacitaciones2 */
/* @var $form ActiveForm */
?>
<div class="capaform">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Registro') ?>
        <?= $form->field($model, 'Ano') ?>
        <?= $form->field($model, 'Evaluacion') ?>
        <?= $form->field($model, 'Asistencia') ?>
        <?= $form->field($model, 'Fecha_Inicio') ?>
        <?= $form->field($model, 'Fecha_Termino') ?>
        <?= $form->field($model, 'Categoria') ?>
        <?= $form->field($model, 'Nombre_del_Curso') ?>
        <?= $form->field($model, 'Sede') ?>
        <?= $form->field($model, 'N_horas') ?>
        <?= $form->field($model, 'Periodo') ?>
        <?= $form->field($model, 'Academico') ?>
        <?= $form->field($model, 'RUT') ?>
        <?= $form->field($model, 'FACULTAD') ?>
        <?= $form->field($model, 'Departamento_Academico') ?>
        <?= $form->field($model, 'Jornada') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- capaform -->
