<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
	$(function(){
		$("#chkToggle").click(function(){
			var elements = $("form :checkbox");
			if(this.checked){
				elements.each(function(element){
					this.checked = true;
					document.forms[0].hndBoxChecked.value ++;
				});
			}else{
				elements.each(function(element){
					this.checked = false;
				});
				document.forms[0].hndBoxChecked.value = 0;
			}
		});
		$("#lnkAdd").click(function(){
			window.location = '<?php echo DOMAIN ?>/invoices/add';
		});
		
		$("#lnkDelete").click(function(){
			var form = document.adminForm;
			if(form.hndBoxChecked.value==0){
				alert('Bạn phải chọn một hóa đơn  để xóa');
			}else if(confirm('Bạn có chắc muốn xóa hóa đơn này không?')){
				form.action = '<?php echo DOMAIN?>/invoices/delete';
				form.submit();
			}
		});
		
	$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN?>/invoices/admin_index';
		});
		$("#btnFilter").click(function(){
			document.adminForm.submit();
		});

		$("#btnReset").click(function(){
			$("#hndResetFilter").val(1);
			document.adminForm.submit();
		});
	});

	function isChecked(checkObject){
		if (checkObject.checked == true){
			document.adminForm.hndBoxChecked.value ++;
		}else {
			document.adminForm.hndBoxChecked.value --;
		}
	}

	function getSelectedID(){
		var IDs = "";
		$('input[name=chkID]:checkbox').each(function(){
			if(this.checked){
				if(IDs.isEmpty()){
					IDs = this.value;
				}else{
					IDs += "|" + this.value;
				}
			}
		});
		return IDs;
	}
/*]]>*/
</script>

<div id="content-box">
	<div class="border">
		<div class="padding">
			<div id="toolbar-box">
				<div class="t"><div class="t"><div class="t"></div></div></div>
				<div class="m">
				<div class="toolbar" id="toolbar">
				<table class="toolbar" summary="">
				<tr>
					<td  class="button" id="toolbar-delete">
						<a href="javascript:;//Xóa" class="toolbar" id="lnkDelete">
							<span class="icon-32-delete" title="Xóa"></span>
							Xóa
						</a>
					</td>
                    <td class="button" id="toolbar-cancel">
                        <a href="javascript:;//Đóng" id="lnkClose" class="toolbar">
                            <span class="icon-32-cancel" title="Đóng"></span>
                            Đóng
                        </a>
					</td>
				</tr>
				</table>
				</div>
				<div class="header icon-48-langmanager">Quản lý hóa đơn</div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
  		</div>
   		<div class="clr"></div>
		<div id="element-box">
			<div class="t"><div class="t"><div class="t"></div></div></div>
			<div class="m">
			<form action="index.php?progid=8" method="post" name="adminForm" id="adminForm">
			<table summary="">
			<!--<tr>
				<td width="100%">
					Lọc:
					<input type="text" name="txtFilter" id="txtFilter" value="" class="text_area" onchange="this.form.submit();" />
					<button name="btnFilter" id="btnFilter">Tìm</button>
					<button name="btnReset" id="btnReset">Làm lại</button>
				</td>
			</tr>-->
			</table>
			<div><strong>Diễn giải trạng thái</strong></div>
			<div><strong>0</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/0"> Đơn hàng chưa cập nhật.</a></div>
			<div><strong>1</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/1"> Khách hàng đã chuyển tiền - website chưa chuyển hàng.</a></div>
			<div><strong>2</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/2"> Khách hàng tới công ty thanh toán.</a></div>
			<div><strong>3</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/4"> Khách hàng thanh toán tiền và đã nhận hàng.</a></div>
			<div><strong>4</strong>:<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/5"> Hủy Deal.</a></div>
			<?php if(!empty($status)) {?>
			<br />
			<div style="color: green;font-size: 14px;font-weight: bold;   text-align: center">Danh sách các hóa đơn : <?php echo $status;?></div>
			<?php } else { ?>
			<br />
			<div style="color: green;font-size: 14px;font-weight: bold;   text-align: center">Danh sách các hóa đơn </div>
			<?php } ?>
			<table class="adminlist" cellpadding="1" summary="">
			<thead>
				<tr>
					<th width="2%" class="title">#</th>
					<th width="3%" class="title">
						<input type="checkbox" name="chkToggle" value="" id="chkToggle" />
					</th>
                   <!-- <th class="title">
						Tiêu đề
					</th>-->
					<th class="title" width="20%">
						Họ và tên người mua
					</th>
                    
					<th width="20%" class="title" >
						Địa chỉ liên hệ
					</th>					
                    <!--th width="10%" class="title" >
						Tổng tiền (VNĐ)
					</th-->
					<th width="15%" class="title" >
						Trang thái
					</th>
					<th width="15%" class="title" >
						Ngày mua
					</th>
					<!--<th width="15%" class="title" >
						Trạng thái
					</th>-->
					<th width="5%" class="title" nowrap="nowrap">
						ID
					</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="10">
						<del class="container"><div class="pagination"><div class="limit"> </div><div class="limit"></div></div></del>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php foreach($allInvoices as $key=>$hd) { $i=$key+1; ?>
				<tr class="row0">
					<td align="center"><?php  echo $i?></td>
					<td align="center">
						<input type="checkbox" id="cb<?php  echo $hd['Invoice']['id']?>" name="chkId[]" value="<?php  echo $hd['Invoice']['id']?>" onclick="isChecked(this.checked);" />
					</td>
               
					<td>
						<a href="<?php echo DOMAIN?>/invoices/admin_view/<?php  echo $hd['Invoice']['id']?>"><?php  echo $hd['Invoice']['name']?></a>
						
					</td>
                   
					<td ><?php  echo $hd['Invoice']['address']?></td>
                    <!--td ><?php  
						$tong=$hd['Invoice']['cost_product'] * $hd['Invoice']['quantity_product'];
					echo number_format($hd['Invoice']['cost_product']);?></td-->
					<td align="center"><?php echo $hd['Invoice']['status'];?></td>
         			<td align="center"><?php echo date('d-m-Y', strtotime( $hd['Invoice']['created'])); ?></td>				
					
                    <td align="center"><?php   echo $hd['Invoice']['id'] ?></td>
				</tr>
				<?php }?>
				
			</tbody>
			</table>
			<table>
				<tr>
					<td>
												<del class="container"><div class="pagination"><div class="limit">
						<del class="container"><div class="pagination"><div class="limit">
                        	 <?php


								$paginator->options(array('url' => $this->passedArgs));
								echo $paginator->first('first');echo "&nbsp;&nbsp;&nbsp;";
								echo $paginator->prev('Back', null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
								echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
								echo $paginator->next('Next' , null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
								echo $paginator->last('last');
								echo "</span>";
					     	?>
                        
                        </div><div class="limit"></div></div></del>
                        </div><div class="limit"></div></div></del>
					</td>
				</tr>
			</table>
			<input type="hidden" name="hndBoxChecked" id="hndBoxChecked" value="0" />
			<input type="hidden" name="hndResetFilter" id="hndResetFilter" value="0" />
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
