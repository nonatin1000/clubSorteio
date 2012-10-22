<?php
	
	class SorteiosController extends AppController {
		
		var $uses	 		= array("Cliente");
		public $helpers 	= array('Html', 'Form');
		public $components  = array('Session');
		
		/**
		 * index method
		 *
		 * @return void
		 */
			public function index() {
				$this->set('sorteios', $this->Cliente->clientesQueIraoParticiparDoSorteio());
			}
	}