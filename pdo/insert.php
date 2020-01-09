<?php
	$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(:login, :senha)");
	
	$login = "teste";
	$senha = "abcd";

	$stmt->bindParam(":login",$login);
	$stmt->bindParam(":senha",$senha);

	$stmt->execute();
?>