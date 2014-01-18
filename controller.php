<?php
include 'app.php';

	if(insertar("header.html","footer.html","target.html"))
		header("Location: $index.php");//se redirecciona a la url
	else
		echo "algo salio mal";
?>
