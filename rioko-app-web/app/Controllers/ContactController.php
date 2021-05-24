<?php

namespace App\Controllers;

class ContactController extends BaseController
{
	public function contact()
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
		echo view('layouts/menu', $dataUser);
		echo view('contact_view');
		echo view('layouts/footer-simple');
	}
}
