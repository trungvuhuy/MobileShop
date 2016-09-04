<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $uses = array('Invoice','Product','Category','Brand');

	function index() {
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array('Product.status'=>'1'),'order'=>'Product.id DESC','limit' =>20);
		$this->set('Product',$this->paginate('Product'));	

		$this->render('/default/products/index');
	}
	
	function views($id=null){
		mysql_query("SET names utf8");
		$this->data=$this->Product->read(null,$id);
		$this->render('/default/products/views');

	}
	// list danh sách sản phẩm danh mục thứ nhất
	function listP1($id = null){
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array('Product.status'=>'1','Product.category_id'=>$id),'order'=>'Product.created DESC','limit' =>15);
		$this->data = $this->Category->read(null,$id);
		$this->set('Product',$this->paginate('Product'));
		$this->render('/default/products/index');
	}

	function listC1($id = null){
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array('Product.status'=>'1','Product.category_id'=>'1'),'order'=>'Product.created DESC','limit' =>15);
		$this->data = $this->Category->read(null,$id);
		$this->set('Product',$this->paginate('Product'));
		$this->render('/default/products/index');
	}

	function listC2($id = null){
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array('Product.status'=>'1','Product.category_id'=>'2'),'order'=>'Product.created DESC','limit' =>15);
		$this->data = $this->Category->read(null,$id);
		$this->set('Product',$this->paginate('Product'));
		$this->render('/default/products/index');
	}

	function listBrand($id = null){
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array('Product.status'=>'1','Product.brand_id'=>$id),'order'=>'Product.created DESC','limit' =>15);
		$this->data = $this->Brand->read(null,$id);
		$this->set('Product',$this->paginate('Product'));
		$this->render('/default/products/index2');
	}
	// list danh sách sản phẩm danh mục thứ hai
	function listP2($id = null){
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array('Product.status'=>'1','Product.maincategory_id'=>$id),'order'=>'Product.created DESC','limit' =>15);
		$this->data = $this->Category->read(null,$id);
		$this->set('Product',$this->paginate('Product'));
		$this->render('/default/products/index');
	}
	// list danh sách sản phẩm danh mục thứ ba
	function listP3($id = null){
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array('Product.status'=>'1','Product.subcategory_id'=>$id),'order'=>'Product.created DESC','limit' =>15);
		$this->data = $this->Category->read(null,$id);
		$this->set('Product',$this->paginate('Product'));
		$this->render('/default/products/index');
	}
	
	function search(){		
		mysql_query("SET names utf8");		
		if(isset($_POST['txt_name'])){			
			$name = $_POST['txt_name'];			
			$this->paginate = array('conditions' =>array('Product.status'=>'1','Product.name Like'=>'%'.$name.'%'),'order' =>'Product.name ASC','limit' =>15);		 	
			$this->set('Pro_search',$this->paginate('Product'));	
		}		
		$this->render('/default/products/search');	
	}
