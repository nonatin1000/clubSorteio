	<h2>Lista de Clientes que irão participar do Sorteio</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>id</th>
			<th>cliente</th>
			<th>idanuncio</th>
			<th>titulo</th>
			<th>dt. expiracao</th>
	</tr>
	<?php
		foreach ($sorteios as $sorteio): ?>
	<tr>
		<td><?php echo h($sorteio['c']['idclientes']); ?>&nbsp;</td>
		<td><?php echo h($sorteio['c']['nome']); ?>&nbsp;</td>
		<td><?php echo h($sorteio['a']['idanuncios']); ?>&nbsp;</td>
		<td><?php echo h($sorteio['a']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($sorteio['ap']['data_expiracao']); ?>&nbsp;</td>
	</tr>
	<?php endforeach; ?>
	</table>