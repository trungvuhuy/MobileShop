<?php
class GlobalComponent extends Object
{
	var $controller=true;
	var $view;
	var $helpers = array('Html','Javascript','Ajax','Form','Session');
	var $components 	= array('Session','Upload','Email','Cookie');
	var $out_enc		= 'UTF-8';
	var $in_enc			= 'UTF-8';
	function companyHaveJob($jobId,$companyId){
		$jobsOfCompany = $this->controller->Job->find('list',array('conditions'=>array('user_id'=>$companyId),'fields'=>array('Job.id')));		
		return in_array($jobId,$jobsOfCompany);	
	}
	function startup(&$controller)
	{
		$this->controller = &$controller;
 // Check permission
    
	}
	function initialize(&$controller) {
        $this->controller = &$controller;
    }
	function checkSession($userType)
	{
		$sessionUser = $this->Session->read(SESSION_USER);
		if ((empty($sessionUser)) || ($sessionUser[USER_TYPE] != $userType))
		{
			return false;
		}
		return true;
	}
	
	/// ================================== ADS
	
	function setUser(){
		$sessionUser = $this->Session->read(SESSION_USER);
		if(!empty($sessionUser)){
			if($sessionUser[USER_TYPE] == TYPE_USER){
				$this->controller->set('user_id',$sessionUser[USER_ID]);
				$this->controller->set('name_user',$sessionUser[NAME_USER]);
			}
		}
	}
	
	//Ham kiem tra dinh dang cua images
	function imageFileCheck($modelName,$fieldName)
	{
		//Begin Upload file check =============================
		$correctExtension = array("jpg","gif","png","swf",'txt',"pdf");
		$bUpload = false;
		$file = &$this->controller->data[$modelName][$fieldName];

		if(isset($file) && (!empty($file))&&($file['name'] !="")){
			$bUpload = TRUE;
			$name = $file['name'];

		//++ Image upload====================================================
			$this->Upload->upload($file);
			$handle = $this->Upload;
			if ($handle->uploaded) {
				$handle->file_max_size = PB_APP_MAX_UPLOAD_SIZE;

					//Check file size
				if ($handle->file_src_size > $handle->file_max_size ) {
					$bUpload = FALSE;
				}
				else {
						//Check file extension
					if (!in_array(strtolower($handle->file_src_name_ext),$correctExtension))
					{
						$bUpload = FALSE;
					}
				}

			}
		}
		return $bUpload;
	}
	
	//Ham upload images
	function imageUpload($modelName,$fieldName,$resize = false,$x =0,$y=0)
	{
		$bUploaded= $this->imageFileCheck($modelName,$fieldName);
		
		$nameoutput = '';
		$file = &$this->controller->data[$modelName][$fieldName];
		
		if ($bUploaded){
			//++ Image upload====================================================
			if(isset($file) && $file['name'] !=""){
		

				$this->Upload->upload($file);
				$handle = $this->Upload;
				
				if ($handle->uploaded) {
					$handle->image_resize		  = $resize;;
					$handle->image_ratio_y		  = $y;
					$handle->image_x			  = $x;
					$handle->file_overwrite = true;
					$handle->file_auto_rename = false;

					$today = getdate();

					//[yyyyMMdd]_[contractors_id]_[pict_m]
					$filename = mktime()."_vtmgroup";
					$handle->file_new_name_body = $filename;
					$handle->Process(PB_APP_IMG_PATH."/");
					if (!$handle->processed) {
						$bUploaded = FALSE;
					}else {
						
						$nameoutput = $handle->file_dst_name;
						
					}
				}
				else{
				
					$bUploaded = FALSE;
				}
			}
					
		//-- Image upload====================================================
		}

		return $nameoutput;
	}
	
