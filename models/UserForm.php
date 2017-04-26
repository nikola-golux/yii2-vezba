<?php

namespace app\models;

use yii\base\Model;

/**
 * UserForm
 */
class UserForm extends Model
{
    
    public $name;
    public $email;
    
    /**
     * Validacija
     */
    public function rules()
    {
        return[
                [['name','email'],'required'],
                ['email', 'email'],
              ];
    }
    
}