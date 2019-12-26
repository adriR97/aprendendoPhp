<?php
	/*serve para fornecer um comportamento para a classe, 
	definindo métodos*/
	abstract class Automovel{
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

	class Verona extends Automovel{
		public function estragou(){
			echo "Vish!!!";
		}
	}

	$carro = new Verona();
	$carro->acelerar(50);
	echo "<br>";
	$carro->estragou();
?>