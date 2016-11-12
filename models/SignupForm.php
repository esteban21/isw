<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{

    public $username;
    //public $nome;
    //public $instituicao;
    public $acesso_ativo;
    //public $data_nasc;
    public $grupoAcesso;
    public $email;
    //public $cpf;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required', 'message' => 'Esse campo não pode ficar em branco.'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Essa matrícula ja esta sendo usanda.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            [['acesso_ativo','grupoAcesso'], 'required', 'message' => 'Esse campo não pode ficar em branco.'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Esse email ja esta sendo utilizado.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
