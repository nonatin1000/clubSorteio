<?php
App::uses('AppModel', 'Model');
/**
 * SorteioProduto Model
 *
 * @property Produtos $Produtos
 * @property UsuariosSorteado $UsuariosSorteado
 * @property Sorteios $Sorteios
 */
class SorteioProduto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Produtos' => array(
			'className' => 'Produtos',
			'foreignKey' => 'produtos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sorteios' => array(
			'className' => 'Sorteios',
			'foreignKey' => 'sorteios_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
