<?php
	$var = 55;

	if(empty($var)){
		#verifica se a variável está vazia
		echo "Está vazia.";
	} elseif (isset($var)){
		#verifica se a variável foi iniciada
		echo "A variável existe";
	}

	echo "<br>------------------<br>";

	#verificando o tipo da variável
	if(is_array($var)){
		echo "É um array";
	} elseif(is_bool($var)){
		echo "É um booleano";
	} elseif(is_float($var)){
		echo "É um float";
	} elseif(is_int($var)){
		echo "É um inteiro";
	} elseif(is_string($var)){
		echo "É uma string";
	}
?>