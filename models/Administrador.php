<?php

namespace app\models;

use Yii;

  
     
     
    class Administrador extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
     
     
    {
     
       //tabla a utilizar generada
        public static function tableName()
     
        {
            return 'administrador';
     
        }
     
       //reglas de campos
        public function rules()
     
        {
            return [
     
                [['usuario', 'clave'], 'string', 'max' => 50],
                [['email'], 'string', 'max' => 100]
     
            ];
        }
     
     
      //Campos de la tabla
     
        public function attributeLabels()
        {
     
            return [
                'id' => 'ID',
     
                'usuario' => 'Usuario',
                'clave' => 'Clave',
     
                'email' => 'Email',
            ];
     
    }
     
    //función predefinida en IdentityInterface para buscar usuario por nombre   
         public static function findByUsername($username)
     
        {
            return static::findOne(['usuario' => $username]);
     
        }
     
    //función predfinida en IdentityInterface para buscar clave  
    public function validatePassword($password)
     
        {
            return static::findOne(['clave' => $password]);
     
        }
       
     
    //función predefinida en IdentityInterface para buscar usuario por id  
        public static function findIdentity($id)
     
        {
            return static::findOne($id);
     
        }
       
     
    //función predefinida en IdentityInterface para buscar usuario por marcador o señal  
         public static function findIdentityByAccessToken($token, $type = null)
     
        {
          //  return static::findOne(['access_token' => $token]);
     
        }
     
    //Devuelve el ID de usuario
    public function getId()
     
        {
            return $this->id;
     
        }
    //Devuelve una clave que se puede utilizar para comprobar la validez de un ID
     
    public function getAuthKey()
        {
     
          //  return $this->auth_key;
    }
     
     
    //Valida la clave devuelta por la funcion anterior.
     
     
      public function validateAuthKey($authKey)
     
        {
            //return $this->getAuthKey() === $authKey;
     
        }   
    }