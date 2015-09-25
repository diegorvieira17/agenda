<?
include 'config.php';


$smarty->assign('dados',$usuarios->listar());

$smarty->assign('mid', 'usuario.tpl'); // atribuida a url da página de conteúdo a variável mid para que seja carregada no template
$smarty->display('layout.tpl');
?>