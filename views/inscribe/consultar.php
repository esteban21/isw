<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InscribeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inscribes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscribe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inscribe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'INS_CORREL',
            'ALU_RUT',
            'ASI_CODIGO',
            'INS_SEMESTRE',
            'INS_ANO',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
