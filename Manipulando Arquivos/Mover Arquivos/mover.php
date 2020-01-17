<?php
	$diretorio1 = "Pasta origem";
	$diretorio2 = "Pasta destino";

	//verificando se existe os diretorios, se não existir ele cria
	if(!is_dir($diretorio1)) mkdir($diretorio1);
	if(!is_dir($diretorio2)) mkdir($diretorio2);

	$filename = "teste.txt";

	if(!file_exists($diretorio1 . DIRECTORY_SEPARATOR . $filename)){
		$file = fopen($diretorio1 . DIRECTORY_SEPARATOR . $filename, "w+");
		date_default_timezone_set("America/Sao_Paulo");
		fwrite($file, date("d-m-Y H:i:s"));
		fclose($file);
	}

	rename(
		$diretorio1 . DIRECTORY_SEPARATOR . $filename,                //origem 
		$diretorio2 . DIRECTORY_SEPARATOR . $filename                 //destino
	);

	echo "Arquivo movido com sucesso";
?>