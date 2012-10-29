<?php
/**
 * 
 * Classe para tratar dados diversos
 * @author Carlos Augusto Gartner
 *
 */
class dados {

	function __construct() {}
	/**
	 * 
	 * Função para tratar data do nome da pasta
	 * @param String $var
	 */
	static function data($var) {
		return str_replace('-', '/', $var);
	}
	/**
	 * 
	 * Função para pegar o número do dia da oktober
	 * @param String $var
	 */
	static function diaOktober($var){
		$dia = substr($var, 0, 2);
		$retorno = false;		
		switch ($dia) {
			case '10': $retorno = '1º Dia'; break;			
			case '11': $retorno = '2º Dia'; break;			
			case '12': $retorno = '3º Dia'; break;
			case '13': $retorno = '4º Dia'; break;
			case '14': $retorno = '5º Dia'; break;
			case '15': $retorno = '6º Dia'; break;
			case '16': $retorno = '7º Dia'; break;
			case '17': $retorno = '8º Dia'; break;
			case '18': $retorno = '9º Dia'; break;
			case '19': $retorno = '10º Dia'; break;
			case '20': $retorno = '11º Dia'; break;
			case '21': $retorno = '12º Dia'; break;
			case '22': $retorno = '13º Dia'; break;
			case '23': $retorno = '14º Dia'; break;
			case '24': $retorno = '15º Dia'; break;
			case '25': $retorno = '16º Dia'; break;
			case '26': $retorno = '17º Dia'; break;
			case '27': $retorno = '18º Dia'; break;
			case '28': $retorno = '19º Dia'; break;
		}
		return $retorno;		
	}
	
	
	
}