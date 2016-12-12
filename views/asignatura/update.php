<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asignatura */

$this->title = 'Editar Asignatura: ' . $model->ASI_CODIGO;
$this->params['breadcrumbs'][] = ['label' => 'Asignaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ASI_CODIGO, 'url' => ['view', 'id' => $model->ASI_CODIGO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asignatura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
