<?php
	/*serve para fornecer um comportamento para a classe, 
	definindo métodos, tipos de declaração e os parâmetros que 
	o método deve receber*/
	interface Veiculo{
		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);
	}

	class Verona implements Veiculo{
		public function acelerar($velocidade){
			echo "O veículo acelerou até " . $velocidade . " km/h";
		}

		public function freiar($velocidade){
			echo "O veículo freiou em " . $velocidade . " km/h";
		}

		public function trocarMarcha($marcha){
			echo "O veículo engatou a marcha " . $marcha;
		}
	}

	$carro = new Verona();
	$carro->acelerar(45);
?>