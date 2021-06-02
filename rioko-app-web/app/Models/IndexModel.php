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
        $query = "SELECT id_apartment FROM apartments WHERE (city = '{$location}' or country = '{$location}') and state = 'disponible'";
        $id_ap = $this->db->query($query);
        $idApartment = $id_ap->getResult();
        
        if ($idApartment == null || $idApartment == "") {
            return $id_ap->getResult();
        }else{
            $queryTwo ="SELECT id_booking FROM bookings WHERE id_apartment = '{$idApartment[0]->id_apartment}'";
            $id_booking = $this->db->query($queryTwo);
            $idBooking = $id_booking->getResult();
            
            if ($idBooking == null || $idBooking == "") {
                $queryThree = "SELECT distinct * FROM apartments WHERE id_apartment='{$idApartment[0]->id_apartment}'";
                $apartments = $this->db->query($queryThree);
                return $apartments->getResult();
            }else{
                $queryFour = "SELECT distinct apartments.*
                FROM apartments
                INNER JOIN bookings
                ON apartments.id_apartment = bookings.id_apartment
                WHERE NOT bookings.arrival='{$arrival}' AND NOT bookings.departure='{$departure}' AND bookings.id_apartment = '{$idApartment[0]->id_apartment}'";
                $apartment = $this->db->query($queryFour);
                return $apartment->getResult();
            }
        }
    }
}