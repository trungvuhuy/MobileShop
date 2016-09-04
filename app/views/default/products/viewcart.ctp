<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
	$(function(){
		$("#submit").click(function(){
			window.location = '<?php echo DOMAIN ?>/';
		});
	});
</script>
<?php $total=0 ?>
<div id="primary">
	<div id="primary_top">
		<div class="primary_title">
			<div class="title_top_left">
				
			</div>
			<div class="title_top_content">
				<h1>Giỏ hàng của bạn</h1>
			</div>
			<div class="title_top_right">
			
			</div>
		</div>
		<!-- end: title -->
		<?php if(isset($list) && $list != 0){ ?>
		<div class="primary_content">
			<form action="<?php echo DOMAIN;?>/products/updateCart" method="post">
				<table width="738" border="1" cellspacing="0" cellpadding="3" style="border:#CCC 1px solid; border-collapse:collapse;">
					<tr>
						<td width="55" align="center">STT</td>
						<td width="238">Tên sản phẩm</td>
						<td width="100">Đơn giá</td>
						<td width="133">Số lượng</td>
						<td width="145">Thành tiền</td>
						<td width="45">Xóa</td>
					</tr>
					<?php
						$stringId=",";
						$stringCount=",";
						foreach($list as $key=>$list) {$i=$key+1; 
							$stringId.=$list['products']['id'].",";
							$stringCount.=$this->Session->read("cart.'".$list['products']['id']."'").",";
							$total+=$this->Session->read("cart.'".$list['products']['id']."'")*$list['products']['price'];
					?>  
					<tr>
						<td align="center"><?php echo $i;?></td>
						<td><?php echo $list['products']['name'];?></td>
						<td><?php echo number_format($list['products']['price'],0,'','.');?> VNĐ</td>
						<td>
							<input type='text' name='qty[<?php echo $list['products']['id']; ?>]' size='5' value='<?php echo $this->Session->read("cart.'".$list['products']['id']."'");?>'>&nbsp;&nbsp;<input type='submit' name='submit' value='Cập nhật'>
							<?php //echo $this->Session->read("cart.'".$list['products']['id']."'");?>
						</td>
						<td><?php echo number_format($list['products']['price']*$this->Session->read("cart.'".$list['products']['id']."'"),0,'','.');?> VNĐ</td>
						<td width="45"><a href="<?php echo DOMAIN;?>/products/delcart/<?php echo $list['products']['id'];?>">Xóa</a> </td>
					</tr>
				<?php } ?>  
					<tr>
						<td align="right" colspan = "4" ><b>Tổng giá trị đơn hàng:&nbsp; &nbsp; </b></td>
						<td colspan = "2" ><b color="red"><?php echo number_format($total,0,'','.');?> VNĐ</b></td>
					</tr>
				</table>
				
				</form>
				<a href="<?php echo DOMAIN;?>/products/delcart/0">Xóa toàn bộ sản phẩm</a> 
				<form action="<?php echo DOMAIN?>/products/finishs" method="post">
				 <p style="margin:5px 0px 10px 5px;"> <i> <h2 style="color:#ed134b;font-size:14px;"> 2.Vui lòng điền địa chỉ và thông tin nhận hàng:</h2></i></p>
						<p><strong style="padding:0px 10px;padding-left: 10px;display: block;float: left;width: 80px;text-align: left;">Họ tên: </strong><input type="text" name="data[Invoice][name]"/></p></br>
						<p><strong style="padding:0px 10px;padding-left: 10px;display: block;float: left;width: 80px;text-align: left;">Địa chỉ: </strong><input type="text" name="data[Invoice][address]"/></p></br>
						<p><strong style="padding:0px 10px;padding-left: 10px;display: block;float: left;width: 80px;text-align: left;">Điện thoại: </strong><input type="text" name="data[Invoice][mobile]"/></p></br>
						<p><strong style="padding:0px 10px;padding-left: 10px;display: block;float: left;width: 80px;text-align: left;">Email: </strong><input type="text" name="data[Invoice][email]"/></p></br>
						<strong style="padding-left: 10px;">Thông tin khác:</strong><textarea name="data[Invoice][note]" rows="8" cols="88" style="margin-left:10px; margin-bottom:20px;"></textarea>
					<input type="hidden" name="data[Invoice][id_product]" value="<?php echo $stringId;?>">
					<input type="hidden" name="data[Invoice][quantity_product]" value="<?php echo $stringCount;?>">
					<input style="float:left;" type="button" value=" Tiếp tục mua hàng "  id="submit"/ >&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input style="float:right;" type="submit" value="Thanh toán"  class="submit-submit-submit"/ >
			</form></br>
			<div style="text-align: left;">
				<span style="color: #ffcc00;">
					<span style="font-size: x-large;">
						<span style="color: #800080;">
							<div style="text-align: left;">
							<i><span style="font-size: 16px;"><span style="color: #0000ff;">Quý khách ở xa vui lòng thanh toán qua một trong các tài khoản sau:</span></span></i></div>
							<div style="text-align: left;">
								<i><span style="font-size: 14px;">
									<span style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1. Nguyễn Thị Hương: số TK: 1240 2011 88213 tại chi nhánh Agribank Hoàng Mai, Hà Nội</span>
								</span></i>
							</div>
							<div style="text-align: left;">
								<i><span style="font-size: 14px;">
									<span style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2. Nguyễn Thị Hương: Số TK: 9704 3206 1539 0178 tại chi nhánh VPbank Đồng Tâm, Hai Bà Trưng, Hà Nội.</span>
								</span></i>
							</div>
							<br>
						</span>
					</span>
				</span>
			</div>
		</div>
		<?php } else { ?>
		<div class="primary_content" >
			<p>Không có sản phẩm nào trong giỏ hàng của bạn.</p>
		</div>
		<?php } ?>
	</div>
</div><!-- end: primary -->
