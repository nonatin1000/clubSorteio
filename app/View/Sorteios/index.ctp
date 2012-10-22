<div class="sorteios index">
	<h2><?php echo __('Sorteios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idclientes'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('uf'); ?></th>
			<th><?php echo $this->Paginator->sort('cep'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf_cnpj'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('senha'); ?></th>
			<th><?php echo $this->Paginator->sort('newsletter'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sorteios as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['idclientes']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['uf']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cep']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['celular']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['fax']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cpf_cnpj']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['status']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['senha']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['newsletter']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['idclientes'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['idclientes'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['idclientes']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['idclientes'])); ?>
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
	</ul>
</div>
