<?php
	//compartilhamento de atributos e métodos
	class Documento{
		private $numero;

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$this->numero = $numero;
		}
	}

	class CPF extends Documento{
	}

	$doc = new CPF();
	$doc->setNumero("111222333-44");
	echo $doc->getNumero();
?>