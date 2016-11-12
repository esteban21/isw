<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dicta */

$this->title = 'Create Dicta';
$this->params['breadcrumbs'][] = ['label' => 'Dictas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
