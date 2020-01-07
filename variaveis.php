<?php
	$nome = "Adriane";                             //criando a variável global
	$sobrenome = "Rodrigues";					   //string
	$ano = 1997;                                   //int
	$salario = 3500.00;                            //float
	$solteira = true;                              //booleano
	$nomeCompleto = $nome . " " . $sobrenome;      //concatenação

	//imprimindo
	echo $nomeCompleto;                            
	echo "<br/>";
	print $ano;
	print "<br>";

	//exibindo informações(tipo, qtd caracteres e variável)
	var_dump($nome);                               
	echo "<br/>";

	//limpando a variável
	unset($nome);                                  

	#verificando se a variável existe
	if(isset($nome)){                           
		echo $nome;
	} elseif (isset($sobrenome)) {
		echo $sobrenome;
	}

	echo "<br/>";

	//passando uma variável global para um método
	function teste(){
		global $sobrenome;	
		echo "Adriane " . $sobrenome;	
	}

	teste();
?>