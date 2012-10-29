<?php
/**
 * Lista arquivos e pastas de um diretório
 * @author Carlos Augusto Gartner
 */
class montaGaleria {
	/**
	 * @var Recurso de diretorio
	 */
	private $_recurso = false;
	
	/**
	 * Dados que deverao ser filtrados no retorno.
	 * @var Array
	 */
	private $_filtro  = array();
	/**
	 * Dados que serao retornados
	 * @var Array
	 */
	private $_dados   = array();
	
	/**
	 * Instancia recurso
	 * @param String $dir
	 */
	function __construct($dir) {
		$this->_recurso = dir($dir);		
	}
	
	/**
	 * Seta valores que deverão ser filtrados
	 * @param Array $dados
	 */
	function setFiltro($dados) {
		if (is_array($dados)) {
			$this->_filtro = $dados;
		} else {
			throw new Exception("Varival precisa ser no formato array em setFiltro", '1');
		}		
	}
	
	/**
	 * Adiciona valor ao filtro.
	 * @param String $dados
	 */
	function addFitro($dados) {
		$this->_filtro[] = $dados;
	}
	
	/**
	 * Percorre e cria array com dados que irá retornar
	 */
	function percorre() {
		$dados = array();			
		while ($tmp = $this->_recurso->read()) {					
			if (!in_array($tmp, $this->_filtro)) {
				if (is_file($this->_recurso->path . DS . $tmp)) {
					$dados['arquivo'][] = $tmp;
				}
				if (is_dir($this->_recurso->path . DS . $tmp)) {
					$dados['pasta'][] = $tmp;
				}				
			}	
		}		
		$this->_dados = $dados;
		unset($tmp,$dados);
	}
	
	/**
	 * Retorna valor em formato array
	 * @return Array
	 */
	function retorna() {
		return $this->_dados;
	}
	
	/**
	 * Fecha recurso
	 */
	function fechar() {
		$this->_recurso->close();
		unset($this->_recurso);
	}	
	
}