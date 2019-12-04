<?php
	$pessoas = array();

	array_push($pessoas, array(       
		'nome' => 'Adriane',
		'idade' => 21
	));

	array_push($pessoas, array(       
		'nome' => 'Rodrigues',
		'idade' => 25
	));

	echo json_encode($pessoas);                   //transforma array em json
	echo "<br/><br/>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$json = '[{"nome":"Adri\u00e2ne","idade":21},{"nome":"Rodr\u00edgues","idade":25}]';
	$data = json_decode($json, true);             //passa o json para o array
	var_dump($data);
?>