<?php
App::uses('AppController', 'Controller');
/**
 * Sorteios Controller
 *
 * @property Sorteio $Sorteio
 */
class SorteiosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public $uses = array('Sorteio','Cliente', 'SorteioProduto');
	
	public function index() {
		$this->Sorteio->recursive = 0;
		$this->set('sorteios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sorteio->id = $id;
		if (!$this->Sorteio->exists()) {
			throw new NotFoundException(__('Invalid sorteio'));
		}
		$sorteio=$this->Sorteio->read(null, $id);
		for($i=0;$i<count($sorteio["SorteioProduto"] );$i++){
			$cli=$this->Cliente->read(null,$sorteio["SorteioProduto"][$i]["clientes_sorteado_id"]);
			$sorteio["SorteioProduto"][$i]["cliente"]=$cli["Cliente"]["nome"];
		}
		$this->set('sorteio', $sorteio);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sorteio->create();
			if ($this->Sorteio->save($this->request->data)) {
				$this->Session->setFlash(__('The sorteio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sorteio could not be saved. Please, try again.'));
			}
		}
		$produtos = $this->Sorteio->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sorteio->id = $id;
		if (!$this->Sorteio->exists()) {
			throw new NotFoundException(__('Invalid sorteio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sorteio->save($this->request->data)) {
				$this->Session->setFlash(__('The sorteio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sorteio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sorteio->read(null, $id);
		}
		$produtos = $this->Sorteio->Produto->find('list');
		$this->set(compact('produtos'));
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
		$this->Sorteio->id = $id;
		if (!$this->Sorteio->exists()) {
			throw new NotFoundException(__('Invalid sorteio'));
		}
		if ($this->Sorteio->delete()) {
			$this->Session->setFlash(__('Sorteio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sorteio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	/**
	 * metodo que realiza sorteio
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function sortear($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Sorteio->id = $id;
		if (!$this->Sorteio->exists()) {
			throw new NotFoundException(__('Invalid sorteio'));
		}
		$sorteio=$this->Sorteio->read(null, $id);
		if ($sorteio["Sorteio"]["realizado"]) {
			$this->Session->setFlash("Esse Sorteio Ja Foi Realizado");
			$this->redirect(array('action' => 'index'));
		}
		$concorrentes=$this->Cliente->clientesQueIraoParticiparDoSorteio();
		foreach ($sorteio["Produto"] as $produto){
			$pos=rand(0,count($concorrentes));
			$produto["SorteioProduto"]["clientes_sorteado_id"]=$concorrentes[$pos]["c"]["idclientes"];
			$this->SorteioProduto->id=$produto["SorteioProduto"]["id"];
			$this->SorteioProduto->save($produto["SorteioProduto"]);
			unset($concorrentes[$pos]);
			$this->Sorteio->saveField("realizado",true);
		}
		$this->Session->setFlash("Sorteio Realizado Com Sucesso!");
		$this->redirect(array('action' => 'view',$sorteio["Sorteio"]["id"]));
	}
}


