<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DictaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dictas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dicta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DIC_CORREL',
            'PRO_RUT',
            'ASI_CODIGO',
            'DIC_SEMESTRE',
            'DIC_ANO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
