<?php
	//definindo o tipo de resposta do arquivo
	header("Content-Type: image/png"); 

	//criando e definindo largura/altura
	$image = imagecreate(256, 256);

	//criando palheta de cores: a primeira cor se torna a de fundo
	/*
		imagem, vermelho, verde, azul
	*/
	$black = imagecolorallocate($image, 0, 0, 0);
	$red = imagecolorallocate($image, 255, 0, 0);

	//escrevendo na tela
	/*
		imagem, tamanho da fonte (1 a 5), margem esquerda, margem de cima, frase, cor
	*/
	imagestring($image, 5, 40, 120, "Athletico Paranaense", $red);

	//gerar a imagem
	imagepng($image);

	//fechar|destruir a imagem
	imagedestroy($image);

?>