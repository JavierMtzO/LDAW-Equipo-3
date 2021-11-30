<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;

class UserApi implements Authenticatable {

    public $token = "";
    public $id = null;
    public $name = "";
    public $lastname = "";
    public $email = "";
    public $role = "";
    public $privileges = [];

    public function getAuthIdentifierName(){
        return "token";
    }
    public function getAuthIdentifier(){

        return $this->token;
    }

    public function getAuthPassword(){
        return $this->token;
    }
    public function getRememberToken(){}
    public function setRememberToken($value){}
    public function getRememberTokenName(){}

}