<?php
	class Carro{
		private $modelo;
		private $ano;

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getAno():int{                                                 //definindo o retorno como inteiro
			return $this->ano;
		}

		public function setAno($ano){
			$this->ano = $ano;
		}

		public function exibir(){
			return array(
				"modelo"=>$this->getModelo(),
				"ano"=>$this->getAno()
			);
		}
	}

	$carro = new Carro();
	$carro->setModelo("Megane");
	$carro->setAno(2012);
	print_r($carro->exibir());
?>