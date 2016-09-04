<?php	echo $this->Html->script(array('ckeditor/ckeditor','ckfinder/ckfinder'));?>
<script language="javascript" type="text/javascript">
/*<![CDATA[*/
	$(function(){
		$("#lnkSave").click(function(){
			$('#adminForm').submit();
		});

		$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN?>/managements/admin_index';
		});

		$("#adminForm").validate({
			rules: {
				txtName: "required",
			},
			messages: {
				txtName: "Bạn chưa nhập tên bài viết!",
			}
		});
	});
/*]]>*/

	function Checkvalue(ElementId){
		var checkBox = document.getElementById(ElementId);
		if(checkBox.checked==true)
			checkBox.value=1; 
		else checkBox.value=0; 
	}
</script>
<style>
.error-message{
	color:#F00;
	margin:10px 20px;
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
					<td class="button" id="toolbar-save">
					<a href="javascript:;//Cập nhật" id="lnkSave" class="toolbar">
						<span class="icon-32-save" title="Cập nhật"></span>
						Cập nhật
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
				<div class="header icon-48-langmanager">Thay đổi Password</div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
			</div>
			<div class="clr"></div>
			<div id="element-box">
				<div class="t"><div class="t"><div class="t"></div></div></div>
				<div class="m">
				<form action="<?php echo DOMAIN?>/managements/admin_chagepass" method="post" name="adminForm" enctype="multipart/form-data" id="adminForm" autocomplete="off">
					<div class="col width-60" style="width:70%;" align="center">
						<fieldset class="adminform"  style="margin-left:350px; height:250px; padding-top:50px;">
						<legend>Thông tin chi tiết</legend>
						<table class="admintable" cellspacing="1">
						<tr>
							<td width="150" class="key">
								<label for="txtName">Password cũ</label>
							</td>
							<td>
								<?php echo $this->Form->input('Admin.passwordOld',array('type'=>'password','label'=>'','id'=>'txtName','style'=>'width:300px;height:25px;')); ?>
								<?php echo $this->Form->input('Admin.id',array('label'=>''));?>
								
							</td>
						</tr>
						<tr>
							<td width="150" class="key">
								<label for="txtName">Nhập password mới</label>
							</td>
							<td>
								<?php echo $this->Form->input('Admin.passNew',array('type'=>'password','label'=>'','id'=>'txtName','style'=>'width:300px;height:25px;')); ?>
								
							</td>
						</tr>
						
						
						
						
						</table>
						</fieldset>
					</div>
					
					<div class="clr"></div>
					
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
