<!-- File: /app/View/Produtos/edit.ctp -->

<h1>Edit Produto</h1>
<?php
    echo $this->Form->create('Produto', array('action' => 'edit'));
    echo $this->Form->input('nome');
    echo $this->Form->input('descricao', array('rows' => '5'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Atualizar');
?>