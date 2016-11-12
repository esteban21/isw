<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Inscribe */

$this->title = 'Create Inscribe';
$this->params['breadcrumbs'][] = ['label' => 'Inscribes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscribe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
