<?php	echo $this->Html->script(array('ckeditor/ckeditor','ckfinder/ckfinder'));?>
<script language="javascript" type="text/javascript">
/*<![CDATA[*/
	$(function(){
		$("#lnkSave").click(function(){
			$('#adminForm').submit();
		});

		$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN?>/news/admin_index';
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
				<div class="header icon-48-langmanager">Sửa bài viết</div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
			</div>
			<div class="clr"></div>
			<div id="element-box">
				<div class="t"><div class="t"><div class="t"></div></div></div>
				<div class="m">
				<form action="<?php echo DOMAIN?>/news/admin_edit" method="post" name="adminForm" enctype="multipart/form-data" id="adminForm" autocomplete="off">
					<div class="col width-60">
						<fieldset class="adminform">
						<legend>Thông tin chi tiết</legend>
						<table class="admintable" cellspacing="1">
						  <tr>
							<td width="150" class="key">
								<label for="txtName">Tên bài viết</label>
							</td>
							<td>
								<?php echo $this->Form->input('News.name',array('label'=>'','id'=>'txtName','class'=>'validate[required] inputbox')); ?>
                                <?php echo $this->Form->input('News.id'); ?>
                                 <?php echo $this->Form->input('News.type',array('label'=>'','value'=>'1','type'=>'hidden','class'=>'inputbox')); ?>
							</td>
						</tr>
                        <tr>
							<td class="key">
								<label for="ddlParent">Danh mục bài viết</label>
							</td>
							<td class="keke" >
							<?php echo $form->input('News.category_id', array('label'=>'','id'=>'','class'=>'inputbox','options' => array(
									'1'=>'Khuyến mại',
									'2'=>'Tuyển dụng',									
									
							 ),'style'=>'height:22px;width:150px;')); ?> 
								
							</td>
						</tr>
						<tr>
							<td class="key">
								<label for="txtImage">Ảnh đại diện</label>
							</td>
							<td>
							<?php echo $this->Form->input('News.images',array('class'=>'inputbox','id'=>'txtImage','size'=>'40','label'=>false,'readonly'=>true,'id'=>'imagesid')); ?> 
    <div style="position:relative; top:-20px; left:240px;"><a href="javascript:window.open('<?php echo DOMAIN; ?>/upload.php','images','left=400,top=100,width=500,height=300');window.history.go(1)">Upload</a></div>
    <div class="functionBtnEvent" style="width:100%; padding-left:11px;"><img id="images-default" name="imagesdefault" src="<?php echo DOMAIN ?>/img/no-images.jpg" width="100"></img></div>
                            </td>
						</tr>
                        <tr>
							<td width="150" class="key">
								<label for="txtName">Thứ tự</label>
							</td>
							<td>
								<?php echo $this->Form->input('News.order',array('label'=>'','id'=>'txtName','class'=>'inputbox')); ?>
							</td>
						</tr>                        
						<tr>
							<td class="key">
								<label for="txtSummary">Tóm tắt</label>
							</td>
							<td>
								 <?php  echo $this->Form->input('News.introduction', array('cols'=>75, 'rows'=>5, 'type'=>'textarea','label'=>'','id'=>'txtMetaTitle'));?> 
							</td>

						</tr>
                        
                        
						
						
						</table>
						</fieldset>
					</div>
					<div class="col width-40">
						<fieldset class="adminform">
						<legend>Mở rộng</legend>
						<table cellspacing="1" class="admintable">
						<tbody>
						<tr>
							<td  width="150">
								<label for="chekActive">Trạng thái</label>
                                 <?php	echo $this->Form->input('News.status',array('type'=>'checkbox','label'=>false,'class'=>'inputbox','id'=>'chekActive','onclick'=>'Checkvalue("chekActive")','style'=>'width:0px;')); ?>
								<label id="lbActive">Hoạt động</label>
							</td>
							
						</tr>
						
						
						</tbody></table>
						</fieldset>
						<fieldset class="adminform">
						<legend>Meta Data</legend>
						<table cellspacing="1" class="admintable">
						<tbody>
						<tr>
							<td width="150" class="key">
								<label for="txtMetaTitle">Meta Title</label>
							</td>
							<td>
								 <?php  echo $this->Form->input('News.title', array('cols'=>50, 'rows'=>1, 'type'=>'textarea','label'=>'','id'=>'txtMetaTitle'));?> 
							</td>
						</tr>
						<tr>
							<td width="150" class="key">
								<label for="txtMetaKeyword">Meta Keyword</label>
							</td>
							<td>
								 <?php  echo $this->Form->input('News.keyword', array('cols'=>50, 'rows'=>1, 'type'=>'textarea','label'=>'','id'=>'txtMetaTitle'));?> 
							</td>
						</tr>
						<tr>
							<td class="key">
								<label for="txtMetaDescription">Meta Description</label>
							</td>
							<td>
								 <?php  echo $this->Form->input('News.description', array('cols'=>50, 'rows'=>3, 'type'=>'textarea','label'=>'','id'=>'txtMetaTitle'));?> 
							</td>
						</tr>
						</tbody></table>
						</fieldset>
					</div>
					<div class="clr"></div>
                    <div class="col width-60" style="width:1290px;">
						<fieldset class="adminform">
						<legend>Nội dung báo giá</legend>
						<table class="admintable" cellspacing="1">						
						<tr>
							
							<td>
								<?php  echo $this->Form->input('News.content',array('label'=>'')).$this->TvFck->create('News.content',array('toolbar'=>'extra','height'=>'350px','width'=>'1250')); ?>
							</td>
						</tr>
						
						</table>
						</fieldset>
					</div>
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
