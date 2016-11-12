<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Usuário', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->username;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /* Html::a('Deletar', ['delete', 'id' => $model->username], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que quer deletar este item?',
                'method' => 'post',
            ],
        ]) */?>

                <?php // Html::a('Novo', ['create', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'username',
            'nome',
            'sexo',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'role',
            //'status',
            //'created_at',
            //'updated_at',
            'endereco',
            'complemento',
            'instituicao',
            'data_nasc',
            'acesso_ativo',
            'email:email',
            'grupoAcesso',
            'cpf',
        ],
    ]) ?>

</div>