//-----------------------------------Chức năng giỏ hàng--------------------------------------------------//	
	function addtocart($id=null){
		mysql_query("SET names utf8");
		if($this->Session->check("cart.'".$id."'"))
		{
			$newId=$this->Session->read("cart.'".$id."'")+1;
			$this->Session->write("cart.'".$id."'", $newId);
			$qty	=$this->Session->read("cart.'".$id."'");
		}
		else
		{
			$qty=1;
		}
		$this->Session->write("cart.'".$id."'", $qty);
		$this->redirect(array('action' => 'viewcart'));		
	}
	
	function addtocart2(){
		mysql_query("SET names utf8");
		$id = $_POST['txt_id'];
		$txt_qty = $_POST['txt_qty'];
		
		if($this->Session->check("cart.'".$id."'") && $this->Session->check("color.'".$id."'"))
				{
					if(empty($txt_qty)) {
					$newId=$this->Session->read("cart.'".$id."'")+1;
					$this->Session->write("cart.'".$id."'", $newId);
					
					$qty	=$this->Session->read("cart.'".$id."'");
					} else {
					$newId=$this->Session->read("cart.'".$id."'")+$txt_qty;
					$this->Session->write("cart.'".$id."'", $newId);
					$qty	=$this->Session->read("cart.'".$id."'");
					}
				}
				else
				{
					$qty= $txt_qty;
				}
		$this->Session->write("cart.'".$id."'", $qty);
		$this->redirect(array('action' => 'viewcart'));		
	}
	
	function viewcart(){
		mysql_query("SET names utf8");
		if(!empty($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $key=>$value)
			{
				$item[]=$key;
			}
			$str=implode(",",$item);				
		$list=$this->Product->query("select * from products where id in ($str)");
		} else { $list = 0;}
		$this->set('list',$list);		
		$this->render('/default/products/viewcart');	
	}
	function delcart($id=null){
		mysql_query("SET names utf8");
		
		$cart=$_SESSION['cart'];
		
		if($id == 0)
		{
			$this->Session->delete('cart');
		}
		else
		{
			$this->Session->delete("cart.'".$id."'");
		}
	
		$this->redirect(array('action' => 'viewcart'));
	}
	function updateCart(){
		if(isset($_POST['submit']))
		{
			foreach($_POST['qty'] as $key=>$value)
			{
				if( ($value == 0) and (is_numeric($value)))
				{					
					$this->Session->delete("cart.'".$key."'");
				}
				elseif(($value > 0) and (is_numeric($value)))
				{
					$this->Session->write("cart.'".$key."'", $value);
				}
			}
			$this->redirect(array('action' => 'viewcart'));
		}
	}
	function finishs() {
		mysql_query("SET names utf8");
        //$this->checkIfLogged();
        if(!empty($this->data)){
			//pr($this->data);die(); 
			if($this->Invoice->save($this->data)){
				echo "<script>alert('".json_encode('Gửi đơn hàng thành công.')."');</script>";
				echo "<script>location.href='".DOMAIN."'</script>";
			}
			else
			{
				echo "<script>alert('".json_encode('Gửi đơn hàng thất bại, vui lòng thử lại.')."');</script>";
				echo "<script>location.href='".DOMAIN."'</script>";
			}			
		}
		
	}	
