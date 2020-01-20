<?php
	//pegando uma imagem já existente
	$image = imagecreatefromjpeg("certificado.jpg");

	$titulo = imagecolorallocate($image, 0, 0, 0);
	$cinza = imagecolorallocate($image, 100, 100, 100);

	imagestring($image, 5, 432, 150, "CERTIFICADO", $titulo);
	imagestring($image, 5, 410, 350, "Adriane Rodrigues", $titulo);
	imagestring($image, 5, 380, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titulo);

	header("Content-type: image/jpeg");

	//gerando uma imagem
	/*
		imagem, nome, qualidade(0 a 100)
	*/
	imagejpeg($image, "certificado-alterado.jpg", 30);
	imagedestroy($image);
?>