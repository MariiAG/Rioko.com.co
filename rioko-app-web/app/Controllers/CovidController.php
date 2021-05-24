<?php

namespace App\Controllers;

class CovidController extends BaseController
{
	public function covid()
	{
		// $session = session();
		// $type = $session->get('type');
		// $name = $session->get('name');
		// $lastname = $session->get('lastname');

		session_start();
		// Dado que el query viene vacío sin iniciar sesión no se crea el arreglo Session, hay que crear las variables vacías
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
		echo view('covid_view');
		echo view('layouts/footer-simple');
	}
}
