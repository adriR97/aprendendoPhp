<?php
	$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:login, dessenha=:senha WHERE idusuario=:id");

	$login = "adriiii";
	$senha = "testando";
	$id = "2";

	$stmt->bindParam(":login", $login);
	$stmt->bindParam(":senha", $senha);
	$stmt->bindParam(":id",$id);

	$stmt->execute();
?>