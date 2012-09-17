<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Editar Produto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Atualizar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Produto.id')), null, __('Tem certeza de que deseja excluir esse produto: %s?', $this->Form->value('Produto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Produtos'), array('action' => 'index')); ?></li>
	</ul>
</div>
