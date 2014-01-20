<?php
include_once 'app.php';
	$accion=$_GET["accion"] ;
	if ($accion=="reset") {
		$exito= reiniciar("header.html","footer.html","target.html");

		if($exito)
			header("Location: index.html");//se redirecciona a la url
		else
			print("algo salio mal");
	}else{
		$exito= insertar("header.html","footer.html","target.html");

		if($exito)
			header("Location: index.html");//se redirecciona a la url
		else
			print("algo salio mal");

	}	
?>
