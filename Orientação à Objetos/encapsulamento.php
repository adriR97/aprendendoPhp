<?php
	class Pessoa{
		//public = todos conseguem acessar
		public $nome = "Adriane Rodrigues";
		//protected = só pode ser acessado por métodos da própria classe ou classes herdeiras
		protected $idade = 22;                               
		//private = só pode ser acessado por métodos da própria classe
		private $senha = "1234";

		public function verDados(){
			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->senha . "<br>";
		}
	}

	$objeto = new Pessoa();
	$objeto->verDados();                       //só é possivel imprimir os dados pq o método está como público
?>