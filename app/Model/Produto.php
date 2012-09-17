<?php
	
	class Produto extends AppModel{
		public $name = 'Produto';
		
		public $validate = array(
			'nome' => array('rule' => 'notEmpty', 'message' => 'Preencha o campo nome.'),
			'descricao' => array('rule' => 'notEmpty', 'message' => 'Preencha o campo descrição.')
		);
	}