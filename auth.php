<?
include 'config.php';

$login = "vieira";
$senha = "123";

//autenticação
if (isset($_REQUEST['submit'])) {
	if ($login==$_REQUEST['login_usuario'] and $senha==$_REQUEST['senha_usuario']) {
		$_SESSION['logado'] = true;
		header('location: /index.php');
	} else {
		unset($_SESSION['logado']);
	}
}

$smarty->assign('mid', 'auth.tpl'); // atribuida a url da página de conteúdo a variável mid para que seja carregada no template
$smarty->display('layout.tpl');
?>