<?php

namespace App\Controllers;
use App\Models\IndexModel;

class Home extends BaseController
{
	public function index()
	{
		$indexModel = new IndexModel();
		$resultApartments= $indexModel->readApartments();
		// $available = $this->search();

		//   var_dump($available);

		$dataApartments = array(
			// "av" => $available,
			"ap" => $resultApartments,
		);

		// $session = session();
		// $type = $session->get('type');
		// $name = $session->get('name');
		// $lastname = $session->get('lastname');

		// Dado que el query viene vacío sin iniciar sesión no se crea el arreglo Session, hay que crear las variables vacías
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
		echo view('layouts/menu', $dataUser);
		echo view('index_view', $dataApartments);
		echo view('layouts/footer-simple');
	}	

	public function signIn()
	{
		$request = \Config\Services::request();
		$loginModel = new IndexModel();
		$email = $request->getPost('emailUser');
		$password = $request->getPost('passwordUser');
		$resultUser = $loginModel->readUser($email, $password);
			// $session = session();
			// $type = $resultUser[0]->type;
			// $newdata = [
			// 	'id' => $resultUser[0]->id_user,
			// 	'type' => $resultUser[0]->type,
			// 	'name' => $resultUser[0]->name,
			// 	'lastname' => $resultUser[0]->lastname,
			// 	'email' => $resultUser[0]->email,
			// 	'country' => $resultUser[0]->country,
			// ];
			// $session->set($newdata);

			session_start();
			if ($resultUser == null) {
				return redirect()->to('/public/error');
			}else{
				$type = $resultUser[0]->type;
				$pwd = $resultUser[0]->password;
				$_SESSION['id'] = $resultUser[0]->id_user;
				$_SESSION['type'] = $resultUser[0]->type;
				$_SESSION['name'] = $resultUser[0]->name;
				$_SESSION['lastname'] = $resultUser[0]->lastname;
				$_SESSION['email'] = $resultUser[0]->email;
				$_SESSION['country'] = $resultUser[0]->country;

				if ($type == "invitado") {
					return redirect()->to('/public/invited');
				}else{
					return redirect()->to('/public/amphitryon');
				}
			}	
	}

	public function search(){
		$request = \Config\Services::request();
		$indexModel = new IndexModel();
		$location = $request->getPost('location');
		$arrival = $request->getPost('arrival');
		$departure = $request->getPost('departure');
		$result = $indexModel->readApartmentSearch($location, $arrival, $departure);
		if ($result != null || $result != "") {
			$data = array(
				"av" => $result,
			);
			echo view('layouts/header');
			echo view('available_view', $data);
		}else{
			echo view('errorLogInUser_view', $data);
		}
	}

	// public function searchGet(){
	// 	$indexModel = new IndexModel();
	// 	$request = \Config\Services::request();
	// 	$location = $request->getGet('location');
	// 	$available = $indexModel->readApartmentSearch($location);
	// 	$data = array(
	// 		"data" => $available,
	// 	);

	// 	echo view('layouts/header');
	// 	echo view('layouts/menu', $available);
	// }
}
