<?php
	echo date("d/m/Y") . "<br>";                         //mostra a data atual
	echo date("H:i:s") . "<br>";                         //hora atual
	echo time() . "<br>";                                //quantidade de segundos desde 1/1/1970 (timestamp)

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$ts = strtotime("2019-12-08");                       //convertendo uma data para timestamp
	echo date("l, d/m/Y", $ts) . "<br>";                 //mostra o dia da semana
	$ts2 = strtotime("2019-12-08 +3 week");              //convertendo a data + 3 semanas para timestamp  
	echo date("l, d/m/Y", $ts2) . "<br>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
	echo strftime("%j") . "<br>";                        //dia do ano em formato numérico (ver no manual strftime)

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$dt = new DateTime();                                //instanciando	
	echo $dt->format("d/m/Y H:i:s") . "<br>";            //data atual

	$periodo = new DateInterval("P15D");                 //somando o dia atual mais 15
	$dt->add($periodo);
	echo $dt->format("d/m/Y H:i:s") . "<br>";            //data atual + 15 dias
?>