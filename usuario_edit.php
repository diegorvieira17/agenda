<?
include 'config.php';

if (!isset($_REQUEST['edit'])) //verifica se o campo id está preenchido, se não atribui 0
	$_REQUEST['edit'] = 0;

$smarty->assign('edit',$_REQUEST['edit']);  //passa o id para o template

 if ($_REQUEST['edit'] > 0) {  //pega os dados do cadastro
	$dados = $usuarios->get($_REQUEST['edit']);
	$smarty->assign('dados',$dados);
}

if (isset($_REQUEST['submit'])) {
	$user = new Usuario($bd);
	if ($_REQUEST['edit'] == 0) {
		$user->setNome($_REQUEST['nome']);
		$user->setLogin($_REQUEST['login']);
		$user->setSenha($_REQUEST['senha']);
		$user->insert();
	} else {
		$user->setNome($_REQUEST['nome']);
		$user->setLogin($_REQUEST['login']);
		$user->setSenha($_REQUEST['senha']);
		$user->update($_REQUEST['edit']);
	}
	unset($user);
	$smarty->assign('sucesso', '1');
}

$smarty->assign('mid', 'usuario_edit.tpl'); // atribuida a url da página de conteúdo a variável mid para que seja carregada no template
$smarty->display('layout.tpl');
?>