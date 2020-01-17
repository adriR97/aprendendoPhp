<?php
	$data = array(
		"nome"=>"Adriane Rodrigues"
	);

	//definindo o nome e o tempo do cookie em segundos(1 hr)
	setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

	echo "Cookie criado";
?>