<?php
	require_once('../Models/articulo.php');

	$boton = $_POST['boton'];

	switch ($boton) {
		case 'registrar':
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$marca = $_POST['marca'];
			$categoria = $_POST['categoria'];
			$descripcion = $_POST['descripcion'];
			$precio = $_POST['precio'];
			$stock = $_POST['stock'];

			$instancia = new articulo();
			if (!$instancia->verificarDatos($dni)) {
				if($instancia->registrarDatos($dni, $nombre, $marca, $categoria, $descripcion, $precio, $stock)) {
					echo "exito";
				} else {
					echo "El articulo no se registro";
				}	
			} else {
				echo "El articulo ya existe!";
			}
			break;
		case 'buscar':
			$valor = $_POST['valor'];
			$instancia = new articulo();
			$resultado = $instancia->leerDatos($valor);
			echo json_encode($resultado);
			break;
		case 'eliminar':
			$valor = $_POST['valor'];
			$instancia = new articulo();
			if ($instancia->eliminarDatos($valor)) {
				echo "Articulo eliminado correctamente";
			} else {
				echo "El articulo no se puede eliminar";
			}
			break;
		case 'actualizar':
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$marca = $_POST['marca'];
			$categoria = $_POST['categoria'];
			$descripcion = $_POST['descripcion'];
			$precio = $_POST['precio'];
			$stock = $_POST['stock'];

			$instancia = new articulo();
			if($instancia->actualizarDatos($dni, $nombre, $marca, $categoria, $descripcion, $precio, $stock)) {
				echo "exito";
			} else {
				echo "Los datos del articulo no se pueden modificar";
			}	
			break;
		default:
			break;
	}
?>