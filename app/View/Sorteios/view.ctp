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
	<h3><?php echo __('Produtos'); ?></h3>
	<?php if (!empty($sorteio['Produto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Produto'); ?></th>
		<th><?php echo __('Vencedor'); ?></th>
	</tr>
	<?php for($i=0;$i<count($sorteio["SorteioProduto"] );$i++){ ?>
		<tr>
			<td><?php echo $sorteio["Produto"][$i]["nome"]; ?></td>
			<td><?php echo $sorteio["SorteioProduto"][$i]["cliente"]; ?></td>
		</tr>
	<?php } ?>
	</table>
<?php endif; ?>
</div>
