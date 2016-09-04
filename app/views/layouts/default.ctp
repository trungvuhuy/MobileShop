<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="<?php echo DOMAIN;?>/css/base.css" type="text/css" />
<title>Mobile Shop</title>
</head>

<body>
<div id="content_wapper">
	<div id="wapper">
		<?php echo $this->element('header_top');?>
		<!---------------------------->
		<div id="content">
			<?php echo $this->element('sidebar');?>
			<div id="content_primary">
				<?php echo $content_for_layout;?>
			</div><!-- end: #primary -->
			<div id="clear"></div>
		</div><!-- end: #content -->
		<div id="clear"></div>
	</div>
	<div id="footer_wapper">
		
	</div><!-- end: footer_wapper -->
	<!---------------------------->
	<?php echo $this->element('footer');?>
</div><!-- end: #content_wapper -->
</body>
</html>
