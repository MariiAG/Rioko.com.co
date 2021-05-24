<?php

namespace App\Models;

use CodeIgniter\Model;

class IndexModel extends Model
{
    function readApartments(){
        $query = "SELECT * FROM apartments";
        $apartments = $this->db->query($query);
        return $apartments->getResult();
    }

    function readUser($email, $password){
        $query = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $user = $this->db->query($query);
        return $user->getResult();
    }
}