<?php
	require_once('../Models/usuario.php');

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$new = new usuario();
	$array = $new->identificar($usuario, $password);
	if ($array[0] == 0) {
		echo '0';
	} else {
		session_start();
		$_SESSION['user']= $usuario;
	}
?>