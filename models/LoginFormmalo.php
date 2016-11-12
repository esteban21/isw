<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
 
    class LoginForm extends Model
    {
     
     
    //Campos del formulario vista
     
        public $username;
        public $password;
     
        public $rememberMe = true;
     
        private $_user;
     
        public function rules()
        {
     
            return [
                // reglas de datos seran ambos requeridos
     
                [['username', 'password'], 'required'],
                // recordarme sera booleano 0 o 1
     
                ['rememberMe', 'boolean'],
                // passwordsera validado por la función validatePassword()
     
                ['password', 'validatePassword'],
            ];
     
        }
     
       //funcion para validar clave
        public function validatePassword($attribute, $params)
     
        {
                     $user = $this->getUser();
     
            
                if (!$user || !$user->validatePassword($this->password)) {
     
                    $this->addError($attribute, 'Incorrect username or password.');
                }
     
            }
     
     
     
     
        public function login()
        {
     
          if ($this->validate()) {
        echo 'hola';
     
        return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
           } else {
     
                return false;
            }
     
        }
     
        //funcion que busca un usuario por su nombre de usuario
        protected function getUser()
     
        {
            if ($this->_user === null) {
     
       //si existe obtiene un array con todos los datos
              $this->_user = Administrador::findByUsername($this->username);
     
           }
     
     
          return $this->_user;
     
        }
    }
     
     
    ?>