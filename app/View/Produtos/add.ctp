<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Add Produto'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('Sorteio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sorteios'), array('controller' => 'sorteios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sorteio'), array('controller' => 'sorteios', 'action' => 'add')); ?> </li>
	</ul>
</div>
