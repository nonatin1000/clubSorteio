<div class="sorteios index">
	<h2><?php echo __('Sorteios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('descricacao'); ?></th>
			<th><?php echo $this->Paginator->sort('realizado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sorteios as $sorteio): ?>
	<tr>
		<td><?php echo h($sorteio['Sorteio']['id']); ?>&nbsp;</td>
		<td><?php echo h($sorteio['Sorteio']['data']); ?>&nbsp;</td>
		<td><?php echo h($sorteio['Sorteio']['nome']); ?>&nbsp;</td>
		<td><?php echo h($sorteio['Sorteio']['descricacao']); ?>&nbsp;</td>
		<td><?php echo h($sorteio['Sorteio']['realizado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sorteio['Sorteio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sorteio['Sorteio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sorteio['Sorteio']['id']), null, __('Are you sure you want to delete # %s?', $sorteio['Sorteio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Sortear'), array('action' => 'sortear', $sorteio['Sorteio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sorteio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
