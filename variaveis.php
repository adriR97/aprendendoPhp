<?php
	$nome = "Adriane";                             //criando a variável
	$sobrenome = "Rodrigues";					   //string
	$ano = 1997;                                   //int
	$salario = 3500.00;                            //double
	$nomeCompleto = $nome . " " . $sobrenome;      //concatenação

	echo $nomeCompleto;                            //imprimindo
	echo "<br/>";

	var_dump($nome);              //exibindo informações(tipo, qtd caracteres e variável)
	echo "<br/>";

	unset($nome);                                  //limpando a variável

	if(isset($nome)){                              //se a variável existir
		echo $nome;
	} elseif (isset($sobrenome)) {
		echo $sobrenome;
	}
?>