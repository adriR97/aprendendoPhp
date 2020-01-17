<?php
	//verificando se o diretorio já existe, senão ele cria
	if(!is_dir("images")) mkdir("images");

	foreach (scandir("images") as $item) {
		if(!in_array($item, array(".",".."))){
			unlink("images/" . $item);
		}
	}

	echo "Arquivos apagados do diretorio images";
?>