	function imageUpload2($modelName,$fieldName,$resize = false,$x =0,$y=0)
	{
		$bUploaded= $this->imageFileCheck($modelName,$fieldName);
		$nameoutput = '';
		$file = &$this->controller->data[$modelName][$fieldName];
		
		if ($bUploaded){
			//++ Image upload====================================================
			if(isset($file) && $file['name'] !=""){
		

				$this->Upload->upload($file);
				$handle = $this->Upload;
				
				if ($handle->uploaded) {
					$handle->image_resize		  = $resize;;
					$handle->image_ratio_y		  = $y;
					$handle->image_x			  = $x;
					$handle->file_overwrite = true;
					$handle->file_auto_rename = false;

					//$sessionUser = $this->Session->read(SESSION_USER);
					$today = getdate();

					//[yyyyMMdd]_[contractors_id]_[pict_m]
					$filename = mktime()."_vtmgroup";


					$handle->file_new_name_body = $filename;
					$handle->Process(PB_APP_IMG_PATH2."/");

					if (!$handle->processed) {
						
						$bUploaded = FALSE;
					}else {
						
						$nameoutput = $handle->file_dst_name;
						
					}
				}
				else{
				
					$bUploaded = FALSE;
				}
			}
					
		//-- Image upload====================================================
		}

		return $nameoutput;
	}
	
	//Ham upload file
	
