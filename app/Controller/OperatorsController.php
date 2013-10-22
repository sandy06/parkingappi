<?php
class operatorsController extends AppController {

	public $name = 'Operators';
	var $helpers=array("Html","Form","Js","Session","Csv");
	var $components=array("Session",'RequestHandler');
	

    public function index($id=null) {

	    
 		$this->response->header('Access-Control-Allow-Origin', '*');
		$this->set('operators', $this->Operator->find('all'));
		$this->set(compact( '_serialize','operators'));
	}

	public function add($id=null) {
	$data=$this->request->input('json_decode', true );
	if ($this->request->is('post')) {
			if ($this->Operator->save($this->request->data)) {
				$this->Session->setFlash('The Operator has been saved');
				return $this->redirect(array('controller' => 'operators','action' => 'equipment'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}

	}
	public function equipment($id=null) {
	

	}
	

	

	function download()
{
    $this->set("operators", $this->Operator->find("all"));
    $this->layout = null;
   $this->autoLayout = false;
  
}
	
	public function view($id=null) {
	$this->set('operators', $this->Operator->find('all'));

	}



	public function edit($id = null) {
		$this->Operator->id = $id;
		
		if (!$this->Operator->exists()) {
			throw new NotFoundException('Invalid post');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Operator->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Operator->read();
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
		if ($this->Operator->delete($id)) {
			$this->Session->setFlash('User deleted');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('User was not deleted');
		$this->redirect(array('action' => 'index'));
	}
	public function contact() {
       $this->set('operators', $this->Operator->find('all'));
	}

    public function enquiry() {
		$this->Operator->create();
		if ($this->request->is('post')) {
				for($i=1;$i<4;$i++)
				{
					if(empty($this->data['Operator']['image'.$i]['name'])){
						unset($this->request->data['Operator']['image'.$i]);
					}
					
					if(!empty($this->data['Operator']['image'.$i]['name']))
					{
						$file=$this->data['Operator']['image'.$i];
						$ary_ext=array('jpg','jpeg','gif','png'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/uploads/tests/' . mktime().$file['name']	);
							$this->request->data['Operator']['image'.$i] = mktime().$file['name'];
						}
					}
					
				}
			
 			if ($this->Operator->save($this->request->data)) 
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




    





}

