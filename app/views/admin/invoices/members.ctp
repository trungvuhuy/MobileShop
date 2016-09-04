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
				<div class="header icon-48-langmanager">Quản lý đử điêu kiện nhận khuyến mại</div>
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

			<table class="adminlist" cellpadding="1" summary="">
			<thead>
				<tr>
					<th width="2%" class="title">#</th>
					<th width="3%" class="title">
						<input type="checkbox" name="chkToggle" value="" id="chkToggle" />
					</th>
                    <th class="title"  width="15%">
						Tài khoản đăng nhập
					</th>
					<th class="title" width="20%">
						Họ và tên người mua
					</th>
                    
					<th width="25%" class="title" >
						Địa chỉ liên hệ
					</th>
                    <th width="15%" class="title" >
						Tổng tiền (VNĐ)
					</th>
					<th width="10%" class="title" >
						Đủ điều kiện
					</th>
					<th width="15%" class="title" >
						Ngày đủ điều kiện
					</th>
					<!--<th width="15%" class="title" >
						Trạng thái
					</th>-->
					<th width="10%" class="title" nowrap="nowrap">
						Chi tiết
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
				<?php foreach($peoples as $key=>$hd) { $i=$key+1; ?>
				<tr class="row0">
					<td align="center"><?php  echo $i?></td>
					<td align="center">
						<input type="checkbox" id="cb<?php  echo $hd['User']['id']?>" name="chkId[]" value="<?php  echo $hd['User']['id']?>" onclick="isChecked(this.checked);" />
					</td>
                   <td>
						<a href="<?php echo DOMAIN?>/invoices/admin_viewdetail/<?php  echo $hd['User']['id']?>"><?php  echo $hd['User']['email']?></a>
						
					</td>
					<td>
						<a href="<?php echo DOMAIN?>/invoices/admin_viewdetail/<?php  echo $hd['User']['id']?>"><?php  echo $hd['User']['myname']?></a>
						
					</td>
                   
					<td ><?php  echo $hd['User']['add']?></td>
                    <td ><?php  
						
					echo number_format($hd['User']['total_money'] );?></td>
					<td align="center">
							<img src="<?php echo DOMAIN;?>/images/tick.png" /></td>
         			<td align="center"><?php echo date('d-m-Y', strtotime( $hd['User']['modified'])); ?></td>				
					
                    <td align="center"><a href="<?php echo DOMAIN?>/invoices/admin_viewdetail/<?php echo $hd['User']['id']?>"><img src="<?php echo DOMAIN?>/images/archive_f2.png"></a></td>
				</tr>
				<?php }?>
			</tbody>
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
