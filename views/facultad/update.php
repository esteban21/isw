<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Facultad */

$this->title = 'Update Facultad: ' . $model->FAC_CORREL;
$this->params['breadcrumbs'][] = ['label' => 'Facultads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FAC_CORREL, 'url' => ['view', 'id' => $model->FAC_CORREL]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="facultad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
