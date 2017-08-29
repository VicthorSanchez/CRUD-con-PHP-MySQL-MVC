<?php
	require_once('../Models/cliente.php');

	$boton = $_POST['boton'];

	switch ($boton) {
		case 'registrar':
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$direccion = $_POST['direccion'];
			$telefono = $_POST['telefono'];
			$email = $_POST['email'];

			$instancia = new cliente();
			if($instancia->registrar($dni, $nombre, $apellidos, $direccion, $telefono, $email)) {
				echo "exito";
			} else {
				echo "No se registro";
			}
			break;
		case 'eliminar':
			$id = $_POST['id'];
			$conexion = new cliente();
			if($conexion->eliminarCliente($id)){
				echo 'Cliente eliminado correctamente';
			} else{
				echo "El cliente no se puede eliminar";
			}
			break;
		default:
			break;
	}
?>