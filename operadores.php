<?php
	//Operadores de atribuição
	echo "<b>Operadores de atribuição:</b><br/>";
	$nome = "Adriane";                         //= -> igual
	echo $nome . " Rodrigues<br/>";            //. -> concatenação

	$valorTotal = 0;
	$valorTotal += 100;                        //+= -> variavel = variavel + 100
	echo $valorTotal . "<br/>";                
	$valorTotal -= 25;                         //-= -> variavel = variavel - 100
	echo $valorTotal . "<br/>";
	$valorTotal *= 0.8;                        //*= -> porcentagem
	echo $valorTotal;


	//Operadores Aritméticos
	echo "<br/><br/><b>Operadores aritméticos:</b><br/>";
	$a = 10;
	$b = 5;

	echo $a + $b . "<br/>";                    //soma
	echo $a - $b . "<br/>";                    //subtração
	echo $a * $b . "<br/>";                    //multiplicação
	echo $a / $b . "<br/>";                    //divisão
	echo $a % $b . "<br/>";                    //resto
	echo $a ** $b;                             //exponenciação


	//Operadores de comparação
	echo "<br/><br/><b>Operadores de comparação:</b><br/>";
	$a = 20;
	$b = 30;

	var_dump($a > $b);                         //verificando se a > b
	echo "<br/>";
	var_dump($a < $b);                         //verificando se a < b
	echo "<br/>";
	var_dump($a == $b);                        //verificando se os valores são iguais
	echo "<br/>";
	var_dump($a != $b);                        //verificando se são diferentes
	echo "<br/>";

	echo ($a > $b) ? "A é maior" : "B é maior";  //operador ternário


	//Novos operadores php7
	echo "<br/><br/><b>Novos operadores:</b><br/>";
	$a = 10;
	$b = 15;

	var_dump($a <=> $b);                       //a>b -> 1, a==b -> 0, a<b -> -1  
	echo "<br/>";

	$c = NULL;
	$d = 15;
	$e = 20;

	echo $c ?? $d ?? $e;                       //vai imprimir o primeiro valor não nulo


	//Operadores incrementais e decrementais
	echo "<br/><br/><b>Operadores incrementais e decrementais:</b><br/>";
	$a = 10;

	echo ++$a;                                 //incrimentando
	echo "<br/>";
	echo --$a;                                 //decrementando


	//Operadores Lógicos

	# $a && $b --> e
	# $a || $b --> ou
	# !$a --> não

?>