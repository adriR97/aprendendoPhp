<?php
	namespace Cliente;

	class Cadastro extends \Cadastro{                            //voltar na raiz e herdar tudo da outra classe Cadastro
		public function registrarVenda(){
			echo "Compra realizada por: " . $this->getNome();
		}		
	}
?>