<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Enviar</button>
</form>

<?php
	if($_SERVER["REQUEST_METHOD"] === "POST"){                              //guarda o tipo de solicitação
		$file = $_FILES["fileUpload"];                                      //pegando os dados do arquivo 

		if($file["error"]){                                                 //verificando se não existe nenhum erro com o arquivo
			throw new Exception("Error: " . $file["error"]);			
		}

		$diretorio = "uploads";                                             //criando um diretorio pra guardar o arquivo   

		if(!is_dir($diretorio)){                                            //verificando se ele já existe              
			mkdir($diretorio);
		}

		if(move_uploaded_file($file["tmp_name"], $diretorio . DIRECTORY_SEPARATOR . $file["name"])){
			echo "Upload realizado com sucesso";
		} else{
			throw new Exception("Não foi possível realizar o upload!");			
		}
	}
?>