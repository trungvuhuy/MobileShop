<?php
class DashboardController extends AppController {

	var $name = 'Dashboard';
	var $uses = array('Invoice','Product');
	
	function admin_index() {		mysql_query("SET names utf8");		$Invoice = $this->Invoice->find('all',array('conditions'=>array('Invoice.status'=>0,)));								$this->set('allInvoices',$Invoice);
		$this->render('/admin/dashboard/index');
	}
	

}
?>