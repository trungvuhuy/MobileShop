<script src="<?php echo DOMAIN;?>/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="<?php echo DOMAIN;?>/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />


<div id="primary">
	<div id="primary_top">
		<div class="primary_title">
			<div class="title_top_left">
			</div>
			<div class="title_top_content">
				<h1>Sản phẩm nổi bật</h1>
			</div>
			<div class="title_top_right">

			</div>
		</div>
		<!-- end: title -->
		<div class="primary_content">
				<?php $listProductprominent = $this->requestAction('/comment/listProductprominent');
				foreach($listProductprominent as $list1) { ?>
			<div class="product_list">
				<div class="pro_title">
					<h2>
						<a href="<?php echo DOMAIN."/chi-tiet-san-pham/".$list1['Product']['id']."/".$list1['Product']['alias']?>.html" title="<?php echo $list1['Product']['name'];?>" class="text_01">
							<?php
								$str = $list1['Product']['name']; //Tạo chuỗi
								$str = strip_tags($str); //Lược bỏ các tags HTML
								if(strlen($str)>80) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
								$strCut = substr($str, 0, 80); //Cắt 100 kí tự đầu
								$str = substr($strCut, 0, strrpos($strCut, ' ')).'...'; //Tránh trường hợp cắt dang dở như "nội d..."
								}
								echo $str;

							?>
						</a>
					</h2>
				</div></br>
				<div class="pro_img">
					<div align="center" class="pro_img_content">
					<table height="159">
					<tr>
						<td align="center">
							<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $list1['Product']['id']?>/<?php echo $list1['Product']['alias'].'.html';?>"><img src="<?php echo DOMAIN;?>/<?php echo $list1['Product']['images'] ?>"/></a>
						</td>
					</tr>
					</table>
					</div>
				</div>
				</br>
				<div class="pro_price">
					<p>Giá bán: <?php echo number_format($list1['Product']['price'],0,'','.');?> VNĐ <?php if(!empty($list1['Product']['sale'])){ echo '&nbsp;&nbsp;/&nbsp;&nbsp;'.$list1['Product']['sale']; } ?></p>
				</div></br>
				<div class="pro_addcart">
					<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $list1['Product']['id']?>/<?php echo $list1['Product']['alias'].'.html';?>" class="addcart">Chi tiết</a><a href="<?php echo DOMAIN;?>/products/addtocart/<?php echo $list1['Product']['id']; ?>" class="addcart">Mua hàng</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>


<div id="primary">
	<div id="primary_top">
		<div class="primary_title">
			<div class="title_top_left">
			</div>
			<div class="title_top_content">
				<h1>Sản phẩm khuyến mại</h1>
			</div>
			<div class="title_top_right">

			</div>
		</div>
		<!-- end: title -->
		<div class="primary_content">
				<?php $listProductsale = $this->requestAction('/comment/listProductsale');
				foreach($listProductsale as $list1) { ?>
			<div class="product_list">
				<div class="pro_title">
					<h2>
						<a href="<?php echo DOMAIN."/chi-tiet-san-pham/".$list1['Product']['id']."/".$list1['Product']['alias']?>.html" title="<?php echo $list1['Product']['name'];?>" class="text_01">
							<?php
								$str = $list1['Product']['name']; //Tạo chuỗi
								$str = strip_tags($str); //Lược bỏ các tags HTML
								if(strlen($str)>80) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
								$strCut = substr($str, 0, 80); //Cắt 100 kí tự đầu
								$str = substr($strCut, 0, strrpos($strCut, ' ')).'...'; //Tránh trường hợp cắt dang dở như "nội d..."
								}
								echo $str;

							?>
						</a>
					</h2>
				</div></br>
				<div class="pro_img">
					<div align="center" class="pro_img_content">
					<table height="159">
					<tr>
						<td align="center">
							<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $list1['Product']['id']?>/<?php echo $list1['Product']['alias'].'.html';?>"><img src="<?php echo DOMAIN;?>/<?php echo $list1['Product']['images'] ?>"/></a>
						</td>
					</tr>
					</table>
					</div>
				</div>
				</br>
				<div class="pro_price">
					<p>Giá bán: <?php echo number_format($list1['Product']['price'],0,'','.');?> VNĐ <?php if(!empty($list1['Product']['sale'])){ echo '&nbsp;&nbsp;/&nbsp;&nbsp;'.$list1['Product']['sale']; } ?></p>
				</div></br>
				<div class="pro_addcart">
					<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $list1['Product']['id']?>/<?php echo $list1['Product']['alias'].'.html';?>" class="addcart">Chi tiết</a><a href="<?php echo DOMAIN;?>/products/addtocart/<?php echo $list1['Product']['id']; ?>" class="addcart">Mua hàng</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>






<div id="primary">
	<div id="primary_top">
		<div class="primary_title">
			<div class="title_top_left">
			</div>
			<div class="title_top_content">
				<h1>Sản phẩm mới</h1>
			</div>
			<div class="title_top_right">

			</div>
		</div>
		<!-- end: title -->
		<div class="primary_content">
				<?php $listProductnew = $this->requestAction('/comment/listProductnew');
				foreach($listProductnew as $list1) { ?>
			<div class="product_list">
				<div class="pro_title">
					<h2>
						<a href="<?php echo DOMAIN."/chi-tiet-san-pham/".$list1['Product']['id']."/".$list1['Product']['alias']?>.html" title="<?php echo $list1['Product']['name'];?>" class="text_01">
							<?php
								$str = $list1['Product']['name']; //Tạo chuỗi
								$str = strip_tags($str); //Lược bỏ các tags HTML
								if(strlen($str)>80) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
								$strCut = substr($str, 0, 80); //Cắt 100 kí tự đầu
								$str = substr($strCut, 0, strrpos($strCut, ' ')).'...'; //Tránh trường hợp cắt dang dở như "nội d..."
								}
								echo $str;

							?>
						</a>
					</h2>
				</div></br>
				<div class="pro_img">
					<div align="center" class="pro_img_content">
					<table height="159">
					<tr>
						<td align="center">
							<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $list1['Product']['id']?>/<?php echo $list1['Product']['alias'].'.html';?>"><img src="<?php echo DOMAIN;?>/<?php echo $list1['Product']['images'] ?>"/></a>
						</td>
					</tr>
					</table>
					</div>
				</div>
				</br>
				<div class="pro_price">
					<p>Giá bán: <?php echo number_format($list1['Product']['price'],0,'','.');?> VNĐ <?php if(!empty($list1['Product']['sale'])){ echo '&nbsp;&nbsp;/&nbsp;&nbsp;'.$list1['Product']['sale']; } ?></p>
				</div></br>
				<div class="pro_addcart">
					<a href="<?php echo DOMAIN;?>/chi-tiet-san-pham/<?php echo $list1['Product']['id']?>/<?php echo $list1['Product']['alias'].'.html';?>" class="addcart">Chi tiết</a><a href="<?php echo DOMAIN;?>/products/addtocart/<?php echo $list1['Product']['id']; ?>" class="addcart">Mua hàng</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>