	function fileUpload($model,$field,$outputPath,$filename)
	{
		$nameoutput = '';
		
		$file = &$this->controller->data[$model][$field];

		//++ File upload====================================================
		if(isset($file) && $file['name'] !=""){

			if($this->Upload->upload($file)){
				echo "xx";
			}else{echo "yy";}
			$handle = $this->Upload;

			if ($handle->uploaded) {

				$handle->file_overwrite = true;
				$handle->file_auto_rename = false;

				$handle->file_new_name_body = $filename;
				$handle->Process($outputPath."/");

				if (!$handle->processed) {
					$bUploaded = FALSE;
				}else {
					$nameoutput = $outputPath."/".$handle->file_dst_name;
				}
			}
			else{
				$bUploaded = FALSE;
			}

		}
	//-- File upload====================================================

		return $nameoutput;
//		echo $nameoutput."xx";die();
	}

/*
*totalInquiries: All records
*setRecordsName: Name of view varible
*
*/
	function uploadFile($modelName,$fieldName)
	{
		$bUploaded= $this->imageFileCheck($modelName,$fieldName);
		$nameoutput = '';
		$file = &$this->controller->data[$modelName][$fieldName];
		$bUploaded=true;
		if ($bUploaded){
			//++ Image upload====================================================
			if(isset($file) && $file['name'] !=""){

				$this->Upload->upload($file);
				$handle = $this->Upload;
				
				if ($handle->uploaded) {
					
					$handle->Process(PB_APP_FILE_PATH."/");

					if (!$handle->processed) {
						
						$bUploaded = FALSE;
					}else {
						
						$nameoutput = $handle->file_dst_name;
						
					}
				}
				else{
				
					$bUploaded = FALSE;
				}
			}
			
		//-- Image upload====================================================
		}
		return $nameoutput;
	}
	
// Ham xu ly phan trang
function paging($model,$sql='', $totalRows=0,$numRowPerPage = 1,$url=''){
	
	$totalPage = ceil($totalRows/$numRowPerPage);		
	$page = isset($_GET['page'])?intval($_GET['page']):1;		
	$start_page = ($page-1)*$numRowPerPage;
	$results = $this->controller->$model->query($sql.' LIMIT '.$start_page.','.$numRowPerPage);				
	$this->controller->set('results', $results);
	$this->controller->set('totalPage',$totalPage);
	$this->controller->set('page',$page);
	$prev='';
	$next='';
	if($page>1) {
		$prev = '<a id="prev" href="'.$url.'&page='.($page-1).'"> << </a>';
	}
	if($page<$totalPage){
		$next = "<a id ='next' href=' $url &page=".($page+1)."'> >> </a>";	
	}
	$page_link = '';
	$pg = 1;	
	if($totalPage>1){
		if($page>2) $page_link.='...';	
		for ($i = 1;$i <= $totalPage;$i++){
			if(($i > ($page - 2)) && ($i < ($page + 2))){
				if($i==$page){
					$page_link .= "<a id='page_link' href='$url&page=$i'> <b>[ ".$i." ]</b> </a>";
				}else $page_link .= "<a id='page_link' href='$url&page=$i'>[ ".$i." ]</a>";
		    }
		    $pg++;
		}		
		if($page+2<=$totalPage) $page_link.='...';
	}
	return $prev.$page_link.$next;	
}
function paging_post($model,$sql='', $totalRows=0,$numRowPerPage = 1,$url=''){
	
	$totalPage = ceil($totalRows/$numRowPerPage);		
	$page = isset($_GET['page'])?intval($_GET['page']):1;		
	$start_page = ($page-1)*$numRowPerPage;
	$results = $this->controller->$model->query($sql.' LIMIT '.$start_page.','.$numRowPerPage);				
	$this->controller->set('results', $results);
	$this->controller->set('totalPage',$totalPage);
	$this->controller->set('page',$page);
	$prev='';
	$next='';
	$url = DOMAIN.'jobs/searchcv/';
	if($page>1) {
		$prev = '<a id="prev" href="'.$url.'&page='.($page-1).'"> << </a>';
	}
	if($page<$totalPage){
		$next = "<a id ='next' href=' $url &page=".($page+1)."'> >> </a>";
	}
	$page_link = '';
	for ($i = 1;$i <= $totalPage;$i++){
		if($i == $page){
			$page_link .= "<a id='page_link' href='$url&page=$i'> <b>[ $i ]</b> </a>";
		}else $page_link .= "<a id='page_link' href='$url&page=$i'> [ $i ] </a>"; 
		
	}
	return $prev.$page_link.$next;	
}
//Ham khoi tao cookie
function set_cookie($name, $value = "", $remember = 1){
	
	if ($remember == 1)
	{
		$expires = time() + 60*60*24*COOKIE_TIME_OUT;
	}
	setcookie($name, $value, $expires, "/", "");
}

//Ham goi cookie
function get_cookie($name)
{
	if (isset($_COOKIE[$name]))
	{
		return urldecode($_COOKIE[$name]);
	}
	else
	{
		return FALSE;
	}
}

//Ham kiem tra cookie Nguoi tim viec,da ton tai hay chua,neu ok thi dang nhap luon
function check_cookie_jobseeker(){
	
	$cookie = array();
	$cookie['member_id_jobseeker'] = intval($this->get_cookie('member_id_jobseeker'));
	$cookie['pass_hash_jobseeker'] = $this->get_cookie('pass_hash_jobseeker');
	//==================================================
	// Kiem tra cookie co ton tai ko ???
	//==================================================
	if ($cookie['member_id_jobseeker'] != "" and $cookie['pass_hash_jobseeker'] != "")
	{
		$checkcookie = $this->controller->Jobseeker->findById($cookie['member_id_jobseeker']);
		
		if ($checkcookie['Jobseeker']["password"] == md5($cookie['pass_hash_jobseeker']))
		{
			$this->Session->write('email',$checkcookie['Jobseeker']['email']);
			$this->Session->write('id',$checkcookie['Jobseeker']['id']);
			$this->Session->write('password',$cookie['pass_hash_jobseeker']);
		}
	}
}

//Ham kiem tra cookie Nha tuyen dung,da ton tai hay chua?!? neu ok thi dang nhap luon
function check_cookie_company(){
	
	$cookie = array();
	$cookie['member_id_company'] = intval($this->get_cookie('member_id_company'));
	$cookie['pass_hash_company'] = $this->get_cookie('pass_hash_company');
	//==================================================
	// Kiem tra cookie co ton tai ko ???
	//==================================================
	if ($cookie['member_id_company'] != "" and $cookie['pass_hash_company'] != "")
	{
		$checkcookie = $this->controller->Jobseeker->findById($cookie['member_id_company']);
		
		if ($checkcookie['Jobseeker']["password"] == md5($cookie['pass_hash_company']))
		{
			$this->Session->write('email_company',$checkcookie['Jobseeker']['email']);
			$this->Session->write('id_company',$checkcookie['Jobseeker']['id']);
			$this->Session->write('password_company',$cookie['pass_hash_company']);
		}
	}
}
function curPageURL() {
	
	 $pageURL = 'http';
	 //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	 
}
function RandomStr($Length)
        {
            $Chars = array("a","A","b","B","c","C","d","D","e","E","f","F","g",

                        "G","h","H","i","I","j","J","k",

                        "K","l","L","m","M","n","N","o","O","p","P","q","Q",

                        "r","R","s","S","t","T","u","U","v",

                        "V","w","W","x","X","y","Y","z","Z","1","2","3","4",

                        "5","6","7","8","9");

            $RandCode = "";

            for ($i=0; $i<$Length; $i++) {

                $RandCode .= $Chars[rand(0, count($Chars)-1)];

            }

            return $RandCode;

        }
//Ham luu hoat dong cua user dang nhap va khach
function user_log(){	
	$access_ip = $_SERVER["REMOTE_ADDR"];
	$access_page = $this->curPageURL();	
	$current_date = date('Y-m-d H:i:s');	
	if($this->Session->read('id')and !$this->Session->read('id_company')){
		$user_type = 1; // user is only jobseeker
		$user_id = $this->Session->read('id');
	}elseif (!$this->Session->read('id') and $this->Session->read('id_company')){
		$user_type = 2; // user is only company
		$user_id = $this->Session->read('id_company');		
	}elseif ($this->Session->read('id') and $this->Session->read('id_company')){
		$user_type = 3; // user is both company , jobseeker
		$user_id = $this->Session->read('id').'-'.$this->Session->read('id_company');
	}else {		
		$user_type = 0; // visitor		
		if(!$this->Cookie->read('user_id')){
			$user_id='visitor_'.$this->RandomStr(10);			
			$this->Cookie->write('user_id',$user_id);
		}else{
			$user_id = $this->Cookie->read('user_id');				
		}	
	}
	$form_data = array(
		'UserLog' => array(
			'user_id' => $user_id, 
			'access_ip' => $access_ip, 
			'access_page' => $access_page, 
			'user_type' => $user_type,
			'access_date' => $current_date			
		)
	);	
	$this->controller->UserLog->save($form_data);

}
function check_permission(){
	if($this->Session->check('adminId')){
		$user_admin_id = $this->Session->read('adminId');
	}

}
/*
function checkProfileJobseeker(){
	$id_jobseeker = $this->Session->read('id');
	$checkprofile = $this->controller->JobseekerDetail->findByUserId($id_jobseeker);
	if($checkprofile['JobseekerDetail']['created'] == $checkprofile['JobseekerDetail']['modified']){
		echo "<script>alert('Bạn cần cung cấp đầy đủ thông tin cá nhân để sử dụng được chức năng này!');</script>";
		echo "<script>location.href='".DOMAIN."jobseeker/profile'</script>";
	}
}
function checkProfileCompany(){
	$id_company = $this->Session->read('id_company');
	$checkprofile = $this->controller->CompanyDetail->findByUserId($id_company);
	if($checkprofile['CompanyDetail']['created'] == $checkprofile['CompanyDetail']['modified']){
		echo "<script>alert('Bạn cần cung cấp đầy đủ thông tin cá nhân để sử dụng được chức năng này!');</script>";
		echo "<script>location.href='".DOMAIN."company/profile'</script>";
	}
}*/ 
function curPageName() {
	
 	return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
 
}

}
?>