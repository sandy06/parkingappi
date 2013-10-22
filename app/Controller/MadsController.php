<?php
class madsController extends AppController {

	public $name = 'Mads';
	var $helpers=array("Html","Form","Js","Session","Csv");
	var $components=array("Session","RequestHandler");
	

    public function index($id=null) {

	    
 		$this->response->header('Access-Control-Allow-Origin', '*');
		$this->set('mads', $this->Mad->find('all'));
		$this->set(compact( '_serialize','mads'));
	}

	public function add($id=null) {
	$data=$this->request->input('json_decode', true );
	if ($this->request->is('post')) {
			if ($this->Mad->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				return $this->redirect(array('controller' => 'mads','action' => 'equipment'));
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
      
	public function madiwala() {
	$this->set('mads', $this->Mad->find('all'));
	}
	public function park1() {
	$this->set('mads', $this->Mad->find('all'));
	$this->Mad->updateAll(array('Mad.parked' => 'Mad.parked+1'), array('Mad.id' => 64));

	}
    public function park2() {
	$this->set('mads', $this->Mad->find('all'));

	}
    public function park3() {
	$this->set('mads', $this->Mad->find('all'));

	}
    public function park4() {
	$this->set('mads', $this->Mad->find('all'));

	}
	   public function park5() {
	   $this->set('mads', $this->Mad->find('all'));
	$this->Mad->updateAll(array('Mad.parked' => 'Mad.parked-1'), array('Mad.id' => 64));


	}
	public function btm() {

	}
    public function admin() {
	if ($this->request->is('post')) {
			if ($this->Mad->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				return $this->redirect(array('controller' => 'mads','action' => 'park1'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}

	}

}



?>