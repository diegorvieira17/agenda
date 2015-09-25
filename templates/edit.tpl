{if $edit eq 0}
	<h2>Adicionar Contato</h2>
{else}
	<h2>Alterar Contato</h2>
{/if}

{if $sucesso != '1'}
<form action="edit.php" method="post">
	<input type="hidden" name="edit" value="{$edit}" />
	<fieldset>
		<label>Nome: <input type="text" name="nome" value="{$dados.nome}" /></label>
		<label>Sobrenome: <input type="text" name="sobrenome" value="{$dados.sobrenome}" /></label>
		<label>Email: <input type="text" name="email" value="{$dados.email}" /></label>
		<label>Telefone: <input type="text" name="telefone" value="{$dados.telefone}" /></label>
		<label>Celular: <input type="text" name="celular" value="{$dados.celular}" /></label>
	</fieldset>
	<input type="submit" name="submit" value="Salvar">
</form>
{else}
	{if $edit eq 0}
		<p>Dados inseridos com sucesso!</p>
		<h4><a href="index.php">Voltar</a></h4>
	{else}
		<p>Dados alterados com sucesso!</p>
		<h4><a href="index.php">Voltar</a></h4>
	{/if}
{/if}
