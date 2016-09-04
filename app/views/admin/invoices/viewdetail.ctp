<script language="javascript" type="text/javascript">
/*<![CDATA[*/
	$(function(){
		$("#lnkSave").click(function(){
			$('#adminForm').submit();
		});

		$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN?>/invoices/admin_customers';
		});

	});
/*]]>*/
	function Checkvalue(ElementID){
		var checkBox = document.getElementById(ElementID);
		if(checkBox.checked==true)
			checkBox.value=1; 
		else checkBox.value=0; 
	}
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
					<div class="col width-50" style="margin-left:50px; width:92%">
						<fieldset class="adminform">
						<legend>Thông tin chi tiết</legend>
						<table width="100%" border="0" cellspacing="3" cellpadding="3">
                      <tr>
                        <td colspan="2" align="center" class="bg_form_left"><strong>Chi tết </strong></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="bg_form_left">
						<table width="100%" border="1" cellspacing="0" cellpadding="3" style="border:#CCC 1px solid; border-collapse:collapse">
                          <tr height="30">
                            <td width="5%" class="headorder" align="center">stt</td>
                             <td width="15%" class="headorder"  align="center">Ảnh sản phẩm</td>
                             <td width="25%" class="headorder"  align="center">Tên sản phẩm</td>
                             <td width="10%" class="headorder"  align="center">Số lượng</td>
                             <td width="10%" class="headorder"  align="center">Đơn giá</td>                             
                             <td width="20%" class="headorder"  align="center">Tổng (VNĐ) </td>
                              <td width="10%" class="headorder"  align="center">Ngày mua</td>
                          </tr>
                     	<?php $i=1; foreach($listInvoices as $value){?>
                          <tr height="30">
                            <td class="itemorder" align="center"><?php echo $i ; ?></td>
                            <td class="itemorder" align="center"><img src="<?php echo DOMAIN?>/<?php echo $value['Invoice']['image_product']?>" style="width:100px; height:80px;" /></td>
                            <td class="itemorder"><?php echo $value['Invoice']['name_product'] ; ?></td>
                            <td class="itemorder tenprooder" align="center"><?php echo $value['Invoice']['quantity_product'] ?></td> 
                            <td class="itemorder" align="center"><?php echo number_format($value['Invoice']['cost_product']) ?> VNĐ</td>
                          
                            <td class="itemorder tenprooder"><?php
								$tong=$value['Invoice']['quantity_product'] * $value['Invoice']['cost_product'];
							 echo number_format($tong) ; ?> VNĐ</td> 
                               <td class="itemorder" align="center"><?php echo date('d-m-Y', strtotime( $value['Invoice']['created'])); ?></td>
                          </tr>
                          <?php $i++;}?>
                   
						  <tr height="30">
						  	<td colspan="7" align="right">
                            <?php $toll=0; 
								foreach($listInvoices as $tol){
									$toll=$tol['Invoice']['quantity_product'] *$tol['Invoice']['cost_product'] + $toll;
									
								}
							?>
                            Tổng hóa đơn : &nbsp; <?php echo number_format($toll); ?> VNĐ</td>
						  </tr>
                        
                           <!-- <tr>
						  	<td colspan="6" align="right"><b>Giảm giá: VNĐ</b></td>
						  </tr>-->
                          
                         
                        </table></td>
                        </tr>
                      
                      <tr>
                        <td  width="25%" class="bg_form_left">Họ và tên khách hàng </td>
                        <td class="bg_form_right"><?php echo $this->data['User']['myname']?></td>
                      </tr>
                       <tr>
                        <td  class="bg_form_left">Taì khoản đăng nhập</td>
                        <td class="bg_form_right"><?php echo $this->data['User']['email']?></td>
                      </tr>
                      
                     
                      <tr>
                        <td  class="bg_form_left">Địa chỉ </td>
                        <td class="bg_form_right"><?php echo $this->data['User']['add']?></td>
                      </tr>
                     
                      
                    </table>
						</fieldset>
					</div>
					<div class="clr"></div>
					<input type="hidden" name="hndId" id="hndId" value="" />
				</form>
				<div class="clr"></div>
				</div>
				<div class="b"><div class="b"><div class="b"></div></div></div>
			</div>
			<noscript>Warning! JavaScript must be enabled for proper operation of the Administrator back-end.</noscript>
			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
</div>
