<?php
	$file = fopen("log.txt", "a+");

	#Modos fopen:
	//r --> Leitura, coloca o ponteiro no início
	//r+ --> Leitura e escrita, coloca o ponteiro no início
	//w --> Escrita, coloca o ponteiro no início e se o arquivo não existir tenta criá-lo
	//w+ --> Leitura e escrita, coloca o ponteiro no início e se o arquivo não existir tenta criá-lo
	//a --> Escrita, coloca o ponteiro no final e se o arquivo não existir tenta criá-lo
	//a+ --> Leitura e escrita, coloca o ponteiro no final e se o arquivo não existir tenta criá-lo

	date_default_timezone_set("America/Sao_Paulo");
	fwrite($file, date("d-m-Y H:i:s") . "\r\n");                  //escrevendo a data no arquivo
	fclose($file);                                                //fechando o arquivo

	echo "Arquivo criado com sucesso";

?>