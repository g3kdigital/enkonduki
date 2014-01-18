<?php
include 'app.php';

	$exito= insertar("header.html","footer.html","target.html");

	if($exito)
		header("Location: index.html");//se redirecciona a la url
	else
		echo "algo salio mal";
?>
