<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfesorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profesors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profesor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PRO_RUT',
            'PRO_NOMBRES',
            'PRO_PATERNO',
            'PRO_MATERNO',
            'PRO_FONO',
            // 'PRO_DIRECCION',
            // 'PRO_EMAIL:email',
            // 'PRO_VIGENTE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
