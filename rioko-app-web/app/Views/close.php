<?php
	session_start();
	session_destroy();
	redirect()->to('/public/home');
?>