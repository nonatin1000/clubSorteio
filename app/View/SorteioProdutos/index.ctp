<div class="sorteioProdutos index">
	<h2><?php echo __('Sorteio Produtos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('produtos_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuarios_sorteado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sorteios_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sorteioProdutos as $sorteioProduto): ?>
	<tr>
		<td><?php echo h($sorteioProduto['SorteioProduto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sorteioProduto['Produtos']['id'], array('controller' => 'produtos', 'action' => 'view', $sorteioProduto['Produtos']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sorteioProduto['UsuariosSorteado']['id'], array('controller' => 'usuarios', 'action' => 'view', $sorteioProduto['UsuariosSorteado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sorteioProduto['Sorteios']['id'], array('controller' => 'sorteios', 'action' => 'view', $sorteioProduto['Sorteios']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sorteioProduto['SorteioProduto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sorteioProduto['SorteioProduto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sorteioProduto['SorteioProduto']['id']), null, __('Are you sure you want to delete # %s?', $sorteioProduto['SorteioProduto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sorteio Produto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produtos'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios Sorteado'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sorteios'), array('controller' => 'sorteios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sorteios'), array('controller' => 'sorteios', 'action' => 'add')); ?> </li>
	</ul>
</div>
