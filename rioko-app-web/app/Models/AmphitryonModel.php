<?php

namespace App\Models;

use CodeIgniter\Model;

class AmphitryonModel extends Model
{
// ampthitryon data
    function readApartmentsAmphitryon($id){
        $query = "SELECT * FROM apartments WHERE id_amphitryon='{$id}'";
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

    function readReviewsAmphitryon($id){
        $query = "SELECT * FROM reviews where id_amphitryon='{$id}'";
        $reviews = $this->db->query($query);
        return $reviews->getResult();
    }
    function quantityReviews($id){
        $query = "SELECT COUNT(id_amphitryon) AS total FROM reviews WHERE id_amphitryon = '{$id}'";
        $quantity = $this->db->query($query);
        return $quantity->getResult();
    }
    function readInvited($id){
        $query = "SELECT reviews.*, users.name, users.lastname FROM reviews INNER JOIN users ON reviews.id_user = users.id_user;";
        $invited = $this->db->query($query);
        return $invited->getResult();
    }

// createApartment
    function addApartment($id_user, $city, $country, $address, $googleMaps, $pathMain, $pathOther, $bedrooms, $price, $reviewApartment, $state){
        $query = "INSERT INTO apartments (id_amphitryon, city, country, address, googleMaps, picture, collage, bedrooms, price, review_apartment, state) VALUES ('{$id_user}', '{$city}', '{$country}', '{$address}', '{$googleMaps}', '{$pathMain}', '{$pathOther}', '{$bedrooms}', '{$price}', '{$reviewApartment}', '{$state}')";
        $this->db->query($query);
    }

// updateApartment
    function readUpdateApartment($id){
        $query = "SELECT * FROM apartments WHERE id_apartment='{$id}'";
        $apartment = $this->db->query($query);
        return $apartment->getResult();
    }

    function changeApartment($id_apartment, $city, $country, $address, $googleMaps, $picture, $collage, $bedrooms, $price, $reviewApartment){
        if ($picture == "" || $collage == "") {
            $query = "UPDATE apartments SET city = '{$city}', country = '{$country}', address = '{$address}', googleMaps = '{$googleMaps}', bedrooms = '{$bedrooms}', price = '{$price}', review_apartment = '{$reviewApartment}' WHERE id_apartment = '{$id_apartment}'";
            $this->db->query($query);
        }else {
            $query = "UPDATE apartments SET city = '{$city}', country = '{$country}', address = '{$address}', googleMaps = '{$googleMaps}', picture = '{$picture}', collage = '{$collage}', bedrooms = '{$bedrooms}', price = '{$price}', review_apartment = '{$reviewApartment}' WHERE id_apartment = '{$id_apartment}'";
            $this->db->query($query);
        }
    }

// deleteApartment
    function deleteApartment($id){
        $query = "DELETE FROM apartments WHERE id_apartment='{$id}'";
        $this->db->query($query);
    }
}