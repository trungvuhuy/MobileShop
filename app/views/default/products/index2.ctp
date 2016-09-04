<div id="primary">
	<div id="primary_top">
		<div class="primary_title">
			<div class="title_top_left">
				
			</div>
			<div class="title_top_content">
				<h1><?php echo $this->data['Brand']['name'];?></h1>
			</div>
			<div class="title_top_right">
			
			</div>
		</div>
		<!-- end: title -->
		<div class="primary_content">
		<?php if(empty($Product)){ ?>
			<div >
				<p>Sản phẩm không tồn tại.</p>
			</div>
		<?php } else { ?>
		<?php foreach($Product as $Product){ ?>
			<div class="product_list">
				<div class="pro_title">
					<h2><?php echo $this->Html->link($Product['Product']['name'], array('controller' => 'products','action'=>'views',$Product['Product']['id'],$Product['Product']['alias'].'.html')); ?></h2>
				</div></br>
				<div class="pro_img">
					<div class="pro_img_content">
						<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $Product['Product']['id']?>/<?php echo $Product['Product']['alias'].'.html';?>"><img src="<?php echo DOMAIN;?>/<?php echo $Product['Product']['images'];?>"/></a>
					</div>
				</div>
				</br>
				<div class="pro_price">
					<p>Giá bán: <?php echo number_format($Product['Product']['price'],0,'','.');?> VNĐ</p>
				</div></br>
				<div class="pro_addcart">
					<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $Product['Product']['id']?>/<?php echo $Product['Product']['alias'].'.html';?>" class="addcart">Chi tiết</a><a href="<?php echo DOMAIN;?>/products/addtocart/<?php echo $Product['Product']['id']; ?>" class="addcart">Mua hàng</a>
				</div>
			</div>
		<?php } } ?>
		<div id="clear"></div>
		<del class="container">
			<div class="pagination">
				<div class="limit">
                        	 <?php
								$paginator->options(array('url' => $this->passedArgs));
								echo $paginator->first('first');echo "&nbsp;&nbsp;&nbsp;";
								echo $paginator->prev('Back', null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
								echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
								echo $paginator->next('Next' , null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
								echo $paginator->last('last');
								echo "</span>";
					     	?>
                        
				</div>
				<div class="limit"></div>
			</div>
		</del>
		</div>
		
	</div>
</div><!-- end: primary -->
