<?php
class hsrsController extends AppController {

	public $name = 'Hsrs';
	var $helpers=array("Html","Form","Js","Session","Csv");
	var $components=array("Session",'RequestHandler');
	

    public function index($id=null) {

	    
 		$this->response->header('Access-Control-Allow-Origin', '*');
		$this->set('hsrs', $this->Hsr->find('all'));
		$this->set(compact( '_serialize','mads'));
	}

	public function add($id=null) {
	$data=$this->request->input('json_decode', true );
	if ($this->request->is('post')) {
			if ($this->Test->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				return $this->redirect(array('controller' => 'hsrs','action' => 'equipment'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}

	}
	public function equipment($id=null) {
	

	}
	

	function download()
{
    $this->set("tests", $this->Test->find("all"));
    $this->layout = null;
   $this->autoLayout = false;
  
}
	
	public function view($id=null) {
	$this->set('tests', $this->Test->find('all'));

	}



	public function edit($id = null) {
		$this->Test->id = $id;
		
		if (!$this->Test->exists()) {
			throw new NotFoundException('Invalid post');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Test->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Test->read();
		}
	}

	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid id for post');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Test->delete($id)) {
			$this->Session->setFlash('User deleted');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('User was not deleted');
		$this->redirect(array('action' => 'index'));
	}
	public function contact() {

	}
	
    
    public function enquiry() {

	}
       
	public function hsr() {
	$this->set('hsrs', $this->Hsr->find('all'));
	}


    public function hs1() {
            $this->set('hsrs', $this->Hsr->find('all'));
			$this->Hsr->updateAll(array('Hsr.parked' => 'Hsr.parked+1'), array('Hsr.id' => 62));
	}
	public function hs2() {
	$this->set('hsrs', $this->Hsr->find('all'));

	}
	public function hs3() {
	$this->set('hsrs', $this->Hsr->find('all'));

	}
	public function hs4() {
	$this->set('hsrs', $this->Hsr->find('all'));

	}  
	public function hs5() {
	$this->set('hsrs', $this->Hsr->find('all'));
     $this->Hsr->updateAll(array('Hsr.parked' => 'Hsr.parked-1'), array('Hsr.id' => 62));
	}
    public function admin() {
if ($this->request->is('post')) {
			if ($this->Hsr->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				return $this->redirect(array('controller' => 'hsrs','action' => 'hs1'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
	}
}



?>