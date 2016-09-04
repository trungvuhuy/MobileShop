<?php
class LoginController extends AppController {

		var $name = 'Login';
		var $uses = 'Admin';
	
	/***
	**Phần giành cho admin
	***/
	function admin_index() {
		if (!empty($_POST)) {
			$username = $_POST['name'];
			$password = $_POST['pass'];
			$checkuser = $this->Admin->find('all',array('conditions'=>array('name  '=>$username,'password'=>md5($password)),'limit'=>1));
			if($checkuser==NULL) {
			}else {
				$this->Session->write('auth',$checkuser);
				$this->Session->write('controller',$checkuser[0]['Admin']['controller']);
				$this->Session->write('admin_name',$checkuser[0]['Admin']['name']);
              	$this->redirect(array('controller'=>'dashboard','action'=>'admin_index'));
			}
			
		}
		$this->render('/admin/login/index');
	}
	function admin_logout() {
		$this->Session->destroy();
		$this->redirect(array('controller'=>'login','action'=>'admin_index'));
	}

}
?>