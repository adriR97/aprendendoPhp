<?php
	spl_autoload_register(function($nomeClass){
		$dirClass = "class";                                    //pasta class
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClass . ".php";

		if(file_exists($filename)){                             //verificando se o caminho existe
			require_once($filename);
		}                              
	});
?>