<?php
	class Documento{
		private $numero;

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$resultado = Documento::validarCpf($numero);

			if($resultado === false){
				throw new Exception("CPF inválido", 1);				
			}

			$this->numero = $numero;
		}

		public static function validarCpf($cpf):bool{            //não precisa instanciar a classe para chamar o método
			//verifica se o número foi informado
			if(empty($cpf)) {
        		return false;
   			}
 
 			//eliminando as máscaras
    		$cpf = preg_replace('[^0-9]', '', $cpf);
    		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);     
    
    		if (strlen($cpf) != 11) {
    			//verificando se o número de dígitos é igual a 11
        		return false;
    		} else if (
    			//verifica se alguma das sequencias invalidas foi digitada
    			$cpf == '00000000000' || 
        		$cpf == '11111111111' || 
        		$cpf == '22222222222' || 
        		$cpf == '33333333333' || 
        		$cpf == '44444444444' || 
        		$cpf == '55555555555' || 
        		$cpf == '66666666666' || 
        		$cpf == '77777777777' || 
        		$cpf == '88888888888' || 
        		$cpf == '99999999999') {
        			return false;
     		} else { 
     			//verificando se o cpf é válido           
        		for ($t = 9; $t < 11; $t++) {             
            		for ($d = 0, $c = 0; $c < $t; $c++) {
                		$d += $cpf{$c} * (($t + 1) - $c);
            		}
            		
            		$d = ((10 * $d) % 11) % 10;

            		if ($cpf{$c} != $d) {
                		return false;
            		}
        		} 
        		return true;
    		}
		}
	}

	/*
	$cpf = new Documento();
	$cpf->setNumero("54246662054");
	var_dump($cpf->getNumero());
	*/

	var_dump(Documento::validarCpf("54246662054"));
?>