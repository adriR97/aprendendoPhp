<?php
	function Nome($nome){
		if(!$nome){
			throw new Exception("Nenhum nome foi informado", 1);			
		}

		echo ucfirst($nome) . "<br>";
	}

	try{
		Nome("Adriane");
		Nome("");
	} catch(Exception $e){
		echo $e->getMessage() . "<br>";
	} finally{
		echo "Executou o Try";
	}
?>