<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dicta */

$this->title = 'Update Dicta: ' . $model->DIC_CORREL;
$this->params['breadcrumbs'][] = ['label' => 'Dictas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DIC_CORREL, 'url' => ['view', 'id' => $model->DIC_CORREL]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dicta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
