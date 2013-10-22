<?php
class ejipsController extends AppController {

	public $name = 'Ejips';
	var $helpers=array("Html","Form","Js","Session","Csv");
	var $components=array("Session",'RequestHandler');
	

    public function index($id=null) {

	    
 		$this->response->header('Access-Control-Allow-Origin', '*');
		$this->set('ejips', $this->Ejip->find('all'));
		$this->set(compact( '_serialize','mads'));
	}

	public function add($id=null) {
	$data=$this->request->input('json_decode', true );
	if ($this->request->is('post')) {
			if ($this->Test->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				return $this->redirect(array('controller' => 'ejips','action' => 'equipment'));
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
      
	public function ejip() {
	 $this->set('ejips', $this->Ejip->find('all'));
	}


public function par1() {
             $this->set('ejips', $this->Ejip->find('all'));
			 $this->Ejip->updateAll(array('Ejip.parked' => 'Ejip.parked+1'), array('Ejip.id' => 62));

	}
	public function par2() {
       $this->set('ejips', $this->Ejip->find('all'));
	}public function par3() {
       $this->set('ejips', $this->Ejip->find('all'));
	}public function par4() {
       $this->set('ejips', $this->Ejip->find('all'));
	}
     public function par5() {
       $this->set('ejips', $this->Ejip->find('all'));
			 $this->Ejip->updateAll(array('Ejip.parked' => 'Ejip.parked-1'), array('Ejip.id' => 62));
	}
	 public function admin() {
if ($this->request->is('post')) {
			if ($this->Ejip->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				return $this->redirect(array('controller' => 'ejips','action' => 'par1'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
	}
}



?>