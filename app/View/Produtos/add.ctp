<!-- File: /app/View/Produto/add.ctp -->

<h1>Cadastro de Produto</h1>
<?php
	echo $this->Form->create('Produto');
	echo $this->Form->input('nome');
	echo $this->Form->input('descricao', array('rows' => '5'));
	echo $this->Form->end('Salvar');
?>