<?php
class CommentController extends AppController {

	var $name = 'Comment';
	var $uses=array('Product','Category');
	
	function viewProduct($id){
		mysql_query("SET names utf8");
		return $this->Product->find('all',array('conditions'=>array('Product.id '=>$id)));	
	}

	
	/* list danh sách danh mục sản phẩm */
	
	function listCategory() {
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.parent_id'=>0,'Category.status'=>1),'order'=>'Category.order ASC'));			
	}
	
	/* list danh sách sản phẩm */
	function listProductHome($id){
		mysql_query("SET names utf8");
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>'1','Product.category_id'=>$id),'order'=>'Product.id DESC','limit'=>'6'));	
	}

	/* list danh sách sản phẩm nổi bật */
	function listProductprominent(){
		mysql_query("SET names utf8");
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>'1','Product.prominent'=>1),'order'=>'Product.id DESC','limit'=>'5'));
	}
	
	/* LIST DANH SÁCH SẢN PHẨM KHUYẾN MÃI */
	
	function listProductsale(){
		mysql_query("SET names utf8");
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>'1','Product.sale'=>1),'order'=>'Product.id DESC','limit'=>'5'));
	}

	function listProductnew(){
		mysql_query("SET names utf8");
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>'1','Product.new'=>1),'order'=>'Product.id DESC','limit'=>'5'));
	}
	

}
?>
