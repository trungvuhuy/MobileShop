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
			window.location = '<?php echo DOMAIN?>/brands/admin_add';
		});
		

		$("#lnkDelete").click(function(){
			var form = document.adminForm;
			if(form.hndBoxChecked.value==0){
				alert('Bạn phải chọn một mục để xóa');
			}else if(confirm('Bạn có chắc muốn xóa mục này không ?')){
				form.action = '<?php echo DOMAIN?>/brands/admin_delete';
				form.submit();
			}
		});
	$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN ?>/dashboard/admin_index';
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
<script>
function confirmDelete(delUrl)
{
if (confirm("Bạn có muốn xóa không!"))
{
	document.location = delUrl;
}
}
</script
<div id="content-box">
	<div class="border">
		<div class="padding">
			<div id="toolbar-box">
				<div class="t"><div class="t"><div class="t"></div></div></div>
				<div class="m">
				<div class="toolbar" id="toolbar">
				<table class="toolbar" summary="">
				<tr>
					<td class="button" id="toolbar-new">
						<a href="javascript:;//Thêm" class="toolbar" id="lnkAdd">
							<span class="icon-32-new" title="Thêm"></span>
							Thêm
						</a>
					</td>
					<td class="button" id="toolbar-delete">
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
				<div class="header icon-48-langmanager">Quản lý danh mục</div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
  		</div>
   		<div class="clr"></div>
		<div id="element-box">
			<div class="t"><div class="t"><div class="t"></div></div></div>
			<div class="m">
			<form action="<?php //echo DOMAIN?>/dm_san_pham/options" method="post" name="adminForm" id="adminForm">
<table class="adminlist" cellpadding="1" summary="">
			<thead>
				<tr>
					<th width="2%" class="title">#</th>
					<th width="3%" class="title">
						<input type="checkbox" name="chkToggle" value="" id="chkToggle" />
					</th>
					<th class="title">
						Tên thương hiệu
					</th>
                    <th width="5%" class="title" >
						Trạng thái
					</th>
					<th width="10%" class="title" nowrap="nowrap">
						Sửa
					</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="10">
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
					</td>
				</tr>
			</tfoot>
			<tbody>
			<?php foreach($Brands as $list) {
			?>	
				<tr class="row0">
					<td align="center"><?php echo $list['Brand']['id']?></td>
					<td align="center">
						<input type="checkbox" id="cb<?php  echo $list['Brand']['id']?>" name="chkId[]" value="<?php  echo $list['Brand']['id']?>" onclick="isChecked(this.checked);"/>
					</td>
					<td><b style="font-size:14px;"><?php echo $list['Brand']['name']?></b></td>
					<td align="center">
						<?php  
							if($list['Brand']['status']==1){?>
                            <a href="<?php echo DOMAIN?>/brands/admin_closes/<?php echo $list['Brand']['id']?>"><img src="<?php echo DOMAIN;?>/images/tick.png" /></a><?php }
							else {?> <a href="<?php echo DOMAIN ?>/brands/admin_actives/<?php echo $list['Brand']['id']?>"><img src="<?php echo DOMAIN;?>/images/publish_x.png" /></a><?php }?>
					</td>
					<td align="center">
						 <a href="<?php echo DOMAIN?>/brands/admin_edit/<?php echo $list['Brand']['id'] ?>"><img src="<?php echo DOMAIN ?>/images/addedit.png"  style="width:25px; height:25px;" /></a>
                     &nbsp;&nbsp;&nbsp;
                     <a href="javascript:confirmDelete('<?php echo DOMAIN?>/brands/admin_deleteone/<?php echo  $list['Brand']['id']?>')"><img src="<?php echo DOMAIN ?>/images/cancel_f2.png"  style="width:20px; height:20px;" /></a>
					</td>
				</tr>

			<?php } ?>
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


