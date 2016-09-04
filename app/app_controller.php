<?php
    class AppController extends Controller {
    	var $helpers = array('Html','Form','Text','Javascript','Ajax','TvFck','Session','Layout','Js','Time','Ajax','Javascript');
		
		var $components = array('Common','Session','P28n');	
        
			function beforeFilter() {
				if (strpos($this->action, 'admin_') !== false) {
					
					if($this->Session->check('auth') == true) {
						$this->layout = 'admin';
					}else {
						$this->layout = 'login';
					}
				}			
				}
			function setLanguage($locale) {
				$this->locale = $locale;
			}
	//check login

//    public function beforeRender() {
//        if ($this->name == 'CakeError') {
//            $this->layout = 'error';
//        }
//   		 }
    }
    
    ?>
