<?php
	$conn = new mysqli("localhost", "root", "","dbphp7");

	if($conn->connect_error){  
		//se existir algum error de conexão                     
		echo "Error: " . $conn->connect_error;
	}

	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
	$data = array();

	while($row = $result->fetch_assoc()){
		/*verificando se existe algum registro dentro da variavel $result
		e armazenando na variavel $row*/
		//var_dump($row);

		array_push($data, $row); //adicionando os registros no array
	}

	echo json_encode($data);  //convertendo para json
?>