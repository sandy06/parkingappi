<?php
class testsController extends AppController {

	public $name = 'Tests';
	var $helpers=array("Html","Form","Js","Session","Csv");
	var $components=array("Session",'RequestHandler');
	

    public function index($id=null) {

	    
 		$this->response->header('Access-Control-Allow-Origin', '*');
		$this->set('tests', $this->Test->find('all'));
		$this->set(compact( '_serialize','tests'));
	}

	public function add($id=null) {
	$data=$this->request->input('json_decode', true );
	if ($this->request->is('post')) {
			if ($this->Test->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				return $this->redirect(array('controller' => 'tests','action' => 'equipment'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}

	}
	public function equipment($id=null) {
	

	}
	public function kormangla() {
       $this->set('tests', $this->Test->find('all'));
	

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
       $this->set('tests', $this->Test->find('all'));
	}
	public function Parking1() {
	$this->set('tests', $this->Test->find('all'));
	$this->Test->updateAll(array('Test.parked' => 'Test.parked+1'), array('Test.id' => 72));


	}
    public function parking2() {
	$this->set('tests', $this->Test->find('all'));
	$this->Test->updateAll(array('Test.parked' => 'Test.parked+1'), array('Test.id' => 59));

	}
	public function parking3() {
	$this->set('tests', $this->Test->find('all'));
	$this->Test->updateAll(array('Test.parked' => 'Test.parked+1'), array('Test.id' => 59));

	}
	public function parking4() {
    $this->set('tests', $this->Test->find('all'));
	}
	public function parking5() {
    $this->set('tests', $this->Test->find('all'));
	}
	public function parking6() {
    $this->set('tests', $this->Test->find('all'));
	}
		public function parking7() {
    $this->set('tests', $this->Test->find('all'));
	$this->Test->updateAll(array('Test.parked' => 'Test.parked-1'), array('Test.id' => 72));
	}
    public function enquiry() {
		$this->Test->create();
		if ($this->request->is('post')) {
				for($i=1;$i<4;$i++)
				{
					if(empty($this->data['Test']['image'.$i]['name'])){
						unset($this->request->data['Test']['image'.$i]);
					}
					
					if(!empty($this->data['Test']['image'.$i]['name']))
					{
						$file=$this->data['Test']['image'.$i];
						$ary_ext=array('jpg','jpeg','gif','png'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/uploads/tests/' . mktime().$file['name']	);
							$this->request->data['Test']['image'.$i] = mktime().$file['name'];
						}
					}
					
				}
			
 			if ($this->Test->save($this->request->data)) 
 			{
				$this->Session->setFlash('Your post has been saved.');
				$this->redirect(array('action' => 'enquiry'));
			}
			else 
			{
				$this->Session->setFlash('Unable to add your post.');
			}
		}
	}
      
public function about() {

	}
	public function admin() {
	
	if ($this->request->is('post')) {
			if ($this->Test->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				return $this->redirect(array('controller' => 'tests','action' => 'parking1'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}



    
}
  public function upload()
  {
    $this->autoRender = false;

    if ($this->RequestHandler->isAjax())
    {   
      echo 'Hi!';
      exit();
    }   
  }
  public function fak() {

	}
	
	
	
	

}



?>