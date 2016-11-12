<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dicta */

$this->title = $model->DIC_CORREL;
$this->params['breadcrumbs'][] = ['label' => 'Dictas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->DIC_CORREL], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->DIC_CORREL], [
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
            'DIC_CORREL',
            'PRO_RUT',
            'ASI_CODIGO',
            'DIC_SEMESTRE',
            'DIC_ANO',
        ],
    ]) ?>

</div>
