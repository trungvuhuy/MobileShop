<?php
class BrandsController extends AppController {

	var $name = 'Brands';
	var $uses =array('Category','Brand');
	
	function index_home() {
		mysql_query("SET names utf8");
		return $this->Brand->find('all',array('conditions'=>array('Brand.status '=> 1 ),'order'=>'Brand.name ASC'));
	}
	
	/*** 
	** Phần giành cho admin
	***/
	function admin_index() {
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array(),'order'=>'Brand.name ASC','limit' =>10000);
		$this->set('Brands',$this->paginate('Brand'));
       	$this->render('/admin/brands/index');
	}
	function admin_add() {
		mysql_query("SET names utf8");
		
		if(!empty($this->data)){
			$this->Brand->create();
			
			$alias=strtolower($this->Common->unicode_convert($this->data['Brand']['name']));
			$this->data['Brand']['alias']= Inflector::slug($alias,'-');

			if ($this->Brand->save($this->data)) {
			//pr($this->data);die();

					$this->Session->setFlash(__('Thêm mới  thành công', true));
					$this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('Thêm mới danh mục thất bại. Vui long thử lại', true));
			}
		
		}
		
		$main_cat=$this->Brand->find('all',array('conditions'=>array('Brand.status'=>1),'order'=>'Brand.id ASC'));
		$this->set('main_cats',$main_cat);//kết thúc danh mục cha
		
		$id_prent = $main_cat[0]['Brand']['id'];
		//pr($main_cat);die();
		$main_cat_prent=$this->Brand->find('all',array('conditions'=>array('Brand.status'=>1),'order'=>'Brand.id ASC'));
		$this->set('main_cats_prent',$main_cat_prent);//kết thúc danh mục cha thứ 2
		
		$this->render('/admin/brands/add');
	}
	
	function admin_edit($id=null) {
		mysql_query("SET names utf8");

		if(!empty($this->data)){
			$this->Category->create();
			$alias=strtolower($this->Common->unicode_convert($this->data['Brand']['name']));
			$this->data['Brand']['alias']= Inflector::slug($alias,'-');

				if ($this->Brand->save($this->data)) {
					$this->Session->setFlash(__('Sửa thành công', true));
					  $this->redirect(array('action' => 'admin_index'));
					
				} else {
					$this->Session->setFlash(__('Thêm mới danh mục thất bại. Vui long thử lại', true));
				}
			
		}
		else{
			$this->data=$this->Brand->read(null,$id);
		}
		
		$main_cat=$this->Brand->find('all',array('conditions'=>array('Brand.status'=>1),'order'=>'Brand.id ASC'));
		$this->set('main_cats',$main_cat);//kết thúc danh mục cha
		
		$id_prent = $main_cat[0]['Brand']['id'];
		//pr($main_cat);die();
		$main_cat_prent=$this->Brand->find('all',array('conditions'=>array('Brand.status'=>1),'order'=>'Brand.id ASC'));
		$this->set('main_cats_prent',$main_cat_prent);//kết thúc danh mục cha thứ 2
		
		$this->render('/admin/brands/edit');
	}
	function admin_closes($id=null) {
		$close=array('Brand'=>array(
										'id'=>$id,
										'status'=>0
										));
		if($this->Brand->save($close)){
				$this->Session->setFlash(__('Thành công', true));
			    $this->redirect(array('action' => 'admin_index'));			
		}
		else{
			$this->Session->setFlash(__('Không thành công ! Vui lòng thử lại', true));
		    $this->redirect(array('action' => 'admin_index'));
		}		

	}
	
	function admin_actives($id=null) {
		$active=array('Brand'=>array(
										'id'=>$id,	
										'status'=>1
											));
		if($this->Brand->save($active)){
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