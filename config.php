<?php
/**
 * Arquivos de configuracao de constantes do aplicativo.
 * 
 * @author Carlos Augusto Gartner
 * 
 */
// inicia a sessao
session_start();
// Configuracoes de pastas
defined('DS') 			? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') 	? null : define('SITE_ROOT', realpath(dirname(__FILE__)) . DS);
defined('CLASS_PATH') 	? null : define('CLASS_PATH', SITE_ROOT . 'classes' . DS);
// Alterar o BASE_URL quando iniciar o projeto
$protocolo = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false) ? 'http' : 'https';

if ($_SERVER['SERVER_NAME'] != 'micro04') {
	$servidor  = 'https://we3dc.websiteseguro.com/';
	defined('BASE_URL') 	? null : define('BASE_URL', $servidor . 'rochelli_loja/');
} else {
	$servidor  = 'http://micro04:8081/';
	defined('BASE_URL') 	? null : define('BASE_URL', $servidor . 'rochelli/rochelli_aba_loja/');
}
defined('APP_ID') 		? null : define('APP_ID', '411695322226528');