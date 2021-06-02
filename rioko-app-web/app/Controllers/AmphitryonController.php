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

	public function error(){
		echo view('layouts/header');
		echo view('errorUpdateUser_view');
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
		session_start();
		$id_user = $_SESSION['id'];

		$request = \Config\Services::request();
		$amphitryonModel = new AmphitryonModel();
		$state = "disponible";
		$city = $request->getPost('city');
		$country = $request->getPost('country');
		$address = $request->getPost('address');
		$googleMaps = $request->getPost('googleMaps');
		$bedrooms = $request->getPost('bedrooms');
		$price = $request->getPost('price');


		$picture = $request->getFile('picture');
		$imageName = $picture->getRandomName();
		$pathMain = "";
		if ($picture->isValid() && ! $picture->hasMoved())
		{
			$picture->move('./uploads/img/', $imageName);
			$pathMain = base_url()."/public/uploads/img/".$imageName;
		}
		$collage = $request->getFile('collage');
		$imageNameOther = $collage->getRandomName();
		$pathOther = "";
		if ($collage->isValid() && ! $collage->hasMoved())
		{
			$collage->move('./uploads/img/', $imageName);
			$pathOther = base_url()."/public/uploads/img/".$imageNameOther;
		}

		$reviewApartment = $request->getPost('reviewApartment');
		if ($id_user == "" && $city == "" && $country == "" && $address == "" && $googleMaps == "" && $bedrooms == "" && $price == "") {
			sleep(1.5);
			echo view('layouts/header');
			echo view('errorCreateUser_view');
		}else {
			sleep(1.5);
			$amphitryonModel->addApartment($id_user, $city, $country, $address, $googleMaps, $pathMain, $pathOther, $bedrooms, $price, $reviewApartment, $state);
			return redirect()->to('/public/amphitryon');
		}
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
		$bedrooms = $request->getPost('bedrooms');
		$price = $request->getPost('price');
		$reviewApartment = $request->getPost('reviewApartment');

		$picture = $request->getFile('picture');
		$imageName = $picture->getRandomName();
		$pathMain = "";
		if ($picture->isValid() && ! $picture->hasMoved())
		{
			$picture->move('./uploads/img/', $imageName);
			$pathMain = base_url()."/public/uploads/img/".$imageName;
		}
		$collage = $request->getFile('collage');
		$imageNameOther = $collage->getRandomName();
		$pathOther = "";
		if ($collage->isValid() && ! $collage->hasMoved())
		{
			$collage->move('./uploads/img/', $imageName);
			$pathOther = base_url()."/public/uploads/img/".$imageNameOther;
		}

		$amphitryonModel->changeApartment($id_apartment, $city, $country, $address, $googleMaps, $pathMain, $pathOther, $price, $bedrooms, $reviewApartment);
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


// actualizar datos

	public function changeDataPersonal(){
		$request = \Config\Services::request();
		$amphitryonModel = new AmphitryonModel();
		$id_user = $request->getGet('id');
		$name = $request->getPost('name');
		$lastname = $request->getPost('lastname');
		$email = $request->getPost('email');
		$country = $request->getPost('country');
		$password = $request->getPost('password');
		$passwordTwo = $request->getPost('passwordConfirm');
		if ($password != $passwordTwo) {
			return redirect()->to('/public/amphitryon/error');
		}else{
			$amphitryonModel->changeDataPersonal($id_user, $name, $lastname, $email, $country, $password);
			session_start();
			session_destroy();
			sleep(1);
			return redirect()->to('/public/home');
		}
	}
}
