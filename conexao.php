<?php

class Conexao {

	private $host = 'Servidor: sql211.epizy.com';
	private $dbname = 'epiz_32260464_voluntario_db';
	private $user = 'epiz_32260464';
	private $pass = 'ARvIkLNs72S4lA';

	public function conectar() {
		try{

			$conexao = new PDO(
				"mysql:host-$this->host;dbname-$this->dbname",
				"$this->user",
				"$this->pass"	
			);

			return $conexao;

		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}

}

?>
