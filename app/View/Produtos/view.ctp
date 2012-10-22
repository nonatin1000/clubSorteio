<div class="produtos view">
<h2><?php  echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), null, __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sorteios'), array('controller' => 'sorteios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sorteio'), array('controller' => 'sorteios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sorteios'); ?></h3>
	<?php if (!empty($produto['Sorteio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricacao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($produto['Sorteio'] as $sorteio): ?>
		<tr>
			<td><?php echo $sorteio['id']; ?></td>
			<td><?php echo $sorteio['data']; ?></td>
			<td><?php echo $sorteio['nome']; ?></td>
			<td><?php echo $sorteio['descricacao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sorteios', 'action' => 'view', $sorteio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sorteios', 'action' => 'edit', $sorteio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sorteios', 'action' => 'delete', $sorteio['id']), null, __('Are you sure you want to delete # %s?', $sorteio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sorteio'), array('controller' => 'sorteios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
