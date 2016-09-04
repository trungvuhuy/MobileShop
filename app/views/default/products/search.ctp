<div id="primary">
	<div id="primary_top">
		<div class="primary_title">
			<div class="title_top_left">
				
			</div>
			<div class="title_top_content">
				<h1>Tìm kiếm</h1>
			</div>
			<div class="title_top_right">
			
			</div>
		</div>
		<!-- end: title -->
		<div class="primary_content">
		<?php if(empty($Pro_search)){ ?>
			<div >
				<p>Không tìm thấy dữ liệu. Bạn hãy thử lại với từ khóa khác!</p>
			</div>
		<?php } else { ?>
			<div class="lisrSearch">
				Tổng số <?php echo count($Pro_search);?> sản phẩm được tìm thấy.
			</div></br>
		<?php foreach($Pro_search as $Pro_search){ ?>
			<div class="product_list">
				<div class="pro_title">
					<h2><?php echo $this->Html->link($Pro_search['Product']['name'], array('controller' => 'products','action'=>'views',$Pro_search['Product']['id'],$Pro_search['Product']['alias'].'.html')); ?></h2>
				</div></br>
				<div class="pro_img">
					<div class="pro_img_content">
						<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $Pro_search['Product']['id']?>/<?php echo $Pro_search['Product']['alias'].'.html';?>"><img src="<?php echo DOMAIN;?>/<?php echo $Pro_search['Product']['images'];?>"/></a>
					</div>
				</div>
				</br>
				
				<div class="pro_price">
					<p><?php echo number_format($Pro_search['Product']['price'],0,'','.');?> VNĐ</p>
				</div></br>
				<div class="pro_addcart">
					<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $Pro_search['Product']['id']?>/<?php echo $Pro_search['Product']['alias'].'.html';?>" class="addcart">Chi tiết</a><a href="<?php echo DOMAIN;?>/products/addtocart/<?php echo $Pro_search['Product']['id']; ?>" class="addcart">Mua hàng</a>
				</div>
			</div>
		<?php } } ?>	
		</div>
	</div>
</div><!-- end: primary -->
