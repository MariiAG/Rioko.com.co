<?php

namespace App\Controllers;
use App\Models\LoginModel;

class LoginController extends BaseController
{
	public function login()
	{
		// $session = session();
		// $type = $session->get('type');
		// $name = $session->get('name');
		// $lastname = $session->get('lastname');
		
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
		echo view('login_view');
		echo view('layouts/footer-simple');
	}

	public function addUser()
	{
		$request = \Config\Services::request();
		$loginModel = new LoginModel();
		$type = $request->getPost('type');
		$name = $request->getPost('name');
		$lastname = $request->getPost('lastname');
		$email = $request->getPost('email');
		$country = $request->getPost('country');
		$password = $request->getPost('password');
		$loginModel->addUser($type, $name, $lastname, $email, $country, $password);
		return redirect()->to('/public/home');
	}

	public function error(){
		echo view('layouts/header');
		echo view('errorLogInUser_view');
	}
}
