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
			window.location = '<?php echo DOMAIN ?>/tin_tuc/add';
		});

		$("#lnkDelete").click(function(){
			var form = document.adminForm;
			if(form.hndBoxChecked.value==0){
				alert('Bạn phải chọn một mục để xóa');
			}else if(confirm('Bạn có chắc muốn không?')){
				form.action = '<?php echo DOMAIN?>/news/delete';
				form.submit();
			}
		});
		$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN?>/news';
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
	function FilterClick()
	{
		document.adminForm.submit();
	}
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
					<td class="button" id="toolbar-new">
						<a href="javascript:;//Thêm" class="toolbar" id="lnkAdd">
							<span class="icon-32-new" title="Thêm"></span>
							Thêm
						</a>
					</td>
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
				<div class="header icon-48-langmanager">Quản lý tin bài</div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
  		</div>
   		<div class="clr"></div>
		<div id="element-box">
				
			<div class="t"><div class="t"><div class="t"></div></div></div>
			<div class="m">
            <?php if($tintucs) {?>
			<form action="<?php echo DOMAIN?>/news/options" method="post" name="adminForm" id="adminForm">
			<table summary="">
			<tr>
				<td width="90%">
					Lọc:
					<input type="text" name="keyword" id="txtFilter" value="" class="text_area" onchange="this.form.submit();" />
					<button name="btnFilter" id="btnFilter">Tìm</button>
					<!--<button name="btnReset" id="btnReset">Làm lại</button>-->
				</td>
				<td width="10%">
					<?php echo $form->select('category_id',$categorylist, null,array('empty'=>'-- Danh mục gốc --','id'=>'ddlParent','onchange'=>'document.adminForm.submit();'));?>
				</td>
			</tr>
			</table>

			<table class="adminlist" cellpadding="1" summary="">
			<thead>
				<tr>
					<th width="2%" class="title">#</th>
					<th width="3%" class="title">
						<input type="checkbox" name="chkToggle" value="" id="chkToggle" />
					</th>
					<th class="title">
						Tên bài viết
					</th>
					<th width="15%" class="title" >
						Danh mục bài viết
					</th>
					<th width="15%" class="title" >
						Trạng thái
					</th>
					<th width="15%" class="title" nowrap="nowrap">
						Ngày tạo
					</th>
					<th width="15%" class="title" nowrap="nowrap">
						Ngày cập nhật
					</th>
					<th width="5%" class="title" >
						Lượt xem
					</th>
					<th width="5%" class="title" nowrap="nowrap">
						ID
					</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="10">
						<del class="container"><div class="pagination"><div class="limit"><?php // view_page('index.php?progid=6'); ?></div><div class="limit"></div></div></del>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php foreach($tintucs as $key=>$tintuc) { ?>
				<tr class="row0">
					<td align="center"><?php $i=$key +1; echo $i?></td>
					<td align="center">
						<input type="checkbox" id="cb <?php  echo $tintuc['News']['id'] ?>" name="chkId[]" value="<?php echo $tintuc['News']['id'] ?>" onclick="isChecked(this.checked);" />
					</td>
					<td>
						
						<a href="<?php echo DOMAIN?>/news/edit/<?php echo $tintuc['News']['id'] ?>"><?php echo $tintuc['News']['name']?></a>
						
					</td>
					<td align="center">
						<?php  echo $tintuc['Category']['name']?>
					</td>
					<td align="center">
						<?php  
							if($tintuc['News']['status']==1){?><img src="<?php echo DOMAIN;?>/images/tick.png" /><?php }
							else {?><img src="<?php echo DOMAIN;?>/images/publish_x.png" /><?php }?>
					</td>
					<td align="center"><?php echo date('d-m-Y', strtotime($tintuc['News']['created'])); ?></td>
					<td align="center"><?php echo date('d-m-Y', strtotime($tintuc['News']['modified'])); ?></td>
					<td align="center"><?php echo $tintuc['News']['view'] ?></td>
					<td align="center"><?php echo $tintuc['News']['id'] ?></td>
				</tr>
				<?php  }?>
			</tbody>
			</table>
			<input type="hidden" name="hndBoxChecked" id="hndBoxChecked" value="0" />
			<input type="hidden" name="hndResetFilter" id="hndResetFilter" value="0" />
			<input type="hidden" name="hndSelected" id="hndSelected" value="0" />
			</form>
			<div class="clr"></div>
              <?php } else { echo '<center><b  style="color:#F00;">Không tìm thấy kết quả theo yêu cầu</b></center>';}?>
			</div>
          
			<div class="b"><div class="b"><div class="b"></div></div></div>
   		</div>
		<noscript>Warning! JavaScript must be enabled for proper operation of the Administrator back-end.</noscript>
		<div class="clr"></div>
	</div>
	<div class="clr"></div>
	</div>
</div>

