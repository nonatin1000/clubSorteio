<div class="sorteios form">
<?php echo $this->Form->create('Sorteio'); ?>
	<fieldset>
		<legend><?php echo __('Add Sorteio'); ?></legend>
	<?php
		echo $this->Form->input('data');
		echo $this->Form->input('nome');
		echo $this->Form->input('descricacao');
		echo $this->Form->input('realizado');
		echo $this->Form->input('Produto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sorteios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
