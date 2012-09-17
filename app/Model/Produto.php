<?php
	App::uses('AppModel', 'Model');
	/**
	 * Produto Model
	 *
	 */
	class Produto extends AppModel {
	
	/**
	 * Validation rules
	 *
	 * @var array
	 */
		public $validate = array(
			'id' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					//'message' => 'Your custom message here',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
			),
			'nome' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => 'Preencha o campo nome.',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
			),
			'descricao' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => 'Preencha o campo descrição',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
			),
		);
	}