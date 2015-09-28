<?
include 'config.php';

if (!isset($_REQUEST['delete'])) //verifica se o campo id está preenchido, se não atribui 0
	$_REQUEST['delete'] = 0;

if ($_REQUEST['delete']>0) {
	$usuarios->remover($_REQUEST['delete']);
}

$smarty->assign('delete',$_REQUEST['delete']);

$smarty->assign('mid', 'usuario_delete.tpl'); // atribuida a url da página de conteúdo a variável mid para que seja carregada no template
$smarty->display('layout.tpl');
?>