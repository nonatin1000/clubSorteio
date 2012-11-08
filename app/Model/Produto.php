<?php
App::uses('AppModel', 'Model');
/**
 * Produto Model
 *
 * @property Sorteio $Sorteio
 */
class Produto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Sorteio' => array(
			'className' => 'Sorteio',
			'joinTable' => 'sorteio_produtos',
			'foreignKey' => 'produtos_id',
			'associationForeignKey' => 'sorteios_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	
	public $hasMany = array(
			'SorteioProduto' => array(
					'className' => 'SorteioProduto',
					'foreignKey' => 'produtos_id',
					'dependent' => false,
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			)
	);

}
