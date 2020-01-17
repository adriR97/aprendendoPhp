<?php
	$cep = "82640010";
	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$resposta = curl_exec($ch);

	curl_close($ch);                                              //fechando conexão

	$data = json_decode($resposta, true);                         //transformando a resposta em array

	print_r($data);
?>