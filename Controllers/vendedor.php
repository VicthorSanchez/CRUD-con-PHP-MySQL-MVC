<?php
	require_once('../Models/vendedor.php');

	$boton = $_POST['boton'];

	switch ($boton) {
		case 'registrar':
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$aPaterno = $_POST['aPaterno'];
			$aMaterno = $_POST['aMaterno'];
			$telefono = $_POST['telefono'];
			$password = $_POST['password'];

			$instancia = new vendedor();
			if (!$instancia->verificarDatos($dni)) {
				if($instancia->registrarDatos($dni, $nombre, $aPaterno, $aMaterno, $telefono, $password)) {
					echo "exito";
				} else {
					echo "El usuario no se registro";
				}	
			} else {
				echo "El usuario ya existe!";
			}
			break;
		case 'buscar':
			$valor = $_POST['valor'];
			$instancia = new vendedor();
			$resultado = $instancia->leerDatos($valor);
			echo json_encode($resultado);
			break;
		case 'eliminar':
			$valor = $_POST['valor'];
			$instancia = new vendedor();
			if ($instancia->eliminarDatos($valor)) {
				echo "Usuario eliminado correctamente";
			} else {
				echo "El usuario no se puede eliminar";
			}
			break;
		case 'actualizar':
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$aPaterno = $_POST['aPaterno'];
			$aMaterno = $_POST['aMaterno'];
			$telefono = $_POST['telefono'];
			$password = $_POST['password'];

			$instancia = new vendedor();
			if($instancia->actualizarDatos($dni, $nombre, $aPaterno, $aMaterno, $telefono, $password)) {
				echo "exito";
			} else {
				echo "Los datos del usuario no se pueden modificar";
			}	
			break;
		default:
			break;
	}
?>