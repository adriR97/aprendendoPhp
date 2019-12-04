<?php
	$frutas = array("morango","atemoia","melancia");
	print_r($frutas);                                //imprimindo o array
	echo "<br/><br/>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	//Array bidimensional
	$instrumentos[0][0] = "Guitarras";
	$instrumentos[0][1] = "Fender";
	$instrumentos[0][2] = "Ibanez";
	$instrumentos[0][3] = "Dean";

	$instrumentos[1][0] = "Baterias";
	$instrumentos[1][1] = "Tama";
	$instrumentos[1][2] = "Yamaha";
	$instrumentos[1][3] = "Pearl";

	echo $instrumentos[0][2];                         //imprimindo o valor de um índice
	echo "<br/>";                           
	echo end($instrumentos[1]);                       //imprimindo o último valor do array baterias
	echo "<br/><br/>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$pessoas = array();

	array_push($pessoas, array(                       //adicionando um novo valor ao array
		'nome' => 'Adriane',
		'idade' => 21
	));

	print_r($pessoas);
?>