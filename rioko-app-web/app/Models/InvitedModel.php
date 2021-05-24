<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitedModel extends Model
{
    function addApartment($id_user, $city, $country, $address, $googleMaps, $picture, $collage, $price, $reviewApartment, $state){
        $query = "INSERT INTO apartments (id_user, city, country, address, googleMaps, picture, collage, price, review_apartment, state) VALUES ('{$id_user}', '{$city}', '{$country}', '{$address}', '{$googleMaps}', '{$picture}', '{$collage}', '{$price}', '{$reviewApartment}', '{$state}')";
        $this->db->query($query);
    }
}