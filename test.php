<?php 
$b="abcdef";
$target='<header><nav>aqui</nav></header>';

$code='<nav>';


     
	echo $b;
	echo $target;
	printf( substr($target,1));
	print_r(str_split($target));
?>