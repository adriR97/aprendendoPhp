<?php
	class Sql extends PDO{
		private $conn;

		public function __construct(){
			$this->conn = new PDO("mysql:hots=localhost;dbname=dbphp7","root","");
		}

		private function setParams($statement, $parametros=array()){
			#chamando o metodo setParam e criando um array de parametros
			foreach ($parametros as $key => $value) {
				$this->setParam($statement, $key, $value);
			}
		}

		private function setParam($statement, $key, $value){
			#passando um parametro
			$statement->bindParam($key, $value);
		}

		public function query($rawQuery, $params = array()){
			#envia a query pro banco
			$stmt = $this->conn->prepare($rawQuery);
			$this->setParams($stmt, $params);
			$stmt->execute();
			return $stmt;
		}

		public function select($rawQuery, $params=array()):array{
			$stmt = $this->query($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}	
?>