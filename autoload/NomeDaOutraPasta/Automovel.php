<?php
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
?>