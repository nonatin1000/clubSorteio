<div class="sorteios view">
<h2><?php  echo __('Sorteio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sorteio['Sorteio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($sorteio['Sorteio']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($sorteio['Sorteio']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricacao'); ?></dt>
		<dd>
			<?php echo h($sorteio['Sorteio']['descricacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Realizado'); ?></dt>
		<dd>
			<?php echo h($sorteio['Sorteio']['realizado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sorteio'), array('action' => 'edit', $sorteio['Sorteio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sorteio'), array('action' => 'delete', $sorteio['Sorteio']['id']), null, __('Are you sure you want to delete # %s?', $sorteio['Sorteio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sorteios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sorteio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Produtos'); ?></h3>
	<?php if (!empty($sorteio['Produto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sorteio['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id']; ?></td>
			<td><?php echo $produto['nome']; ?></td>
			<td><?php echo $produto['descricao']; ?></td>
			<td><?php echo $produto['created']; ?></td>
			<td><?php echo $produto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), null, __('Are you sure you want to delete # %s?', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
