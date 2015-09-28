<?php
session_start();

define('SMARTY_DIR','libs/Smarty/libs/'); //indica o diretório do smarty
include(SMARTY_DIR.'Smarty.class.php'); //adiciona o arquivo principal do smarty
include 'libs/bibliotecas/bd.php';
include 'libs/bibliotecas/agenda.php';
include 'libs/bibliotecas/usuario.php';

//indica os diretórios do smarty
$smarty = new Smarty();
$smarty->cache_dir = "cache";
$smarty->config_dir = "configs";
$smarty->compile_dir = "templates_c";
$smarty->template_dir = "templates";

// verifica se o usuário está logado
if (!isset($_SESSION['logado']) and $_SERVER['SCRIPT_NAME']!='/auth.php') {
	header('location: auth.php');
}

//cria o banco de dados no primeiro acesso com o usuário padrão admin e senha 123
$sql = 

//conecta ao banco de dados
$bd = new Bd('localhost','root','123456789','php_agenda');
$bd->connect();
$agenda = new Agenda($bd,'agenda');
$usuarios = new Usuario($bd);

?>