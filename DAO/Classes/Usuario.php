<?php
	class Usuario{
		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;

		public function getIdusuario(){
			return $this->idusuario;
		}

		public function setIdUsuario($value){
			$this->idusuario = $value;
		}

		public function getDeslogin(){
			return $this->deslogin;
		}

		public function setDeslogin($value){
			$this->deslogin = $value;
		}

		public function getDessenha(){
			return $this->dessenha;
		}

		public function setDessenha($value){
			$this->dessenha = $value;
		}

		public function getDtcadastro(){
			return $this->dtcadastro;
		}

		public function setDtcadastro($value){
			$this->dtcadastro = $value;
		}

		public function setData($data){
			#setando os dados 
			$this->setIdUsuario($data['idusuario']);
			$this->setDeslogin($data['deslogin']);
			$this->setDessenha($data['dessenha']);
			$this->setDtcadastro(new DateTime($data['dtcadastro']));	
		}

		//----------------------------------------------Métodos de busca------------------------------------------------------------------->

		public function loadById($id){
			#trazendo um resultado pelo id do registro
			$sql = new Sql();
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
				":ID"=>$id
			));

			if(count($results) > 0){
				$this->setData($results[0]);
			}
		}

		public static function getList(){
			#trazendo a lista completa de registros
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
		}

		public static function search($login){
			#trazendo uma lista pelo login
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
				':SEARCH'=>"%". $login ."%"
			));
		}

		public function login($login, $senha){
			#validando um usuário, se login e senha forem corretos retorna o resultado
			$sql = new Sql();
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(
				":LOGIN"=>$login,
				":SENHA"=>$senha
			));

			if(count($results) > 0){
				$this->setData($results[0]);
			} else{
				throw new Exception("Login e/ou senha incorreto(s).");				
			}
		}

		//----------------------------------------------Métodos de inserção---------------------------------------------------------------->

		public function insert(){
			$sql = new Sql();

			//chamando a procedure (CALL=MySql e EXECUTE=SqlServer)
			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
				':LOGIN'=>$this->getDeslogin(),
				':SENHA'=>$this->getDessenha()
			));

			if(count($results) > 0){
				$this->setData($results[0]);
			}
		}

		//----------------------------------------------Métodos de alteração--------------------------------------------------------------->

		public function update($login, $senha){
			$this->setDeslogin($login);
			$this->setDessenha($senha);

			$sql = new Sql();

			$sql->query("UPDATE tb_usuarios SET deslogin=:LOGIN, dessenha=:SENHA WHERE idusuario=:ID", array(
				':LOGIN'=>$this->getDeslogin(),
				':SENHA'=>$this->getDessenha(),
				':ID'=>$this->getIdusuario()
			));
		}

		//----------------------------------------------Métodos de exclusão---------------------------------------------------------------->

		public function __toString(){
			#método para imprimir o resultado da consulta
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}
	}
?>