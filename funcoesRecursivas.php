<?php
	$hierarquia = array(
		array(
			'nome_cargo'=>'CEO',
			'subordinados'=>array(
				//Diretor comercial
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						array(
							//Gerente de vendas
							'nome_cargo'=>'Gerente de Vendas'
						)
					)
				),
				//Diretor Financeiro
				array(					
					'nome_cargo'=>'Diretor Financeiro',
					'subordinados'=>array(
							array(
							//Gerente de contas
							'nome_cargo'=>'Gerente de contas', 
							'subordinados'=>array(
								//Supervisor de pagamentos
								array(
									'nome_cargo'=>'Supervisor de pagamentos'
								)							
							)
						)
					)
				)
			)
		)
	);

	function exibe($cargos){
		$html = "<ul>";

		foreach ($cargos as $cargo) {
			$html .= "<li>";
			$html .= $cargo['nome_cargo'];

			if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
				$html .= exibe($cargo['subordinados']);
			}

			$html .= "</li>";
		}

		$html .= "</ul>";

		return $html;
	}

	echo exibe($hierarquia);
?>