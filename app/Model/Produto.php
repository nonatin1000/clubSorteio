<?php
App::uses('AppModel', 'Model');
/**
 * Produto Model
 *
 * @property Sorteio $Sorteio
 */
class Produto extends AppModel {


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
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'sorteio_id',
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
