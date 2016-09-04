<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo DOMAIN;?>/css/global.css">
<script src="<?php echo DOMAIN;?>/js/slides.min.jquery.js"></script>
<style>
	input.submit{
		padding: 5px 10px;
		background: #0b8506;
		color: white;
	}
	
	input.submit:hover{
		color:#fe4202;
	}
</style>
<script>
	$(function(){
		$('#products').slides({
			preload: true,
			preloadImage: 'img/loading.gif',
			effect: 'slide, fade',
			crossfade: true,
			slideSpeed: 350,
			fadeSpeed: 500,
			generateNextPrev: true,
			generatePagination: false
		});
	});
</script>
<div id="primary">
	<div id="primary_top">
		<div class="primary_title">
			<div class="title_top_left">
				
			</div>
			<div class="title_top_content">
				<h1><?php echo $this->data['Product']['name'];?></h1>
			</div>
			<div class="title_top_right">
				
			</div>
		</div>
		<!-- end: title -->
		<div class="primary_content">
			<div class="topPro">
				<div class="list_Pro_topleft">
					<div id="container">
						<div id="products_example">
							<div id="products">
								<div class="slides_container">
									<?php if(!empty($this->data['Product']['images'])){ ?>
									<a href="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images'];?>" rel="lightbox" ><img style=" min-height:245px;" src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images'];?>" alt="<?php echo $this->data['Product']['name'];?>"></a>	
									<?php } ?>
									<?php if(!empty($this->data['Product']['images1'])){ ?>
									<a href="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images1'];?>" rel="lightbox" ><img style=" min-height:245px;" src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images1'];?>" alt="<?php echo $this->data['Product']['name'];?>"></a>	
									<?php } ?>
									<?php if(!empty($this->data['Product']['images2'])){ ?>
									<a href="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images2'];?>" rel="lightbox" ><img style="min-height:245px;" src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images2'];?>" alt="<?php echo $this->data['Product']['name'];?>"></a>	
									<?php } ?>
									<?php if(!empty($this->data['Product']['images3'])){ ?>
									<a href="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images3'];?>" rel="lightbox" ><img style="min-height:245px;" src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images3'];?>" alt="<?php echo $this->data['Product']['name'];?>"></a>	
									<?php } ?>
									<?php if(!empty($this->data['Product']['images4'])){ ?>
									<a href="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images4'];?>" rel="lightbox" ><img style="min-height:245px;" src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images4'];?>" alt="<?php echo $this->data['Product']['name'];?>"></a>	
									<?php } ?>
								</div>
								<div id="product_list">
									<ul class="pagination">
										<?php if(!empty($this->data['Product']['images'])){ ?>
										<li><a><img src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images'];?>" style="max-width:55px; max-height: 45px;" alt="<?php echo $this->data['Product']['name'];?>"></a></li>
										<?php } ?>
										<?php if(!empty($this->data['Product']['images1'])){ ?>
										<li><a><img src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images1'];?>" style="max-width:55px; max-height: 45px;" alt="<?php echo $this->data['Product']['name'];?>"></a></li>
										<?php } ?>
										<?php if(!empty($this->data['Product']['images2'])){ ?>
										<li><a><img src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images2'];?>" style="max-width:55px; max-height: 45px;" alt="<?php echo $this->data['Product']['name'];?>"></a></li>
										<?php } ?>
										<?php if(!empty($this->data['Product']['images3'])){ ?>
										<li><a><img src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images3'];?>" style="max-width:55px; max-height: 45px;" alt="<?php echo $this->data['Product']['name'];?>"></a></li>
										<?php } ?>
										<?php if(!empty($this->data['Product']['images4'])){ ?>
										<li><a><img src="<?php echo DOMAIN;?>/<?php echo $this->data['Product']['images4'];?>" style="max-width:55px; max-height: 45px;" alt="<?php echo $this->data['Product']['name'];?>"></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="list_Pro_topright">
				<form method="post" action="<?php echo DOMAIN;?>/products/addtocart2" name="form_admin">
					<input type="hidden" name="txt_id" value="<?php echo $this->data['Product']['id'];?>"/>
					<h1><?php echo $this->data['Product']['name'];?></h1>
					<p><span>Giá bán:</span> <?php echo number_format($this->data['Product']['price'],0,'','.');?> <span>VNĐ</span></p>
					</br>
					<p><span>Số lượng:</span> <input style="width: 50px; padding: 5px;" type="text" name="txt_qty"/></p>
					</br>
					<input class="submit" type="submit" name="submit" value=" Mua hàng "/>
				</form>
				</div>
			</div>
			<div class="cotentPro">
				<?php echo $this->data['Product']['content']; ?>
			</div>
		</div>
	</div>
</div><!-- end: primary -->
