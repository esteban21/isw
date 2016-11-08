<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asignatura */

$this->title = 'Update Asignatura: ' . $model->COD_ASIGNATURA;
$this->params['breadcrumbs'][] = ['label' => 'Asignaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_ASIGNATURA, 'url' => ['view', 'id' => $model->COD_ASIGNATURA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asignatura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
