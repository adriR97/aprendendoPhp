<?php
	# d --> dia(1 à 31)
	# m --> mês(1 à 12)
	# M --> mês(jan à dec)
	# Y --> ano
	# l --> dia da semana
	# H --> hora(00 à 23)
	# h --> hora(01 à 12)
	# i --> minuto(00 à 59)
	# s --> segundo(00 à 59)

	echo date("d/m/Y") . "<br>";                         //mostra a data atual
	echo date("H:i:s") . "<br>";                         //hora atual
	echo time();                                         //quantidade de segundos desde 1/1/1970 (timestamp)
	echo "<br>-----------------------<br>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$ts = strtotime("2019-12-08");                       //convertendo uma data para timestamp
	echo date("l, d/m/Y", $ts) . "<br>";                 //mostra o dia da semana
	$ts2 = strtotime("2019-12-08 +3 week");              //data + 3 semanas 
	echo date("l, d/m/Y", $ts2) . "<br>";
	$ts3 = strtotime("tomorrow");						 //amanhã
	echo date("l, d/m/Y", $ts3) . "<br>";
	$ts4 = strtotime("next Saturday");                   //próximo domingo
	echo date("l, d/m/Y", $ts4);
	echo "<br>-----------------------<br>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
	echo strftime("%A") . "<br>";                        //dia da semana
	echo strftime("%d") . "<br>";                        //dia do mês
	echo strftime("%j") . "<br>";                        //dia do ano em formato numérico
	echo strftime("%B") . "<br>";                        //mês
	echo strftime("%m") . "<br>";                        //mês numérico
	echo strftime("%Y") . "<br>";                        //ano
	echo strftime("%D");                                 //mês/dia/ano
	echo "<br>-----------------------<br>";            

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$dt = new DateTime();                                //instanciando	
	echo $dt->format("d/m/Y H:i:s") . "<br>";            //data atual

	$periodo = new DateInterval("P15D");                 //somando o dia atual mais 15
	$dt->add($periodo);
	echo $dt->format("d/m/Y H:i:s");                     //data atual + 15 dias
	echo "<br>-----------------------<br>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	date_default_timezone_set("America/Sao_Paulo");      //definindo o fuso horário
	echo date("H:i:s");
?>