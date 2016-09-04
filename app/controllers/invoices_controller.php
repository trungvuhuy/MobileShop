<?php
class InvoicesController extends AppController {

	var $name = 'Invoices';
	var $uses = array('Invoice','Product');
	
	function thanh_toan_truc_tuyen($id=null) {
				$this->checkIfLogged();
		$this->set('idProduct',$id);
		$this->render('/default/products/thanh_toan_truc_tuyen');
	}
	function soha_pay($id=null){
		include("class_payment.php");			
		$info=$this->Product->read(null,$id);
		$members=$this->User->read(null,$this->Session->read('idMember'));		
		$this->data['Invoice']['user_name']=$members['User']['myname'];
		$this->data['Invoice']['user_id']=$members['User']['id'];
		$this->data['Invoice']['mobile']=$members['User']['mobile'];
		$this->data['Invoice']['add']=$members['User']['add'];
		$this->data['Invoice']['add_ship']="Thanh toán trực tuyến qua Soha";
		$this->data['Invoice']['id_product']=$info['Product']['id'];
		$this->data['Invoice']['image_product']=$info['Product']['images'];
		$this->data['Invoice']['name_product']=$info['Product']['name'];
		$this->data['Invoice']['quantity_product']=1;
		$this->data['Invoice']['cost_product']=$info['Product']['percent'];
		$this->Session->write('total_money',$info['Product']['percent']);
		
		if($this->Invoice->save($this->data)){
				$product=$this->Product->findById($this->data['Invoice']['id_product']);
				$update=array('Product'=>array(
												'id'=>$product['Product']['id'],
												'type'=>$product['Product']['type'] + 1,
												));
				$this->Product->save($update);		
				$this->mail_thongbao();
				
					$last=$this->Invoice->find('all',array('conditions'=>array(),'order'=>'Invoice.id DESC','limit'=>'1'));//pr($last);die();
					$id=$last[0]['Invoice']['id'];
					$id="order_".$id;
					$url=DOMAIN."/complete.php";
					$params = array(
						 'transaction_info'  => 'Thông tin giao dịch',
						 'price'                    =>$info['Product']['percent'],
						'order_ship'           => $id,	
						'return_url'	      => $url					
						);
					   $classPayment= new PG_checkout();
				$link_soha=$classPayment->buildEmbedUrl($params);
				echo "<script>location.href='".$link_soha."'</script>";
			}
		else
			{
				echo "<script>alert('".json_encode('Có lỗi sảy ra, vui lòng thử lại')."');</script>";
				echo "<script>location.href='".DOMAIN."'</script>";
			}
	}
	
	function checkout_bk($id=null){
		
		$info=$this->Product->read(null,$id);
		$members=$this->User->read(null,$this->Session->read('idMember'));
	

		
		$this->data['Invoice']['user_name']=$members['User']['myname'];
		$this->data['Invoice']['user_id']=$members['User']['id'];
		$this->data['Invoice']['mobile']=$members['User']['mobile'];
		$this->data['Invoice']['add']=$members['User']['add'];
		$this->data['Invoice']['add_ship']="Thanh toán trực tuyến qua Bảo Kim";
		$this->data['Invoice']['id_product']=$info['Product']['id'];
		$this->data['Invoice']['image_product']=$info['Product']['images'];
		$this->data['Invoice']['name_product']=$info['Product']['name'];
		$this->data['Invoice']['quantity_product']=1;
		$this->data['Invoice']['cost_product']=$info['Product']['percent'];
		$this->Session->write('total_money',$info['Product']['percent']);
		
		if($this->Invoice->save($this->data)){
				$product=$this->Product->findById($this->data['Invoice']['id_product']);
				$update=array('Product'=>array(
												'id'=>$product['Product']['id'],
												'type'=>$product['Product']['type'] + 1,
												));
				$this->Product->save($update);								
				
				echo "<script>location.href='".DOMAIN."/invoices/checkout'</script>";
			}
			else
			{
				echo "<script>alert('".json_encode('Có lỗi sảy ra, vui lòng thử lại')."');</script>";
				echo "<script>location.href='".DOMAIN."'</script>";
			}
		
	$this->mail_thongbao();
	}
	function checkout(){
			
			include_once 'BaoKimPayment.php';

	//$total=	
	


	/*
	 * Lưu thông tin giỏ hàng vào database.
	 * Sau khi lưu xong sẽ có mã đơn hàng. Chương trình demo này không thực hiện việc lưu 
	 * vào database mà chỉ tạo ra 1 mã đơn hàng ngẫu nhiên.
	 */

	$last=$this->Invoice->find('all',array('conditions'=>array(),'order'=>'Invoice.id DESC','limit'=>'1'));//pr($last);die();
	$id=$last[0]['Invoice']['id'];
	//Tạo thông tin submit lên baokim.vn'
	//$id = $this->Invoice->getLastInsertID();
	$total_amount =$this->Session->read('total_money') ;
	$order_id = 'order_'.$id;
	$business = "phalexanh2011@gmail.com";
	$description = "Thanh toan cho don hang /".$order_id;
	$order_description = $description;
	$shipping_fee = 0; //Nếu có tính thêm phí vận chuyển thì thiết lập tại đây
	$tax_fee = 0; //Nếu có tính thêm phí VAT thì thiết lập tại đây
	$url_success = 'http://muarieng.vn/'; //Thiết lập url callback để update thông tin thanht toán
	$url_cancel = ''; //Url khi click link "Tôi không muốn thanh toán đơn hàng này" trên cổng thanh toán Bảo Kim
	$url_detail = ''; //Url chứa thông tin chi tiết đơn hàng
	
	$baokim = new BaoKimPayment();
	$request_url = $baokim->createRequestUrl($order_id, $business, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail);
	//echo $request_url;die();
	//redirect sang cổng thanh toán Bảo Kim
	//header('Location:' . $request_url);
	echo "<script>location.href='".$request_url."'</script>";
	
	}
	
	
	function admin_index() {
		mysql_query("SET names utf8");
		//$this->set('allInvoices',$this->Invoice->find('all',array('order'=>'Invoice.id DESC','limit' =>50)));
		$this->paginate = array('conditions'=>array(),
								'order'=>'Invoice.id DESC','limit' =>50);						
		$this->set('allInvoices',$this->paginate('Invoice'));
		$this->render('/admin/invoices/index');
	}
	function admin_index_stt($id=null) {
		mysql_query("SET names utf8");		
		if($id==0) 	$this->set('status','Đơn hàng chưa cập nhật');
		if($id==1) 	$this->set('status','Khách hàng đã chuyển tiền - website chưa chuyển hàng');
		if($id==2) 	$this->set('status','Khách hàng chuyển tiền - website chưa chuyển hàng');
		if($id==4) 	$this->set('status','Khách hàng đã thanh toán và đã nhận hàng');
		if($id==5) 	$this->set('status','Hủy Deal');
		
		
		$this->paginate = array('conditions'=>array('Invoice.status'=>$id,
													),
								'order'=>'Invoice.id DESC','limit' =>50);						
		$this->set('allInvoices',$this->paginate('Invoice'));
		$this->render('/admin/invoices/index');
	}
	function admin_updatestt() {
		mysql_query("SET names utf8");	
		if($this->data['Invoice']['status']=="3" || $this->data['Invoice']['status']=="4")	{

				$this->Product->query("UPDATE products SET number_real=number_real+".$this->data['Invoice']['quantity_product']." WHERE id='".$this->data['Invoice']['id_product']."' ");
		}			
/*		if($this->data['Invoice']['status']=="5")	{

				$this->Product->query("UPDATE products SET type=type-".$this->data['Invoice']['quantity_product']." WHERE id='".$this->data['Invoice']['id_product']."' ");
		}
*/		
		$this->Invoice->create();
		if ($this->Invoice->save($this->data)) {
			echo "<script>alert('".json_encode('Cập nhật trạng thái thành công.')."');</script>";
			echo "<script>location.href='../invoices/admin_index'</script>";
		}
		$this->render('/admin/invoices/index');
	}

	
	function admin_view($id=null) {
		mysql_query("SET names utf8");
		$this->data=$this->Invoice->read(null,$id);
		$this->set('id_view',$id);
		$this->render('/admin/invoices/view');
	}
	
