<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    function addUser($type, $name, $lastname, $email, $country, $password){
        $query = "INSERT INTO users (type, name, lastname, email, country, password) VALUES ('{$type}', '{$name}', '{$lastname}', '{$email}', '{$country}', '{$password}')";
        $this->db->query($query);
    }
}