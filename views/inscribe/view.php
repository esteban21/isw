<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inscribe */

$this->title = $model->INS_CORREL;
$this->params['breadcrumbs'][] = ['label' => 'Inscribes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscribe-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->INS_CORREL], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->INS_CORREL], [
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
            'INS_CORREL',
            'ALU_RUT',
            'ASI_CODIGO',
            'INS_SEMESTRE',
            'INS_ANO',
        ],
    ]) ?>

</div>
