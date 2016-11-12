<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label('Matrícula') ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->dropDownList(['Selecione','M'=>'Masculino','F'=>'Feminino']) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complemento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instituicao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nasc')->textInput()->input('data_nasc',['placeholder'=>'YYYY-MM-DD']) ?>

    <?= $form->field($model, 'acesso_ativo')->checkbox() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->input('email', ['placeholder'=>'Entre com um email válido...']) ?>

    <?= $form->field($model, 'grupoAcesso')->textInput(['maxlength' => true])->dropDownList(['Selecione','servidor'=>'Servidor','estagiario'=>'Estagiário','psico'=>'Psicossocial']) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastra' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
