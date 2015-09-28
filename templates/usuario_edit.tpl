{if $edit eq 0}
	<h2>Adicionar Usuário</h2>
{else}
	<h2>Alterar Usuário</h2>
{/if}

{if $sucesso != '1'}
<form action="usuario_edit.php" method="post">
	<input type="hidden" name="edit" value="{$edit}" />
	<fieldset>
		<label>Nome: <input type="text" name="nome" value="{$dados.nome}" /></label>
		<label>Login: <input type="text" name="login" value="{$dados.login}" /></label>
		<label>Senha: <input type="text" name="senha" value="{$dados.senha}" /></label>
	</fieldset>
	<input type="submit" name="submit" value="Salvar">
</form>
{else}
	{if $edit eq 0}
		<p>Dados inseridos com sucesso!</p>
		<h4><a href="usuario.php">Voltar</a></h4>
	{else}
		<p>Dados alterados com sucesso!</p>
		<h4><a href="usuario.php">Voltar</a></h4>
	{/if}
{/if}
