<?php
	abstract class Animal{
		public function comunicacao(){
			return "Som";
		}

		public function mover(){
			return "Andar";
		}
	}

	class Cachorro extends Animal{
		/*o método é igual da classe pai, porém o 
		seu comportamento é diferente*/ 
		public function comunicacao(){ 
			return "Latir";
		}
	}

	class Ave extends Animal{
		public function comunicacao(){ 
			return "Cantar";
		}

		public function mover(){
			return "Voar e " . parent::mover();                     //pegando o comportamento da classe pai
		}
	}

	$dog = new Cachorro();
	echo $dog->comunicacao() . "<br>";
	echo $dog->mover() . "<br>";
	echo "--------------------<br>";
	$angryBirds = new Ave();
	echo $angryBirds->comunicacao() . "<br>";
	echo $angryBirds->mover() . "<br>";
?>