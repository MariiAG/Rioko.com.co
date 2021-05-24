<?php

namespace App\Controllers;

class InvitedController extends BaseController
{
	public function invited()
	{
		// $session = session();
		// $country = $session->get('country');
		// $email = $session->get('email');
		// $id_user = $session->get('id');
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
			"country" => $country,
			"email" => $email,
			"id_user" => $id_user,
			"type" => $type,
			"name" => $name,
			"lastname" => $lastname,
		);
		
		echo view('layouts/header');
		echo view('layouts/menu', $dataUser);
		echo view('invited_view');
	}
}
