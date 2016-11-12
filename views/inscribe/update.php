<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inscribe */

$this->title = 'Update Inscribe: ' . $model->INS_CORREL;
$this->params['breadcrumbs'][] = ['label' => 'Inscribes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->INS_CORREL, 'url' => ['view', 'id' => $model->INS_CORREL]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inscribe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
