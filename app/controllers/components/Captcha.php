<?php
App::import('Vendor', 'phpcaptcha/php-captcha');

class CaptchaComponent extends Object 
{ 
    var $controller; 
  
    //called before Controller::beforeFilter()
    function initialize(&$controller, $settings = array()) {
        // saving the controller reference for later use
        $this->controller =& $controller;
    }
    
    //called after Controller::beforeRender()
    function beforeRender(&$controller) {
    }

    //called after Controller::render()
    function shutdown(&$controller) {
    }

    //called before Controller::redirect()
    function beforeRedirect(&$controller, $url, $status=null, $exit=true) {
    }

    function redirectSomewhere($value) {
        // utilizing a controller method
    }
    
    function startup( &$controller ) { 
        $this->controller = &$controller; 
    } 

    function image(){ 
         
        $imagesPath = realpath(VENDORS . 'phpcaptcha').'/fonts/'; 
         
        $aFonts = array( 
            $imagesPath.'VeraBd.ttf', 
            $imagesPath.'VeraIt.ttf', 
            $imagesPath.'Vera.ttf' 
        ); 
         
        $oVisualCaptcha = new PhpCaptcha($aFonts, 500, 60); 
        $oVisualCaptcha->UseColour(true); 
        //$oVisualCaptcha->SetOwnerText('Source: '.FULL_BASE_URL); 
        $oVisualCaptcha->SetNumChars(6); 
        $oVisualCaptcha->Create(); 
    } 
     
    function audio(){ 
        $oAudioCaptcha = new AudioPhpCaptcha('/usr/bin/flite', '/tmp/'); 
        $oAudioCaptcha->Create(); 
    } 
     
    function check($userCode, $caseInsensitive = true){ 
        if ($caseInsensitive) { 
            $userCode = strtoupper($userCode); 
        } 
         
        if (!empty($_SESSION[CAPTCHA_SESSION_ID]) && $userCode == $_SESSION[CAPTCHA_SESSION_ID]) { 
            // clear to prevent re-use 
            unset($_SESSION[CAPTCHA_SESSION_ID]); 
             
            return true; 
        } 
        else return false; 
         
    } 
}