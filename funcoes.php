<?php

	function teste($texto){
		return "testando $texto";
	}

	echo teste("1234") . "<br>";

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	function teste2(){
		$argumentos = func_get_args();   //pega todos os argumentos que estão sendo passados para a função             
		return $argumentos;
	}

	var_dump(teste2("só testando"));
	echo "<br>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$pessoa = array(
		'nome' => 'Adriane',
		'idade' => 22
	);

	foreach ($pessoa as &$value) {                           //o & é para usar o valor como referência
		if(gettype($value) === 'integer') $value += 10;
		echo $value . '<br/>';		
	}

	print_r($pessoa);
	echo "<br>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//NOVAS FUNÇÕES PHP7

	function soma(int ...$valores) : string{                 //cria um array, :string altera o tipo de retorno
		return array_sum($valores);
	}

	echo soma(2, 2) . "<br>";
	echo soma(3.2, 4.5) . "<br>";                            //a função ignora o ponto flutuante por ser inteiro

?>