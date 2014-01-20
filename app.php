<?php

//metodo donde esta recibe el header, el footer y el target del archivo a cambiar
function insertar($headerUrl,$footerUrl,$targetUrl)
{
	$header = file_get_contents($headerUrl); //cargo el archivo header.html
	$footer = file_get_contents($footerUrl); //cargo el archivo footer.html
	$target = file_get_contents($targetUrl); //cargo el archivo target.html

	$target = str_ireplace('<header>', $header, $target); // se inserta el header en target.html
	$target = str_ireplace("<footer>", $footer, $target); // se inserta el footer en target.html

	file_put_contents($targetUrl,$target);//se guarda el archivo modificado
	return true;
}

function reiniciar($headerUrl,$footerUrl,$targetUrl){

	$header = file_get_contents($headerUrl); //cargo el archivo header.html 
	$footer = file_get_contents($footerUrl); //cargo el archivo footer.html
	$target = file_get_contents($targetUrl); //cargo el archivo target.html

	$target = str_ireplace($header,'<header>', $target); // se inserta el header en target.html
	$target = str_ireplace($footer,"<footer>", $target); // se inserta el footer en target.html

	file_put_contents($targetUrl,$target);//se guarda el archivo modificado
	return true;
}

?>