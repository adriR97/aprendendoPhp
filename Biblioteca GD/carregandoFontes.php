<?php
	//pegando uma imagem já existente
	$image = imagecreatefromjpeg("certificado.jpg");

	$titulo = imagecolorallocate($image, 0, 0, 0);
	$cinza = imagecolorallocate($image, 100, 100, 100);

	//trocando a fonte
	/*
		imagem, tamanho da fonte, ângulo, margem esquerda, margem de cima, cor, caminho da fonte, texto
	*/
	imagettftext($image, 32, 0, 315	, 250, $titulo, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR.
		"Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
	imagettftext($image, 32, 0, 335, 350, $titulo, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR.
		"Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Adriane Rodrigues");
	imagestring($image, 5, 380, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titulo);

	header("Content-type: image/jpeg");
	imagejpeg($image);
	imagedestroy($image);
?>