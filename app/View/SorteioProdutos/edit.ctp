<div class="sorteioProdutos form">
<?php echo $this->Form->create('SorteioProduto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sorteio Produto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('produtos_id');
		echo $this->Form->input('usuarios_sorteado_id');
		echo $this->Form->input('sorteios_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SorteioProduto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SorteioProduto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sorteio Produtos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produtos'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios Sorteado'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sorteios'), array('controller' => 'sorteios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sorteios'), array('controller' => 'sorteios', 'action' => 'add')); ?> </li>
	</ul>
</div>
