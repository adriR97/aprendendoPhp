<?php
	header("Content-type: image/jpeg");

	$file = "wallpaper.jpg";
	$newWidth = 256;
	$newHeight = 256;

	//pegando o tamanho original da imagem
	list($oldWidth, $oldHeight) = getimagesize($file);

	$newImage = imagecreatetruecolor($newWidth, $newHeight);
	$oldImage = imagecreatefromjpeg($file);

	//juntando a nova imagem com a antiga
	/*
		nova imagem, imagem origem, ponto de inicio do eixo x e y da nova imagem, 
		ponto de inicio do eixo x e y da imagem de origem (serve para recortar),
		nova largura, nova altura, largura antiga, altura antiga
	*/
	imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

	imagejpeg($newImage);
	imagedestroy($oldImage);
	imagedestroy($newImage);
?>