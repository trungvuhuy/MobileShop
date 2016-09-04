<link rel="stylesheet" id="smthemenewprint-css"  href="<?php echo DOMAIN;?>/css/style.css" type="text/css" />
<script type="text/javascript" src="<?php echo DOMAIN;?>/js/jquery.dropmenu.js"></script> 
<script>
jQuery(document).ready(function($){
	$(".dropmenu").dropmenu({
			openAnimation: "size",
			closeAnimation: "slide",
			openSpeed: 300,
			closeSpeed: 200,
			closeDelay: 400,
			zindex: 100,
			openMenuClass: 'open',
			autoAddArrowElements: true
		});
});
</script>
<div id="sidebar">
	<div class="sidebar_primary">
		<div class="sidebar_top">
			<div class="sidebar_top_left">
			
			</div>
			<div class="sidebar_top_content">
				<h1>Giỏ hàng của bạn</h1>
			</div>
			<div class="sidebar_top_right">
			
			</div>
		</div>
		<!-- end: title -->
		<div class="sidebar_content">
			<p><a style="padding: 15px 5px 15px 65px; color:black; display:block;background: url(../images/iconcart.jpg) top left no-repeat;" href="<?php echo DOMAIN;?>/products/viewcart">Tổng số (<strong style="color:red;"><?php if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']);} else  { echo 0;}?></strong>) sản phẩm</a></p>
		</div>
		<div class="footer_left" >
		
		</div>
		<div id="clear"></div>
	</div>
	<div class="sidebar_primary">
		<div class="sidebar_top">
			<div class="sidebar_top_left">
			
			</div>
			<div class="sidebar_top_content">
				<h1>THƯƠNG HIỆU</h1>
			</div>
			<div class="sidebar_top_right">
			
			</div>
		</div>
		<!-- end: title -->
		<div class="sidebar_content">
			<ul class="dropmenu css-only">
				<?php $brands = $this->requestAction('/brands/index_home') ;?>
                <?php foreach( $brands as $key=>$brand){$i = $key ?>
				<li>
				<a href="<?php echo DOMAIN;?>/thuong-hieu/<?php echo $brand['Brand']['id'];?>/<?php echo $brand['Brand']['code'].'.html';?>"><?php echo $brand['Brand']['name'];?></a>

				</li>
				<?php } ?>
			</ul>	
			<div id="clear"></div>
		</div>
		<div class="footer_left" >
		
		</div>
		<div id="clear"></div>
	</div>

	


	<div class="sidebar_primary">
		<!-- end: title -->


		<div id="clear"></div>
	</div>
	
</div><!-- end: #sidebar_content -->