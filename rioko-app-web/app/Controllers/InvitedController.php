<?php

namespace App\Controllers;
use App\Models\InvitedModel;

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

		$invitedModel = new InvitedModel();
		$resultApartments = $invitedModel->readApartments($id_user);

		$dataQuery = array(
			"apartments" => $resultApartments,
		);
		
		echo view('layouts/header', $dataUser);
		echo view('layouts/menu', $dataQuery);
		echo view('invited_view');
	}

	public function changeDataPersonal(){
		$request = \Config\Services::request();
		$invitedModel = new InvitedModel();
		$id_user = $request->getGet('id');
		$name = $request->getPost('name');
		$lastname = $request->getPost('lastname');
		$email = $request->getPost('email');
		$country = $request->getPost('country');
		$password = $request->getPost('password');
		$passwordTwo = $request->getPost('passwordConfirm');
		if ($password === $passwordTwo) {
			$invitedModel->changeDataPersonal($id_user, $name, $lastname, $email, $country, $password);
			session_start();
			session_destroy();
			sleep(1);
			return redirect()->to('/public/home');
		}else{
			return redirect()->to('/public/amphitryon/error');
		}
	}

	public function deleteBooking(){
		$request = \Config\Services::request();
		$invitedModel = new invitedModel();
		$id = $request->getGet('id');
		$invitedModel->deleteBookings($id);
		sleep(1);
		return redirect()->to('/public/invited');
	}
}
