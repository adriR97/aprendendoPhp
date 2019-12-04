<?php

	define("SERVIDOR", "123.0.0.1");                                    //valor que não muda
	echo SERVIDOR;
	echo "<br><br>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	define("BANCO_DE_DADOS", [                                          //array constante (php7)
		'123.0.0.1',
		'root',
		'password',
		'teste'
	]);

	print_r(BANCO_DE_DADOS);
	echo "<br><br>";

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	echo PHP_VERSION;                                                  //versão do php

?>