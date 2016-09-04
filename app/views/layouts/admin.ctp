<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Hệ thống CMS </title>
<?php echo  $this->Html->css(array('system','login','rounded','general','icon','menu','component','PopupPanel','dhtmlgoodies_calendar','validationEngine.jquery')); ?>
<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo DOMAIN?>/css/ie7.css" type="text/css" />
	<![endif]-->
	<!--[if lte IE 6]>
	<link rel="stylesheet" href="<?php echo DOMAIN?>/css/ie6.css" type="text/css" />
	<![endif]-->
<?php echo $javascript->link(array('jquery-1.4.2','jquery-validate','md5','utils','jquery-menu','joomla.javascript','script','jquery.validationEngine',)); ?>
<link rel="shortcut icon" href="<?php echo DOMAIN?>/img_web/icon.jpg" type="image/x-icon">
<style type="text/css">
		form#adminForm label.error{
			color: red;
			font-style: italic;
			font-size: 1.0em;
			font-weight: normal;
		}
		form#adminForm label.error { display: none;}
</style>


	<script type="text/javascript">
	/*<![CDATA[*/
		document.menu = null;
		document.addLoadEvent(function(){
			if(!$('#menu').hasClass('disabled')) {
				document.menu = $('#menu').menu();
			}
		});
	/*]]>*/
	</script>
    <!-- Dùng validate nhập số -->
    <script>
		function keypress(e){
		  var keypressed = null;
		 if (window.event)
		 {
		 keypressed = window.event.keyCode; //IE
		 }
		 else
		 { 
		 keypressed = e.which; //NON-IE, Standard
		 }
			//alert (keypressed);ds
		 if (keypressed < 48 || keypressed > 57)
		 { 
		 
		 if (keypressed == 8 || keypressed == 127 || keypressed ==46 )
		 {//Phím Delete và Phím Back
		 return;
		 }
		 if (keypressed == 45 || keypressed == 32)
		 {//Phím Delete và Phím Back
		 return true;
		 }
		 return false;
		 }
		 }

	</script>
    <!-- Dùng validete from-->
 	<script>
		  $(document).ready(function(){
			$("#adminForm").validationEngine();
		  });
	</script>
	  <script type="text/javascript">
		window.addEvent('domready', function(){ new Accordion($$('.panel h3.jpane-toggler'), $$('.panel div.jpane-slider'), {onActive: function(toggler, i) { toggler.addClass('jpane-toggler-down'); toggler.removeClass('jpane-toggler'); },onBackground: function(toggler, i) { toggler.addClass('jpane-toggler'); toggler.removeClass('jpane-toggler-down'); },duration: 300,opacity: false,alwaysHide: true}); });
  </script>
</head>
<body>
<?php echo $this->element('header_admin'); ?>
<?php echo $this->element('menu_admin'); ?>
<?php
if($this->Session->read('admin_name')=="administrator") 
{
	echo $content_for_layout;
}
else
{
 if((array_search($this->params['controller'],explode(',',' ,'.$this->Session->read('controller')))=='')) {
				echo "Bạn không có quyền truy cập vào khu vực này";
			}
			else {
				echo $content_for_layout;				
			}
}
?>	
<?php echo $this->element('footer_admin'); ?>

</body>
</html>
