<?php
	$nome = "adriane rodrigues";

	echo "Maiúsculo: " . strtoupper($nome) . "<br/>";         
	echo "Minúsculo: " . strtolower($nome) . "<br/>";                       
	echo "Primeira letra de cada palavra em maiúsculo: " . ucwords($nome) . "<br/>";
	echo "Primeira letra da primeira palavra em maiúsculo: " .  ucfirst($nome) . "<br/>";                          
	echo "Trocando caracteres: " . str_replace("e", "3", $nome) . "<br/>";         
	echo "Índice da palavra(posição): " . strpos($nome, "rodrigues") . "<br/>";  
	echo "Imprimindo do início até a posição indicada (9): " . substr($nome, 0, 9) . "<br/>";      
	echo "Imprimindo da posição indicada até o final: " . substr($nome, 4) . "<br/>";         
	echo "Quantidade de caracteres: " . strlen($nome) . "<br/>";    
	echo "Quantidade de palavras: " . str_word_count($nome) . "<br/>";          
	echo "Inverte as palavras: " . strrev($nome) . "<br/>"; 
?>