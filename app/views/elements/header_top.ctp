<div id="header_top">
	<div id="banner_top">
		<img src="<?php echo DOMAIN;?>/upload/images/banner.jpg" alt="Mobile Shop" height="300" width="1000">
	</div><!-- end: banner_top -->
	<div id="clear"></div>
	<div id="menu_nav">
		<div id="nav_content_left">
			<ul class="ul_navigation">
				<li><span><a href="<?php echo DOMAIN;?>/" <?php if($this->params['controller'] == 'home') { ?> class="active" <?php } ?>>TRANG CHỦ</a></span></li>
				<li><span><a href="<?php echo DOMAIN;?>/dien-thoai.html" <?php if($this->params['controller'] == 'products' && $this->params['action']=='listC1') { ?> class="active" <?php } ?>>ĐIỆN THOẠI</a></span></li>
				<li><span><a href="<?php echo DOMAIN;?>/phu-kien.html" <?php if($this->params['controller'] == 'products' && $this->params['action']=='listC2') { ?> class="active" <?php } ?>>PHỤ KIỆN</a></span></li>
				<li><span><a href="<?php echo DOMAIN;?>/lien-he.html" <?php if($this->params['controller'] == 'map') { ?> class="active" <?php } ?>>LIÊN HỆ</a></span></li>
			</ul>
		</div><!-- end: nav_content_left -->
		<!--------------------------------->
		<div id="nav_content_right">
			<div>
				<form action="<?php echo DOMAIN;?>/products/search" method="post" name="frm_search">
					<input type="text" id="text_input" name="txt_name"/>
					<input type="submit" id="search" value=""/>
				</form>
			</div>
		</div><!-- end: nav_content_right -->
	</div><!-- end: menu_nav -->
	<div id="clear"></div>
</div><!-- end: #header_top -->