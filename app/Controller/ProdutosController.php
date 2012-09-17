<?php
	
	class ProdutosController extends AppController{
		public $helpers 	= array ('Html', 'Form');
		public $name    	= 'Produtos';
		public $components  = array('Session');
		
		function index(){
			$this->set('produtos', $this->Produto->find('all'));
		}
		
		function view($id){
			$this->Produto->id = $id;
			$this->set('produto', $this->Produto->read());
		}
		
		function add(){
			if ($this->request->is('post')){
				if ($this->Produto->save($this->request->data)){
					$this->Session->setFlash('Produto salvo com sucesso!');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
		function edit($id = null){
			$this->Produto->id = $id;
			if ($this->request->is('get')){
				$this->request->data = $this->Produto->read();
			}else{
				if ($this->Produto->save($this->request->data)){
					$this->Session->setFlash('Produto atualizado com sucesso!');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		
		function delete($id){
			if (!$this->request->is('post')){
				throw new MethodNotAllowedException();
			}
			if ($this->Produto->delete($id)){
				$this->Session->setFlash('O produto id: ' . $id . ' foi deletado com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
?>