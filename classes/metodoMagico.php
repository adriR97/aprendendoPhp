<?php
	class Endereco{
		private $numero;
		private $cidade;

		public function __construct($a, $b){                 
		//metodo construtor é chamado sempre que for instanciado o objeto da classe(executa automaticamente)
			$this->numero = $a;
			$this->cidade = $b;
		}

		public function __destruct(){
			//usado para destruir variáveis, desconectar do banco de dados
			var_dump("Destruir");			
		}
	}

	$endereco = new Endereco("123", "Curitiba");
	var_dump($endereco);

	unset($endereco);                          //destruct
?>