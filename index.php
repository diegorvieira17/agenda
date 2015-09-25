<?php
include 'config.php';


$smarty->assign('dados',$agenda->listar());

$smarty->assign('mid', 'index.tpl'); // atribuida a url da página de conteúdo a variável mid para que seja carregada no template
$smarty->display('layout.tpl');
?>