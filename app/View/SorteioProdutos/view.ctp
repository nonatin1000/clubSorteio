<div class="sorteioProdutos view">
<h2><?php  echo __('Sorteio Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sorteioProduto['SorteioProduto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produtos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sorteioProduto['Produtos']['id'], array('controller' => 'produtos', 'action' => 'view', $sorteioProduto['Produtos']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuarios Sorteado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sorteioProduto['UsuariosSorteado']['id'], array('controller' => 'usuarios', 'action' => 'view', $sorteioProduto['UsuariosSorteado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sorteios'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sorteioProduto['Sorteios']['id'], array('controller' => 'sorteios', 'action' => 'view', $sorteioProduto['Sorteios']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sorteio Produto'), array('action' => 'edit', $sorteioProduto['SorteioProduto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sorteio Produto'), array('action' => 'delete', $sorteioProduto['SorteioProduto']['id']), null, __('Are you sure you want to delete # %s?', $sorteioProduto['SorteioProduto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sorteio Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sorteio Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produtos'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios Sorteado'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sorteios'), array('controller' => 'sorteios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sorteios'), array('controller' => 'sorteios', 'action' => 'add')); ?> </li>
	</ul>
</div>
