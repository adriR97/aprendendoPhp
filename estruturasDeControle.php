<?php
	$a = 10;
	$b = 35;

	if($a > $b){
		echo "A é maior";
	} else if($a < $b) {
		echo "B é maior";
	} else{
		echo "Os dois são iguais";
	}

	///////////////////////////////////////////////////////////
	echo "<br/>";
	$nome = "Adriane";

	switch ($nome) {
		case "Adriane":
			echo "Rodrigues";
			break;
		
		default:
			echo "!!!!";
			break;
	}

	///////////////////////////////////////////////////////////
	echo "<br/><br/>";

	echo "<select>";
	for ($i=0; $i <=60; $i+=3) { 
		if($i>12 && $i<33) continue;                         //não vai aparecer números entre 12 e 33
		if($i === 57) break;                                 //só vai executar até 57 e encerrar o for
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	echo "</select>";

	///////////////////////////////////////////////////////////
	echo "<br/><br/>";

	$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho",
	"Agosto","Setembro","Outubro","Novembro","Dezembro");

	foreach ($meses as $index => $mes) {                     //laço de repetição para arrays e collections
		echo "Índice: " . $index . "<br/>";                  //mostra a posição
		echo "O mês é: " . $mes . "<br/><br/>";
	}
?>