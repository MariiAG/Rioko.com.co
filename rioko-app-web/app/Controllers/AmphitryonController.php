<?php

namespace App\Controllers;
use App\Models\AmphitryonModel;

class AmphitryonController extends BaseController
{
	public function amphitryon()
	{
		// $session = session();
		// $country = $session->get('country');
		// $email = $session->get('email');
		// $id_user = $session->get('id');
		// $type = $session->get('type');
		// $name = $session->get('name');
		// $lastname = $session->get('lastname');

		session_start();
		$country = $_SESSION['country'] ;
		$email = $_SESSION['email'];
		$id_user = $_SESSION['id'];
		$type = $_SESSION['type'];
		$name = $_SESSION['name'];
		$lastname = $_SESSION['lastname'];

		$dataUser = array(
			"country" => $country,
			"email" => $email,
			"id_user" => $id_user,
			"type" => $type,
			"name" => $name,
			"lastname" => $lastname,
		);

		$amphitryonModel = new AmphitryonModel();
		$resultApartments = $amphitryonModel->readApartmentsAmphitryon($id_user);
		$resultReviews = $amphitryonModel->readReviewsAmphitryon($id_user);
		$id_invited = $resultReviews[0]->id_user;
		$resultInvited = $amphitryonModel->readInvited($id_invited);
		$resultQuantityReviews = $amphitryonModel->quantityReviews($id_user);
		$dataQuery = array(
			"apartments" => $resultApartments,
			"reviews" => $resultReviews,
			"invited" => $resultInvited,
			"quantityReviews" => $resultQuantityReviews,
		);

		// if ($session->get('type') != "" || $session->get('type') != null) {

		if ($_SESSION['type'] != "" || $_SESSION['type'] != null) {

			echo view('layouts/header');
			echo view('layouts/menu', $dataUser);
			echo view('amphitryon_view', $dataQuery);
		}else {
			echo "No tiene permisos para acceder";
		}
	}

// Crear
	public function createApartment()
	{
		session_start();
		if(!isset($_SESSION['type'])){
			$type="";
			$name = "";
			$lastname ="";
		}
		else {
			$type = $_SESSION['type'];
			$name = $_SESSION['name'];
			$lastname = $_SESSION['lastname'];
		}

		$dataUser = array(
			"type" => $type,
			"name" => $name,
			"lastname" => $lastname,
		);
		echo view('layouts/header');
		echo view('createApartment_view', $dataUser);
		echo view('layouts/footer-simple');
	}

	public function addApartment()
	{
		$request = \Config\Services::request();
		$amphitryonModel = new AmphitryonModel();
		$state = "disponible";
		$id_user = $request->getPost('id_user');
		$city = $request->getPost('city');
		$country = $request->getPost('country');
		$address = $request->getPost('address');
		$googleMaps = $request->getPost('googleMaps');
		$picture = $request->getPost('picture');
		$collage = $request->getPost('collage');
		$price = $request->getPost('price');
		$reviewApartment = $request->getPost('reviewApartment');
		$amphitryonModel->addApartment($id_user, $city, $country, $address, $googleMaps, $picture, $collage, $price, $reviewApartment, $state);
		return redirect()->to('/public/amphitryon');
	}

// actualizar 
	public function updateApartment()
	{
		$request = \Config\Services::request();
		$amphitryonModel = new AmphitryonModel();
		$id = $request->getGet('id');
		$resultApartment = $amphitryonModel->readUpdateApartment($id);
		$dataQuery = array(
			"upApartment" => $resultApartment[0],
		);
		echo view('layouts/header');
		echo view('updateApartment_view', $dataQuery);
		echo view('layouts/footer-simple');
	}

	public function changeApartment(){
		$request = \Config\Services::request();
		$amphitryonModel = new AmphitryonModel();
		$id_apartment = $request->getGet('id');
		$city = $request->getPost('city');
		$country = $request->getPost('country');
		$address = $request->getPost('address');
		$googleMaps = $request->getPost('googleMaps');
		$picture = $request->getPost('picture');
		$collage = $request->getPost('collage');
		$price = $request->getPost('price');
		$reviewApartment = $request->getPost('reviewApartment');
		$amphitryonModel->changeApartment($id_apartment, $city, $country, $address, $googleMaps, $picture, $collage, $price, $reviewApartment);
		return redirect()->to('/public/amphitryon');
	}

//	cerrar Sesion 
	public function close(){
		session_start();
		session_destroy();
		return redirect()->to('/public/home');
	}

//	Eliminar apartamentos
	public function deleteApartment(){
		$request = \Config\Services::request();
		$amphitryonModel = new AmphitryonModel();
		$id = $request->getGet('id');
		$amphitryonModel->deleteApartment($id);
		return redirect()->to('/public/amphitryon');
	}
}
