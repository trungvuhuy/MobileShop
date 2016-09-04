<?php
class MembersController extends AppController {

	var $name = 'Members';
	var $uses =array('Member');
	var $components = array("Session","Captcha"); 
	
	function index() {
	
		$this->render('/default/members/index');
	}
	
	function register() {
	
		mysql_query("SET names utf8");
		
		if(!empty($this->data)){
			//pr($this->data);die();
				$err="";
				$count_err=0;
				if($this->data['Member']['name']!="") {$this->Session->write('name',$this->data['Member']['name']);}
				if($this->data['Member']['email']!="") {$this->Session->write('email',$this->data['Member']['email']);}
				if($this->data['Member']['user']!="") {$this->Session->write('user',$this->data['Member']['user']);}
				if($this->data['Member']['pass']!="") {$this->Session->write('pass',$this->data['Member']['pass']);}
				if($this->data['Member']['pass_1']!="") {$this->Session->write('pass_1',$this->data['Member']['pass_1']);}
				if($this->data['Member']['address']!="") {$this->Session->write('address',$this->data['Member']['address']);}
			if($this->data['Member']['pass']!=$this->data['Member']['pass_1'])
				{
					$err="Mật khẩu nhập không khớp, vui lòng nhập lại!";
					$count_err=3;	
					$this->Session->write('count_err',$count_err);	
					echo "<script>alert('".json_encode('Mật khẩu nhập không khớp, vui lòng nhập lại!')."');</script>";
					echo "<script>location.href='../members/register'</script>";
				}
			else
				{
					$this->Session->delete('count_err');
					$this->data['Member']['pass']=md5($this->data['Member']['pass']);	
					if($this->Member->save($this->data)){
						$this->Session->delete('name');
						$this->Session->delete('email');
						$this->Session->delete('user');
						$this->Session->delete('pass');
						$this->Session->delete('pass_1');
						$this->Session->delete('address');
						$this->Session->delete('count_err');
						echo "<script>alert('".json_encode('Đăng ký thành công')."');</script>";
						echo "<script>location.href='../members/register'</script>";
					}
				}
			
		}
		else
		{
			//$count_err=1;
			//$this->set('count_err',$count_err);
		}
		$this->render('/default/members/register');
	}
	
	function login() {
		if(!empty($this->data)){
				$test=$this->Member->find('all',array('conditions'=>array('Member.user'=>$this->data['Member']['user'])));
				if(!empty($test)) 
				{
					if($test[0]['Member']['pass']==md5($this->data['Member']['pass']))
					{
						//KHởi tạo SESSION
						$this->Session->write('IdMember',$test[0]['Member']['id']);
						$this->Session->write('Username',$test[0]['Member']['user']);
						$this->Session->write('Fullname',$test[0]['Member']['name']);
						$this->Session->write('Email',$test[0]['Member']['email']);
						$this->Session->write('timelog',time());
						//End Session
						echo "<script>alert('".json_encode('Đăng nhập thành công. Chào mừng bạn đến với Website!')."');</script>";
						echo "<script>location.href='../members/index'</script>";
					}
					else
					{
						echo "<script>alert('".json_encode('Mật khẩu không đúng, vui lòng kiểm tra lại!')."');</script>";
						echo "<script>location.href='../members/login'</script>";
					}
				}
				else
				{
						echo "<script>alert('".json_encode('Tên đăng nhập không tồn tại, vui lòng kiểm tra lại')."');</script>";
						echo "<script>location.href='../members/login'</script>";
				}
		}		
		else {
		
		}
		$this->render('/default/members/login');
	}
	function logout() {//Đăng xuất tài khoản
		$this->Session->delete('IdMember');
		$this->Session->delete('Username');
		$this->Session->delete('Fullname');  
		$this->Session->delete('Email');  
		$this->Session->delete('timelog');  
		echo "<script>location.href='../home'</script>";
		//$this->redirect($_SERVER['HTTP_REFERER']);
	}
	 
}
?>