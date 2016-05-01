<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * LoginForm is the model behind the login form.
 */
class SignupForm extends Model//注册模块
{
    public $username;
    public $password;


    private $_user = false;
    public function attributeLabels(){
        return [
            'username'=>'用户名',
            'password'=>'密码',
        ];
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
        ['username', 'filter', 'filter' => 'trim'],
        ['username', 'required','message' => '用户名不能为空'],
        ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => '用户名已存在'],
        ['username', 'string', 'min' => 6, 'max' => 20],
        ['password', 'required','message' => '密码不能为空'],
        ['password', 'string', 'min' => 6, 'max' => 20],
          
        ];
    }


    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->password = $this->password;

            if ($user->save()) {
                return $user;
            }
        }
        return null;
    }

}
