<script language="javascript" type="text/javascript">
/*<![CDATA[*/
	$(function(){
		$("#lnkSave").click(function(){
			$('#adminForm').submit();
		});

		$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN?>/invoices/admin_index';
		});

	});
/*]]>*/
	function Checkvalue(ElementID){
		var checkBox = document.getElementById(ElementID);
		if(checkBox.checked==true)
			checkBox.value=1; 
		else checkBox.value=0; 
	}
	$("#n").click(function(){
			window.location = '<?php echo DOMAIN?>/news/admin_index';
		});
</script>
<style>
div.width-50 {
    margin-left: 200px;
    width: 70%;
}
</style>
<div id="content-box">
	<div class="border">
		<div class="padding">
			<div id="toolbar-box">
   			<div class="t"><div class="t"><div class="t"></div></div></div>
			<div class="m">
				<div class="toolbar" id="toolbar">
				<table class="toolbar">
				<tr>
					<!--<td class="button" id="toolbar-save">
					<a href="javascript:;//Cập nhật" id="lnkSave" class="toolbar">
						<span class="icon-32-save" title="Cập nhật"></span>
						Cập nhật
					</a>
					</td>-->
					<td class="button" id="toolbar-cancel">
					<a href="javascript:;//Đóng" id="lnkClose" class="toolbar">
						<span class="icon-32-cancel" title="Đóng"></span>
						Đóng
					</a>
					</td>
				</tr>
				</table>
				</div>
				<div class="header icon-48-langmanager">Chi tiết hóa đơn</div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
			</div>
			<div class="clr"></div>
			<div id="element-box">
				<div class="t"><div class="t"><div class="t"></div></div></div>
				<div class="m">
				<form action="index.php?progid=7&act=xuly" method="post" name="adminForm" enctype="multipart/form-data" id="adminForm" autocomplete="off">
					<div class="col width-50" style="margin-left:100px; width:85%;">
						<fieldset class="adminform">
						<legend>Thông tin chi tiết</legend>
						<table width="100%" border="0" cellspacing="3" cellpadding="3">
                      <tr>
                        <td colspan="2" align="center" class="bg_form_left"><strong>Chi tết hóa đơn</strong></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="bg_form_left">
						<table width="100%" border="1" cellspacing="0" cellpadding="3" style="border:#CCC 1px solid; border-collapse:collapse">
                        <tr height="30">
                            <td width="25%" class="headorder">THông tin giao hàng</td>
							<td width="50%" class="headorder"><strong>Thông tin hóa đơn</strong></td>                        
                            <td width="25%" class="headorder">Ghi chú </td>                            
                        </tr>
                     
                          <tr height="30">
                            <td class="itemorder" align="center">
								<div>Họ tên người nhận: <?php echo $this->data['Invoice']['name'] ; ?> </div>
								<div>Địa chỉ: <?php echo $this->data['Invoice']['address'] ; ?> </div>
								<div>Số điện thoại: <?php echo $this->data['Invoice']['mobile'] ; ?> </div>
							</td>                          
                            <td class="itemorder" style="line-height:20px"><strong> Hóa đơn có : </strong>							
								<div>
								
								<table width="100%" border="1" cellspacing="0" cellpadding="3" style="border:#CCC 1px solid; border-collapse:collapse">
									<tr height="30">
										<td width="5%" class="headorder">STT</td>
										<td width="50%" class="headorder">Tên sản phẩm</td>
										<td width="15%" class="headorder">Số lượng</td>                            
										<td width="15%" class="headorder">Đơn giá</td>                            
										<td width="15%" class="headorder">Thành tiền</td>                            
									</tr>
									<?php
										$mang = explode(",",$this->data['Invoice']['id_product']);
										$mang_sl = explode(",",$this->data['Invoice']['quantity_product']);
										$na = count($mang);$na--;
										$total=0;
										for($i=1;$i<$na;$i++){	
										$tg="/comment/viewProduct/$mang[$i]";
										$DtDealhot = $this->requestAction($tg);
										$money=$DtDealhot[0]['Product']['price']*$mang_sl[$i];
										$total=$total+$money;
									?>
									<tr height="30">
										<td class="headorder"><?php echo $i;?></td>
										<td  class="headorder"><?php echo $DtDealhot[0]['Product']['name'];?></td>
										<td  class="headorder"><?php echo $mang_sl[$i];?></td>                            
										<td   class="headorder"><?php echo number_format($DtDealhot[0]['Product']['price'])." vnđ";?></td>                            
										<td  class="headorder"><?php echo number_format($money)." vnđ";?></td>                            
									</tr>
									<?php } ?>
								</table>
									<p><strong>Tổng tiền: <?php echo number_format($total)." vnđ" ?></strong></p>	
								</div>
                            </td>
							<td><?php echo $this->data['Invoice']['note']?></td>
                          </tr>
                         
                        </table>

						
						</td>
                        </tr>
                      
                    </table>
						</fieldset>
					</div>
					<div class="clr"></div>
					<input type="hidden" name="hndId" id="hndId" value="" />
				</form>
				<div class="clr"></div>
				
						<form name="adminForm1" method="post" action="<?php echo DOMAIN?>/invoices/admin_updatestt">
							<br />
							<br />
							<div style="float:left;">Cập nhật trạng thái</div> : 
							<input type="hidden" name="data[Invoice][id]" value="<?php echo $id_view;?>"/>
							<input type="hidden" name="data[Invoice][id_product]" value="<?php echo $this->data['Invoice']['id_product'];?>"/>
							<input type="hidden" name="data[Invoice][quantity_product]" value="<?php echo $this->data['Invoice']['quantity_product'];?>"/>
							<select style="height:22px;width:150px;" id="ddlParent" name="data[Invoice][status]">
								<option <?php if($this->data['Invoice']['status']==0) { ?> selected="selected" <?php } ?> value="0"> Trạng thái 0 </option>
								<option <?php if($this->data['Invoice']['status']==1) { ?> selected="selected" <?php } ?> value="1"> Trạng thái 1 </option>
								<option <?php if($this->data['Invoice']['status']==2) { ?> selected="selected" <?php } ?> value="2"> Trạng thái 2 </option>
								<option <?php if($this->data['Invoice']['status']==4) { ?> selected="selected" <?php } ?> value="4"> Trạng thái 3 </option>
								<option <?php if($this->data['Invoice']['status']==5) { ?> selected="selected" <?php } ?> value="5"> Trạng thái 4 </option>										
							</select>
							<input type="submit" class="submit-submit-submit" onclick="return confirm('Bạn có chắc không ?');" value=" Cập nhật ">
							<div>
								<div><strong>Diễn giải trạng thái</strong></div>
								<div><strong>0</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/0"> Đơn hàng chưa cập nhật.</a></div>
								<div><strong>1</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/1"> Khách hàng đã chuyển tiền - website chưa chuyển hàng.</a></div>
								<div><strong>2</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/2"> Khách hàng tới công ty thanh toán.</a></div>
								<div><strong>3</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/4"> Khách hàng thanh toán tiền và đã nhận hàng.</a></div>
								<div><strong>4</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/5"> Hủy Deal.</a></div>
							</div>
						</form>
				
				</div>
				<div class="b"><div class="b"><div class="b"></div></div></div>
			</div>
			<noscript>Warning! JavaScript must be enabled for proper operation of the Administrator back-end.</noscript>
			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
</div>
