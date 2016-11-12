<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alumno */

$this->title = $model->ALU_RUT;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ALU_RUT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ALU_RUT], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ALU_RUT',
            'COM_CORREL',
            'CAR_CODIGO',
            'ALU_NOMBRES',
            'ALU_PATERNO',
            'ALU_MATERNO',
            'ALU_FONO',
            'ALU_DIRECCION',
            'ALU_SITUACION',
        ],
    ]) ?>

</div>
