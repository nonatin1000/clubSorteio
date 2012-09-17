<!-- File: /app/View/Produtos/index.ctp -->

<h1>Produtos</h1>
<?php echo $this->Html->link('Add Produto', array('controller' => 'produtos', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Operações</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td>
        	<?php echo $produto['Produto']['id']; ?>
        </td>
        <td>
            <?php echo $this->Html->link($produto['Produto']['nome'], array('controller' => 'produtos', 'action' => 'view', $produto['Produto']['id'])); ?>
        </td>
        <td>
        	<?php echo $produto['Produto']['descricao']; ?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $produto['Produto']['id']),
                array('confirm' => 'Deseja realmente excluir esse produto?')
            )?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $produto['Produto']['id']));?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>