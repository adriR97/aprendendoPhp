<?php
	require_once("config.php");

	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
	$cabecalho = array();

	foreach ($usuarios[0] as $key => $value) {
		//alimentando o cabeçalho e deixando a primeira letra em maiúsculo
		array_push($cabecalho, ucfirst($key));
	}

	//criando um arquivo do tipo csv
	$file = fopen("usuarios.csv", "w+");
	//escrendo o cabeçalho e separando com |
	fwrite($file, implode("|", $cabecalho)  . "\r\n");

	foreach ($usuarios as $row) {
		//alimentando as linhas com os dados dos usuários
		$data = array();

		foreach ($row as $key => $value) {
			array_push($data, $value);
		}

		//escrevendo as linhas no arquivo e separando com |
		fwrite($file, implode("|", $data) . "\r\n");
	}

	//fechando o arquivo
	fclose($file);

	echo "Arquivo csv criado";
?>