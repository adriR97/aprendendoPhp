<?php
	require "arquivo1.php";

	//o require obriga o arquivo a existir, o include não.
	//o require_once evita que seja chamado duas vezes

	$resultado = soma(10, 40);
	echo $resultado;
?>