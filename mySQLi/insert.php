<?php
	$conn = new mysqli("localhost", "root", "","dbphp7");

	if($conn->connect_error){  
		//se existir algum error de conexão                     
		echo "Error: " . $conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(?,?)");

	$login = "adri";
	$senha = "12345";
	/*definindo o tipo e depois passando os parametros
	s: string
	d: double
	i: inteiro*/
	$stmt->bind_param("ss", $login, $senha); 
	$stmt->execute();

	//inserindo mais um registro na tabela
	$login = "adri2";
	$senha = "seila";
	$stmt->execute();
?>