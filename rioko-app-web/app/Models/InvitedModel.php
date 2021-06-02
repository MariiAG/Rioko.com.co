<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitedModel extends Model
{
    function addApartment($id_user, $city, $country, $address, $googleMaps, $picture, $collage, $price, $reviewApartment, $state){
        $query = "INSERT INTO apartments (id_user, city, country, address, googleMaps, picture, collage, price, review_apartment, state) VALUES ('{$id_user}', '{$city}', '{$country}', '{$address}', '{$googleMaps}', '{$picture}', '{$collage}', '{$price}', '{$reviewApartment}', '{$state}')";
        $this->db->query($query);
    }

    function readApartments($id){
        $query = "SELECT bookings.*, apartments.*, users.name, users.lastname
        FROM ((bookings
        INNER JOIN apartments ON bookings.id_apartment = apartments.id_apartment)
        INNER JOIN users ON bookings.id_amphitryon = users.id_user) WHERE bookings.id_user = '{$id}'";
        $apartments = $this->db->query($query);
        return $apartments->getResult();
    }

    function changeDataPersonal($id_user, $name, $lastname, $email, $country, $password){
        if ($password != "" || $password != null) {
            $query = "UPDATE users SET name = '{$name}', lastname = '{$lastname}', email = '{$email}', country = '{$country}', password = '{$password}' WHERE id_user = '{$id_user}'";            
            $this->db->query($query);
        }else{
            $query = "UPDATE users SET name = '{$name}', lastname = '{$lastname}', email = '{$email}', country = '{$country}' WHERE id_user = '{$id_user}'";               $this->db->query($query);
        }
    }

    function deleteBookings($id){
        $query = "DELETE FROM bookings WHERE id_booking='{$id}'";
        $this->db->query($query);
    }

    function addBooking($id_user, $id_apartment, $id_amphitryon, $arrival, $departure, $state){
        $query = "INSERT INTO bookings (id_user, id_apartment, id_amphitryon, arrival, departure, stateBooking) VALUES ('{$id_user}', '{$id_apartment}', '{$id_amphitryon}', '{$arrival}', '{$departure}', '{$state}')";
        $this->db->query($query);
    }
}