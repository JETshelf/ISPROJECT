<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'updated-at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data){
        //password hashing
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data){

        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['password'])) 
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

}
    