	function delete() {
		if($_POST['chkId']){
			$Idnews=$_POST['chkId'];
			foreach($Idnews as $id){
				$this->Invoice->delete($id);			
			}
			$this->Session->setFlash(__('Delete thành công', true));
			$name=$_SERVER['HTTP_REFERER'];
			$this->redirect($name);
		}
	}

	function admin_customers() {
		$this->paginate = array('conditions'=>array('User.type'=>0,
													 'User.total_money >'=>5000000,
													),
								'order'=>'User.id DESC','limit' =>20);
		//pr($this->paginate('User'));die();						
		$this->set('peoples',$this->paginate('User'));
		
		$this->render('/admin/invoices/members');
	}
	// hiên thị chi tiêt hóa đơn
	
	function admin_viewdetail($id=null) {
		$this->set('listInvoices',$this->Invoice->find('all',array('conditions'=>array(
																						'Invoice.user_id'=>$id
																						),
																	'order'=>'Invoice.id DESC'
																	)));
		$this->data=$this->User->read(null,$id);
	$this->render('/admin/invoices/viewdetail');

	}
			function admin_delete() {
		if($_POST['chkId']){
			$Idnews=$_POST['chkId'];
			foreach($Idnews as $id){
				$this->Invoice->delete($id);			
			}
			$this->Session->setFlash(__('Delete thành công', true));
			$name=$_SERVER['HTTP_REFERER'];
			$this->redirect($name);
		}

	}
   function admin_closes($id=null) {
	   $close=array('Invoice'=>array(
										'id'=>$id,
										'status'=>0
										));
		if($this->Invoice->save($close)){
				$this->Session->setFlash(__('Thành công', true));
			    $this->redirect(array('action' => 'admin_index'));			
		}
		else{
			$this->Session->setFlash(__('Không thành công ! Vui lòng thử lại', true));
		    $this->redirect(array('action' => 'admin_index'));
		}		

	}
	function actives($id=null,$id_member=null,$totall=null) {
		


		$active=array('Invoice'=>array(
										'id'=>$id,	
										'status'=>1
											));
		if($this->Invoice->save($active)){
				$this->Session->setFlash(__('Thành công', true));
			    $this->redirect(array('action' => 'admin_index'));			
		}
		else{
			$this->Session->setFlash(__('Không thành công ! Vui lòng thử lại', true));
		    $this->redirect(array('action' => 'admin_index'));
		}	

	}
	function admin_deleteone($id=null) {
		if($this->Product->delete($id)){
            $this->Session->setFlash(__('Delete thành công', true));
			$this->redirect($_SERVER['HTTP_REFERER']);
		}
	}

}

?>