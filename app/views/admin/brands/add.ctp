<?php
	echo $this->Html->script(array('ckeditor/ckeditor','ckfinder/ckfinder'));
?>

<script language="javascript" type="text/javascript">
/*<![CDATA[*/
	$(function(){
		$("#lnkSave").click(function(){
			$('#adminForm').submit();
		});

		$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN ?>/brands/admin_index';
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
				<div class="header icon-48-langmanager">Thêm danh mục </div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
			</div>
			<div class="clr"></div>
			<div id="element-box">
				<div class="t"><div class="t"><div class="t"></div></div></div>
				<div class="m">
								<form action="<?php echo DOMAIN?>/brands/admin_add" method="post" name="adminForm" enctype="multipart/form-data" id="adminForm" autocomplete="off">
                					<div class="col width-60">
                						<fieldset class="adminform">
                						<legend>Thông tin chi tiết</legend>
                						<table class="admintable" cellspacing="1">
                						<tr>
                							<td width="150" class="key">
                								<label for="txtName">Tên thương hiệu</label>
                							</td>
                							<td>
                								 <?php echo $form->input('Brand.name',array( 'label' => '','id'=>'txtName','class'=>'validate[required] inputbox','size'=>'80'));?>
                								 <?php echo $form->input('Brand.id',array( 'label' => '','id'=>'txtName','class'=>'validate[required] inputbox','size'=>'80'));?>
                							</td>
                						</tr>
                						<tr>
                							<td width="150" class="key">
                								<label for="txtName">Mã thương hiệu</label>
                							</td>
                							<td>
                								 <?php echo $form->input('Brand.code',array( 'label' => '','id'=>'txtCode','class'=>'validate[required] inputbox','size'=>'80'));?>
                							</td>
                						</tr>
                						<tr>
                							<td width="150" class="key">
                								<label for="txtName">Hoạt động</label>
                							</td>
                							<td>
                								 <?php	echo $this->Form->input('Brand.status',array('type'=>'checkbox','label'=>false,'class'=>'inputbox','id'=>'chekActive','onclick'=>'Checkvalue("chekActive")','style'=>'width:12px;')); ?>
                                                 								<label id="lbActive">Hoạt động</label>							</td>
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
