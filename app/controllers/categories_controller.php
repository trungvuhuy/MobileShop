<?php
class CategoriesController extends AppController {

	var $name = 'Categories';
	var $uses =array('Category');
	
	function index_home1() {
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.parent_id'=>0,'Category.status '=> 1 ),'order'=>'Category.order ASC'));			
	}
	
	function index_home2($id = null) {
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>$id),'order'=>'Category.order ASC'));			
	}
	
	function index_home3($id = null) {
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>$id),'order'=>'Category.order ASC'));			
	}
	
	/*** 
	** Phần giành cho admin
	***/
	function admin_index() {
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array(),'order'=>'Category.order ASC','limit' =>10000);
		$this->set('Categories',$this->paginate('Category'));
		$this->set('Categories2',$this->paginate('Category'));
		$this->set('Categories3',$this->paginate('Category'));
       	$this->render('/admin/categories/index');
	}
	function admin_add() {
		mysql_query("SET names utf8");
		
		if(!empty($this->data)){
			$this->Category->create();
			
			$alias=strtolower($this->Common->unicode_convert($this->data['Category']['title']));
			$this->data['Category']['alias']= Inflector::slug($alias,'-');
			
			if($this->data['Category']['parent_id']==-1) {$this->data['Category']['parent_id']=0;}
			$this->data['Category']['postdate']=time();
			if ($this->Category->save($this->data)) {
			//pr($this->data);die();
				if($this->data['Category']['check']==1){
					$this->Session->setFlash(__('Thêm mới thành công', true));
					$this->redirect(array('action' => 'admin_add'));
				}else{
					$this->Session->setFlash(__('Thêm mới  thành công', true));
					$this->redirect(array('action' => 'admin_index'));
				}
			} else {
				$this->Session->setFlash(__('Thêm mới danh mục thất bại. Vui long thử lại', true));
			}
		
		}
		
		$main_cat=$this->Category->find('all',array('conditions'=>array('Category.parent_id'=>0,'Category.status'=>1),'order'=>'Category.order ASC'));
		$this->set('main_cats',$main_cat);//kết thúc danh mục cha
		
		$id_prent = $main_cat[0]['Category']['id']; 
		//pr($main_cat);die();
		$main_cat_prent=$this->Category->find('all',array('conditions'=>array('Category.parent_id >' => 0,'Category.status'=>1),'order'=>'Category.order ASC'));
		$this->set('main_cats_prent',$main_cat_prent);//kết thúc danh mục cha thứ 2
		
		$this->render('/admin/categories/add');
	}
	
	function admin_edit($id=null) {
		mysql_query("SET names utf8");

		if(!empty($this->data)){
			$this->Category->create();
			$alias=strtolower($this->Common->unicode_convert($this->data['Category']['title']));
			$this->data['Category']['alias']= Inflector::slug($alias,'-');
					
			
			$this->data['Category']['postdate']=time();
				if ($this->Category->save($this->data)) {
					$this->Session->setFlash(__('Sửa thành công', true));
					  $this->redirect(array('action' => 'admin_index'));
					
				} else {
					$this->Session->setFlash(__('Thêm mới danh mục thất bại. Vui long thử lại', true));
				}
			
		}
		else{
			$this->data=$this->Category->read(null,$id);
		}
		
		$main_cat=$this->Category->find('all',array('conditions'=>array('Category.parent_id'=>0,'Category.status'=>1),'order'=>'Category.order ASC'));
		$this->set('main_cats',$main_cat);//kết thúc danh mục cha
		
		$id_prent = $main_cat[0]['Category']['id']; 
		//pr($main_cat);die();
		$main_cat_prent=$this->Category->find('all',array('conditions'=>array('Category.parent_id >' => 0,'Category.status'=>1),'order'=>'Category.order ASC'));
		$this->set('main_cats_prent',$main_cat_prent);//kết thúc danh mục cha thứ 2
		
		$this->render('/admin/categories/edit');
	}
	function admin_closes($id=null) {
		$close=array('Category'=>array(
										'id'=>$id,
										'status'=>0
										));
		if($this->Category->save($close)){
				$this->Session->setFlash(__('Thành công', true));
			    $this->redirect(array('action' => 'admin_index'));			
		}
		else{
			$this->Session->setFlash(__('Không thành công ! Vui lòng thử lại', true));
		    $this->redirect(array('action' => 'admin_index'));
		}		

	}
	
	function admin_actives($id=null) {
		$active=array('Category'=>array(
										'id'=>$id,	
										'status'=>1
											));
		if($this->Category->save($active)){
				$this->Session->setFlash(__('Thành công', true));
			    $this->redirect(array('action' => 'admin_index'));			
		}
		else{
			$this->Session->setFlash(__('Không thành công ! Vui lòng thử lại', true));
		    $this->redirect(array('action' => 'admin_index'));
		}	

	}
	function admin_deleteone($id=null) {
		$this->Category->delete($id);
		$this->Session->setFlash(__('Delete thành công', true));
        $this->redirect(array('action' => 'admin_index'));

	}
	
	function admin_delete() {
		if($_POST['chkId']){
			$Idnews=$_POST['chkId'];
			foreach($Idnews as $id){
				$this->Category->delete($id);			
			}
			$this->Session->setFlash(__('Delete thành công', true));
			$name=$_SERVER['HTTP_REFERER'];
			$this->redirect($name);
		}
	}
	function admin_local() {//hiển thị các "hạng mục lớn:"
		$this->layout= 'ajax';
		mysql_query("SET names utf8");
		$idcategory=$_GET['idcategory'];
		$this->set('categories',$this->Maker->find('all',array('conditions'=>array('Maker.id_country'=>$idcategory,'Maker.status'=>1),'order'=>'Maker.order ASC')));														
		$this->render('/admin/categories/local');
	}	
	function admin_localCategory() {//hiển thị các "hạng mục lớn:"
		$this->layout= 'ajax';
		mysql_query("SET names utf8");
		$idcategory=$_GET['idcategory'];
		$this->set('categories',$this->Category->find('all',array('conditions'=>array('Category.id_local'=>$idcategory,'Category.status'=>1),'order'=>'Country.order ASC')));														
		$this->render('/admin/categories/category');
	}

}
?>