//----------------------------------Kết thúc chức năng giỏ hàng--------------------------------------------------//	
	
	
	
	
	
	/*Phần quản trị*/
	function admin_index() {
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array(),'order'=>'Product.id DESC','limit' =>20);
		$this->set('productList',$this->paginate('Product'));
			$this->render('/admin/products/index');
	}
	function admin_add() {
		mysql_query("SET names utf8");
		/*-Code danh mục sản phẩm-*/
		$this->set('listCategory',$this->Category->find('list', array( 
															'fields' => array('Category.id', 'Category.title'),
															'conditions' => array('Category.status' => 1,'Category.parent_id' => 0),
															'recursive' => 0
															)));
		$this->set('listBrand',$this->Brand->find('list', array(
			'fields' => array('Brand.id', 'Brand.name'),
			'recursive' => 0
		)));
		if(!empty($this->data)){

			$this->Product->create();
			$alias=strtolower($this->Common->unicode_convert($this->data['Product']['name']));
			$this->data['Product']['alias']= Inflector::slug($alias,'-');
			

			if ($this->Product->save($this->data)) {
					$this->Session->setFlash(__('Thêm mới thành công', true));
					$this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('Thêm mới danh mục thất bại. Vui long thử lại', true));
			}
		}
		$this->render('/admin/products/add');
	}
	
	function admin_edit($id=null) {
		mysql_query("SET names utf8");
		$this->set('listCategory',$this->Category->find('list', array(
			'fields' => array('Category.id', 'Category.title'),
			'conditions' => array('Category.status' => 1,'Category.parent_id' => 0),
			'recursive' => 0
		)));
		$this->set('listBrand',$this->Brand->find('list', array(
			'fields' => array('Brand.id', 'Brand.name'),
			'recursive' => 0
		)));
		if(!empty($this->data)){
			$this->Product->create();		
			
			$alias=strtolower($this->Common->unicode_convert($this->data['Product']['name']));
			$this->data['Product']['alias']= Inflector::slug($alias,'-');
			
			
				if ($this->Product->save($this->data)) {
					$this->Session->setFlash(__('Sửa thành công', true));
					  $this->redirect(array('action' => 'admin_index'));
					
				} else {
					$this->Session->setFlash(__('Thêm mới danh mục thất bại. Vui long thử lại', true));
				}
			
		}
		else{
			$this->data=$this->Product->read(null,$id);
			//pr($this->data);die();
		}
		//$categorylist = $this->Product->generatetreelist(null,null,null," _ ");
		//$this->set(compact('categorylist'));
		$this->render('/admin/products/edit');
	}
	
	
	function admin_closes($id=null) {
		$close=array('Product'=>array(
										'id'=>$id,
										'status'=>0
										));
		if($this->Product->save($close)){
				$this->Session->setFlash(__('Thành công', true));
			    $this->redirect(array('action' => 'admin_index'));			
		}
		else{
			$this->Session->setFlash(__('Không thành công ! Vui lòng thử lại', true));
		    $this->redirect(array('action' => 'admin_index'));
		}		

	}
	
	function admin_actives($id=null) {
		$active=array('Product'=>array(
										'id'=>$id,	
										'status'=>1
											));
		if($this->Product->save($active)){
				$this->Session->setFlash(__('Thành công', true));
			    $this->redirect(array('action' => 'admin_index'));			
		}
		else{
			$this->Session->setFlash(__('Không thành công ! Vui lòng thử lại', true));
		    $this->redirect(array('action' => 'admin_index'));
		}	

	}
	function admin_deleteone($id=null) {
		$this->Product->delete($id);
		$this->Session->setFlash(__('Delete thành công', true));
        $this->redirect(array('action' => 'admin_index'));

	}
	
	function admin_delete() {
		if($_POST['chkId']){
			$Idnews=$_POST['chkId'];
			foreach($Idnews as $id){
				$this->Product->delete($id);			
			}
			$this->Session->setFlash(__('Delete thành công', true));
			$name=$_SERVER['HTTP_REFERER'];
			$this->redirect($name);
		}
		
	}
	
	//------------------Xử lý Ajax-------------------------//
	function aj_posts() {
		$this->layout= 'ajax';
		mysql_query("SET names utf8");
		$idcategory=$_GET['idcategory'];
		$this->paginate = array('conditions'=>array('Category.status' => 1,'Category.parent_id' => $idcategory),'order'=>'Category.id DESC','limit' =>100);
		$this->set('categories',$this->paginate('Category'));	
		$this->render('/admin/products/ajax');
	}	
	
	function aj_posts2() {
		$this->layout= 'ajax';
		mysql_query("SET names utf8");
		$idcategory=$_GET['idcategory'];
		$this->paginate = array('conditions'=>array('Category.status' => 1,'Category.parent_id' => $idcategory),'order'=>'Category.id DESC','limit' =>100);
		$this->set('categories',$this->paginate('Category'));	
		$this->render('/admin/products/ajax2');
	}	
	
	function aj_posts3() {
		$this->layout= 'ajax';
		mysql_query("SET names utf8");
		$idcategory=$_GET['idcategory'];
		$this->paginate = array('conditions'=>array('Maker.status' => 1,'Maker.category_id' => $idcategory),'order'=>'Maker.id DESC','limit' =>100);
		$this->set('categories',$this->paginate('Maker'));	
		$this->render('/admin/products/ajax3');
	}
	//------------------Xử lý Ajax-------------------------//
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}
?>