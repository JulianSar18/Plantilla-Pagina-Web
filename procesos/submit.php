<?php 

if(isset($_POST['submit'])){

	if(
		empty($_POST['nombre'])||
		empty($_POST['email'])||
		empty($_POST['mensaje'])){
		//si no estan llenas los campos redirecciona error
		header("Location: ../contacto.html?llena-todos-los-campos");
		exit();
	}
	else{

		$nombre = $_POST['nombre'];
		$email = $_POST['email'];

		if(empty($_POST['telefono'])){

			$telefono = 'no ingreso numero de telefono ';
		}else{
			$telefono = $_POST['telefono'];
		}

		$mensaje = $_POST['mensaje'];
		var_dump($telefono);

	}
}

else{
	//si no manda formulario regresa a contacto
	header("Location: ../contacto.html?error");
}











?>
<a href="../contacto.html">  Regresar</a>