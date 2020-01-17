<?php
	$filename = "usuarios.csv";

	//se o arquivo existir
	if(file_exists($filename)){
		//abre o arquivo em modo leitura
		$file = fopen($filename, "r");

		/*pegando a primeira linha do arquivo (no caso o cabeçalho).
		O explode serve pra criar um array separando as colunas pelo |, 
		senão iria vir tudo como uma única string*/
		$cabecalho = explode("|", fgets($file));
		$data = array();

		while($row = fgets($file)){
			$rowData = explode("|", $row);
			$linha = array();

			for($i=0; $i<count($cabecalho); $i++){
				//alimentando a linha com os dados do usuário
				$linha[$cabecalho[$i]] = $rowData[$i];
			}

			//alimentando o array data com todas as linhas
			array_push($data, $linha);
		}

		fclose($file);

		echo json_encode($data);
	}
?>