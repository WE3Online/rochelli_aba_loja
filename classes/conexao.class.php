<?php
/**
 * 
 * Classe de conexão
 * @author Carlos
 *
 */
class con {
	
	public $conn 	= false;
	
	public function __construct() {
		$host 	= HOST;
		$nomeBD = BD;
		$senha 	= USER;
		$senha 	= PASS;
		$encode	= ENCODE;
		$this -> conn =  new PDO("mysql:host={$host};dbname={$nomeBD}", $login, $senha );
		$this -> conn -> exec("SET CHARACTER SET {$encode}");
	}
	
	public function __destruct() {
		unset($this->conn);
	}
}


