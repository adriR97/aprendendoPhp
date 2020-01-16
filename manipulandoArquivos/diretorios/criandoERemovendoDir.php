<?php
	//criando um variavel com o nome do diretorio
	$diretorio = "images";

	if(!is_dir($diretorio)){
		//se o diretorio não existir será criado
		mkdir($diretorio);
		echo "Diretório $diretorio criado com sucesso";
	} else{
		//se o diretório já existir irá removê-lo
		rmdir($diretorio);
		echo "Diretório $diretorio removido com sucesso!";
	}
?>