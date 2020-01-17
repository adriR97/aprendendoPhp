<?php
	//escaneando diretorio
	$images = scandir("images");

	#var_dump($images);

	//percorrendo o diretorio
	foreach ($images as $img) {
		//ignorando o . e o ..
		if(!in_array($img, array(".",".."))){			
			$filename = "images" . DIRECTORY_SEPARATOR . $img;			
			$info = pathinfo($filename);                                                                //obtendo informações do arquivo
			$info["size"] = filesize($filename);                                                        //tamanho do arquivo em bytes
			$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));                              //ultima vez que foi modificado
			$info["url"] = "http://localhost/manipulandoArquivos/" . str_replace("\\", "/", $filename); //obtendo a url do arquivo

			var_dump($info);
		}
	}
?>