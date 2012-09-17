<?php
	App::uses('AppController', 'Controller');
	/**
	 * Produtos Controller
	 *
	 * @property Produto $Produto
	 */
	class ProdutosController extends AppController {
	
	/**
	 * index method
	 *
	 * @return void
	 */
		public function index() {
			$this->Produto->recursive = 0;
			$this->set('produtos', $this->paginate());
		}
	
	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function view($id = null) {
			$this->Produto->id = $id;
			if (!$this->Produto->exists()) {
				throw new NotFoundException(__('Produto inválido'));
			}
			$this->set('produto', $this->Produto->read(null, $id));
		}
	
	/**
	 * add method
	 *
	 * @return void
	 */
		public function add() {
			if ($this->request->is('post')) {
				$this->Produto->create();
				if ($this->Produto->save($this->request->data)) {
					$this->Session->setFlash(__('Produto salvo com sucesso.'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('O Produto não pode ser salvo. Por favor, tente novamente.'));
				}
			}
		}
	
	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function edit($id = null) {
			$this->Produto->id = $id;
			if (!$this->Produto->exists()) {
				throw new NotFoundException(__('Produto inválido'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->Produto->save($this->request->data)) {
					$this->Session->setFlash(__('O Produto foi atualizado com sucesso!'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('O Produto não pode ser atualizado. Por favor, tente novamente.'));
				}
			} else {
				$this->request->data = $this->Produto->read(null, $id);
			}
		}
	
	/**
	 * delete method
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function delete($id = null) {
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->Produto->id = $id;
			if (!$this->Produto->exists()) {
				throw new NotFoundException(__('Produto inválido'));
			}
			if ($this->Produto->delete()) {
				$this->Session->setFlash(__('Produto deletado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('O Produto não pode ser deletado'));
			$this->redirect(array('action' => 'index'));
		}
	}