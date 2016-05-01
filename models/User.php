<?php

namespace app\models;

use Yii;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    static private $AUTH_KEY = "authkey_test"; //remember me need this
    static private $ACCESS_TOKEN = "accesstoken_test"; // remember me need this

    public static function tableName()
    {
        return 'user';
    }
    

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
	$user = User::find()->where(['username'=>$username])->asArray()->one();
	if(isset($user)){
            $user['authKey'] = self::$AUTH_KEY;
            $user['accessToken'] = self::$ACCESS_TOKEN;
	}
	return isset($user) ? new static($user) : null;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
	$user = User::find()->where(['id'=>$id])->asArray()->one();
	if(isset($user)){
            $user['authKey'] = self::$AUTH_KEY;
            $user['accessToken'] = self::$ACCESS_TOKEN;
	}
	return isset($user) ? new static($user) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
	return null;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
    
    public function attributeLabels(){
        return [
            'username'=>'用户名',
            'password'=>'密码',
        ];
    }
    
}
?>