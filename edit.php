<?
include 'config.php';

if (!isset($_REQUEST['edit'])) //verifica se o campo id está preenchido, se não atribui 0
	$_REQUEST['edit'] = 0;

$smarty->assign('edit',$_REQUEST['edit']);  //passa o id para o template

 if ($_REQUEST['edit'] > 0) {  //pega os dados do cadastro
	$dados = $agenda->get($_REQUEST['edit']);
	$smarty->assign('dados',$dados);
}

if (isset($_REQUEST['submit'])) {
	if ($_REQUEST['edit'] == 0) {
		$agenda->insert($_REQUEST['nome'],$_REQUEST['sobrenome'],$_REQUEST['email'],$_REQUEST['telefone'],$_REQUEST['celular']);
	} else {
		$agenda->update($_REQUEST['edit'],$_REQUEST['nome'],$_REQUEST['sobrenome'],$_REQUEST['email'],$_REQUEST['telefone'],$_REQUEST['celular']);
	}
	$smarty->assign('sucesso', '1');
}

$smarty->assign('mid', 'edit.tpl'); // atribuida a url da página de conteúdo a variável mid para que seja carregada no template
$smarty->display('layout.tpl');
?>