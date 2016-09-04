<?php
class CommonComponent extends Object{

//called before Controller::beforeFilter()
function initialize(&$controller, $settings = array()) {
// saving the controller reference for later use
$this->controller =& $controller;
}

//called after Controller::beforeFilter()
function startup(&$controller) {
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
// Ham chuyen doi tieng viet sang khong dau
function unicode_convert($str){
	if(!$str) return false;
	$unicode = array(
	'a'=>array('á','à','ả','ã','ạ','ă','ắ','ặ', 'ằ','ẳ','ẵ','â','ấ','ầ','ẩ','ẫ','� �'),
	'A'=>array('Á','À','Ả','Ã','Ạ','Ă','Ắ','Ặ', 'Ằ','Ẳ','Ẵ','Â','Ấ','Ầ','Ẩ','Ẫ','� �'),
	'd'=>array('đ'),
	'D'=>array('Đ'),
	'e'=>array('é','è','ẻ','ẽ','ẹ','ê','ế','ề' ,'ể','ễ','ệ'),
	'E'=>array('É','È','Ẻ','Ẽ','Ẹ','Ê','Ế','Ề' ,'Ể','Ễ','Ệ'),
	'i'=>array('í','ì','ỉ','ĩ','ị'),
	'I'=>array('Í','Ì','Ỉ','Ĩ','Ị'),
	'o'=>array('ó','ò','ỏ','õ','ọ','ô','ố','ồ', 'ổ','ỗ','ộ','ơ','ớ','ờ','ở','ỡ','� �'),
	'0'=>array('Ó','Ò','Ỏ','Õ','Ọ','Ô','Ố','Ồ', 'Ổ','Ỗ','Ộ','Ơ','Ớ','Ờ','Ở','Ỡ','� �'),
	'u'=>array('ú','ù','ủ','ũ','ụ','ư','ứ','ừ', 'ử','ữ','ự'),
	'U'=>array('Ú','Ù','Ủ','Ũ','Ụ','Ư','Ứ','Ừ', 'Ử','Ữ','Ự'),
	'y'=>array('ý','ỳ','ỷ','ỹ','ỵ'),
	'Y'=>array('Ý','Ỳ','Ỷ','Ỹ','Ỵ'),
	);
	
	foreach($unicode as $nonUnicode=>$uni){
	foreach($uni as $value)
	$str = str_replace($value,$nonUnicode,$str);
	}
	return $str;
}

//Ham lay url hien tai
function curPageURL() {
		$pageURL = 'http';
		if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
}


// Hàm căt chuỗi tiêng việt
function cuttext($value, $length){
    if($value!=''){
    if(is_array($value)) list($string, $match_to) = $value;
    else { $string = $value; $match_to = $value{0}; }

    $match_start = stristr($string, $match_to);
    $match_compute = strlen($string) - strlen($match_start);

    if (strlen($string) > $length)
    {
        if ($match_compute < ($length - strlen($match_to)))
        {
            $pre_string = substr($string, 0, $length);
            $pos_end = strrpos($pre_string, " ");
            if($pos_end === false) $string = $pre_string."";
            else $string = substr($pre_string, 0, $pos_end)."";
        }
        else if ($match_compute > (strlen($string) - ($length - strlen($match_to))))
        {
            $pre_string = substr($string, (strlen($string) - ($length - strlen($match_to))));
            $pos_start = strpos($pre_string, " ");
            $string = "".substr($pre_string, $pos_start);
            if($pos_start === false) $string = "".$pre_string;
            else $string = "".substr($pre_string, $pos_start);
        }
        else
        {
            $pre_string = substr($string, ($match_compute - round(($length / 3))), $length);
            $pos_start = strpos($pre_string, " "); $pos_end = strrpos($pre_string, " ");
            $string = "".substr($pre_string, $pos_start, $pos_end)."";
            if($pos_start === false && $pos_end === false) $string = "".$pre_string."";
            else $string = "".substr($pre_string, $pos_start, $pos_end)."";
        }

        $match_start = stristr($string, $match_to);
        $match_compute = strlen($string) - strlen($match_start);
    }

    return $string;
    }else{
        return $string ='';
    }
}


}
?>
