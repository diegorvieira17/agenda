<h2>Ususarios</h2>

<h4><a href="usuario_edit.php">Adicionar</a></h4>

<table width="100%" cellpadding="1" cellspacing="1">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Login</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
		{section name=i loop=$dados}
		<tr>
			<td>{$dados[i].nome}</td>
			<td>{$dados[i].login}</td>
			<td>
				<a href="usuario_edit.php?edit={$dados[i].id}">Editar</a> |
				<a href="usuario_delete.php?delete={$dados[i].id}">Deletar</a>
			</td>
		</tr>
		{/section}
	</tbody>
</table>