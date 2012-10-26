<?php
App::uses('AppController', 'Controller');
/**
 * SorteioProdutos Controller
 *
 * @property SorteioProduto $SorteioProduto
 */
class SorteioProdutosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SorteioProduto->recursive = 0;
		$this->set('sorteioProdutos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SorteioProduto->id = $id;
		if (!$this->SorteioProduto->exists()) {
			throw new NotFoundException(__('Invalid sorteio produto'));
		}
		$this->set('sorteioProduto', $this->SorteioProduto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SorteioProduto->create();
			if ($this->SorteioProduto->save($this->request->data)) {
				$this->Session->setFlash(__('The sorteio produto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sorteio produto could not be saved. Please, try again.'));
			}
		}
		$produtos = $this->SorteioProduto->Produto->find('list');
		$usuariosSorteados = $this->SorteioProduto->UsuariosSorteado->find('list');
		$sorteios = $this->SorteioProduto->Sorteio->find('list');
		$this->set(compact('produtos', 'usuariosSorteados', 'sorteios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SorteioProduto->id = $id;
		if (!$this->SorteioProduto->exists()) {
			throw new NotFoundException(__('Invalid sorteio produto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SorteioProduto->save($this->request->data)) {
				$this->Session->setFlash(__('The sorteio produto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sorteio produto could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SorteioProduto->read(null, $id);
		}
		$produtos = $this->SorteioProduto->Produto->find('list');
		$usuariosSorteados = $this->SorteioProduto->UsuariosSorteado->find('list');
		$sorteios = $this->SorteioProduto->Sorteio->find('list');
		$this->set(compact('produtos', 'usuariosSorteados', 'sorteios'));
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
		$this->SorteioProduto->id = $id;
		if (!$this->SorteioProduto->exists()) {
			throw new NotFoundException(__('Invalid sorteio produto'));
		}
		if ($this->SorteioProduto->delete()) {
			$this->Session->setFlash(__('Sorteio produto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sorteio produto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
