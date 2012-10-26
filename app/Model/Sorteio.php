<?php
App::uses('AppModel', 'Model');
/**
 * Sorteio Model
 *
 */
class Sorteio extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';
	public $hasAndBelongsToMany = array(
		'Produto' => array(
			'className' => 'Produto',
			'joinTable' => 'sorteio_produtos',
			'foreignKey' => 'sorteios_id',
			'associationForeignKey' => 'produtos_id',
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

}
