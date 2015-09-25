<h2>Contatos</h2>

<h4><a href="edit.php">Adicionar</a></h4>

<table width="100%" cellpadding="1" cellspacing="1">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>E-mail</th>
			<th>Telefone</th>
			<th>Celular</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
		{section name=i loop=$dados}
		<tr>
			<td>{$dados[i].nome}</td>
			<td>{$dados[i].sobrenome}</td>
			<td>{$dados[i].email}</td>
			<td>{$dados[i].telefone}</td>
			<td>{$dados[i].celular}</td>
			<td>
				<a href="edit.php?edit={$dados[i].id}">Editar</a> |
				<a href="delete.php?delete={$dados[i].id}">Deletar</a>
			</td>
		</tr>
		{/section}
	</tbody>
</table>