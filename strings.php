<?php
	$nome = "adriane rodrigues";

	echo strtoupper($nome) . "<br/>";                       //maiúsculo
	echo strtolower($nome) . "<br/>";                       //minúsculo
	echo ucwords($nome) . "<br/>";                          //primeira letra de cada palavra em maiúsculo
	echo ucfirst($nome) . "<br/>";                          //primeira letra da primeira palavra em maiúsculo
	echo str_replace("e", "3", $nome) . "<br/>";            //trocando caracteres
	echo strpos($nome, "rodrigues") . "<br/>";              //índice da palavra(posição)  
	echo substr($nome, 0, 9) . "<br/>";                     //imprimindo do início até a posição indicada (9)  
	echo substr($nome, 4) . "<br/>";                        //imprimindo da posição indicada até o final 
	echo strlen($nome);                                     //quantidade de caracteres 
?>