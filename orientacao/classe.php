<?php
	class Pessoa{
		public $nome;                                 //atributo

		public function fala(){                       //método
			return "O meu nome é " . $this->nome;     //this->referência ao atributo que está fora do método
		} 

	}

	//só é possivel acessar pq está como público
	$pessoa = new Pessoa;                             //instanciando
	$pessoa->nome = "Adriane Rodrigues";              //atribuindo valor a variavel da classe pessoa
	echo $pessoa->fala();
?>