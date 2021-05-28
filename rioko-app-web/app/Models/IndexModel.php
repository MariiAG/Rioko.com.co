<?php

namespace App\Models;

use CodeIgniter\Model;

class IndexModel extends Model
{
    function readApartments(){
        $query = "SELECT * FROM apartments WHERE state='disponible'";
        $apartments = $this->db->query($query);
        return $apartments->getResult();
    }

    function readUser($email, $password){
        $query = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $user = $this->db->query($query);
        return $user->getResult();
    }

    function readApartmentSearch($location, $arrival, $departure){
        $query = "SELECT id_apartment FROM apartments WHERE (city = '{$location}' or country= '{$location}') and state = 'disponible'";
        $id_ap = $this->db->query($query);
        $idApartment = $id_ap->getResult();
        // Segundo query
        $queryTwo = "SELECT apartments.*
        FROM apartments
        INNER JOIN bookings
        ON apartments.id_apartment = bookings.id_apartment
        WHERE NOT bookings.arrival='{$arrival}' AND NOT bookings.departure='{$departure}' AND bookings.id_apartment = '{$idApartment[0]->id_apartment}'";
        $apartment = $this->db->query($queryTwo);
        return $apartment->getResult();
    }
}


// $query = "SELECT apartments.*
        // FROM apartments
        // INNER JOIN bookings
        // ON apartments.id_apartment=bookings.id_apartment 
        // WHERE not bookings.arrival='{$arrival}' and not bookings.departure='{$departure}' and (apartments.city = '{$location}' or apartments.country = '{$location}') 
        // and not bookings.stateBooking = 'reservado' and (apartments.state = 'disponible')";