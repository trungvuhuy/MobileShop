<?php	echo $this->Html->script(array('ckeditor/ckeditor','ckfinder/ckfinder'));?>
<!-- Ajax chọn sản phẩm -->
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#chooseCayegory").change(function(){					
			var idcategory = $("#chooseCayegory").val();			
			//alert (idcategory);	
			$.ajax({
				type: "GET", 
				url: "<?php echo DOMAIN;?>"+'/products/aj_posts/',
				data: 'idcategory='+ idcategory ,
				success: function(msg){	
					//alert (msg);	
					$('#choseSubCategory').find('option').remove().end();										
					$('#choseSubCategory').append(msg);					
				}
			});						
			});			
			
			$("#choseSubCategory").change(function(){					
			var idcategory = $("#choseSubCategory").val();			
			//alert (idcategory);	
			$.ajax({
				type: "GET", 
				url: "<?php echo DOMAIN;?>"+'/products/aj_posts2/',
				data: 'idcategory='+ idcategory ,
				success: function(msg){	
					//alert (msg);	
					$('#choseSub2Category').find('option').remove().end();										
					$('#choseSub2Category').append(msg);					
				}
			});						
			});
		
	});
	
</script>
<!-- end:Ajax -->
<script language="javascript" type="text/javascript">
/*<![CDATA[*/
	$(function(){
		$("#lnkSave").click(function(){
			$('#adminForm').submit();
		});

		$("#lnkClose").click(function(){
			window.location = '<?php echo DOMAIN?>/products/admin_index';
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
				<div class="header icon-48-langmanager">Thêm sản phẩm mới</div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
			</div>
			<div class="clr"></div>
			<div id="element-box">
				<div class="t"><div class="t"><div class="t"></div></div></div>
				<div class="m">
				<form action="<?php echo DOMAIN?>/products/admin_add" method="post" name="adminForm" enctype="multipart/form-data" id="adminForm" autocomplete="off">
					<div class="col width-60">
						<fieldset class="adminform">
						<legend>Thông tin chi tiết</legend>
						<table class="admintable" cellspacing="1">
						<tr>
							<td width="150" class="key">
								<label for="txtName">Tên sản phẩm <span style="color:#F00; font-weight:bold;">(*)</span></label>
							</td>
							<td>
								  <?php echo $form->input('Product.name',array( 'label' => '','id'=>'txtTitle','class'=>'validate[required] inputbox','size'=>'40'));?>
							</td>
						</tr>
						<!-- danh mục sản phẩm -->
						<tr>
							<td width="150" class="key">
								<label for="txtName">Danh mục sản phẩm  <span style="color:#F00; font-weight:bold;">(*)</span></label>
							</td>
							<td>
								 <?php echo $form->select('Product.category_id',$listCategory, null,array('empty'=>'-- Chọn danh mục --','id'=>'chooseCayegory','class'=>'validate[required]','style'=>'width:220px; height:22px;'));?>
							</td>
						</tr>
						<tr>
							<td width="150" class="key">
								<label for="txtName">Thương hiệu sản phẩm  <span style="color:#F00; font-weight:bold;">(*)</label>
							</td>
							<td>
								 <?php echo $form->select('Product.brand_id',$listBrand, null,array('empty'=>'-- Chọn thương hiệu --','id'=>'chooseBrand','class'=>'validate[required]','style'=>'width:220px; height:22px;'));?>
							</td>
						</tr>
						<!-- end: -->
						<tr>
							<td class="key">
								<label for="ddlLocal">Giá sản phẩm  <span style="color:#F00; font-weight:bold;">(*)</span></label>
							</td>
							<td class="keke" >
							<?php echo $form->input('Product.price',array( 'label' => '','id'=>'txtPrice','class'=>'validate[required] inputbox','size'=>'40'));?>
								
							</td>
						</tr>
						<tr>
							<td class="key">
								<label for="txtImage">Ảnh sản phẩm 1</label>
							</td>
							<td>
							<?php echo $this->Form->input('Product.images',array('class'=>'inputbox','id'=>'txtImage','size'=>'40','label'=>false,'readonly'=>true,'id'=>'imagesid')); ?> 
    <div style="position:relative; top:-20px; left:240px;"><a href="javascript:window.open('<?php echo DOMAIN; ?>/upload.php','images','left=400,top=100,width=500,height=300');window.history.go(1)">Upload</a></div>
    <div class="functionBtnEvent" style="width:100%; padding-left:11px;"><img id="images-default" name="imagesdefault" src="<?php echo DOMAIN ?>/img/no-images.jpg" width="100"></img></div>
                            </td>
						</tr>                  
                        <tr>
							<td class="key">
								<label for="txtImage">Ảnh sản phẩm 2</label>
							</td>
							<td>
							<?php echo $this->Form->input('Product.images1',array('class'=>'inputbox','id'=>'txtImage','size'=>'40','label'=>false,'readonly'=>true,'id'=>'imagesid1')); ?> 
    <div style="position:relative; top:-20px; left:240px;"><a href="javascript:window.open('<?php echo DOMAIN; ?>/upload1.php','images','left=400,top=100,width=500,height=300');window.history.go(1)">Upload</a></div>
    <div class="functionBtnEvent" style="width:100%; padding-left:11px;"><img id="images-default" name="imagesdefault1" src="<?php echo DOMAIN ?>/img/no-images.jpg" width="100"></img></div>
                            </td>
						</tr> 
						<tr>
							<td class="key">
								<label for="txtImage">Ảnh sản phẩm 3</label>
							</td>
							<td>
							<?php echo $this->Form->input('Product.images2',array('class'=>'inputbox','id'=>'txtImage','size'=>'40','label'=>false,'readonly'=>true,'id'=>'imagesid2')); ?> 
    <div style="position:relative; top:-20px; left:240px;"><a href="javascript:window.open('<?php echo DOMAIN; ?>/upload2.php','images','left=400,top=100,width=500,height=300');window.history.go(1)">Upload</a></div>
    <div class="functionBtnEvent" style="width:100%; padding-left:11px;"><img id="images-default" name="imagesdefault2" src="<?php echo DOMAIN ?>/img/no-images.jpg" width="100"></img></div>
                            </td>
						</tr> 
						<tr>
							<td class="key">
								<label for="txtImage">Ảnh sản phẩm 4</label>
							</td>
							<td>
							<?php echo $this->Form->input('Product.images3',array('class'=>'inputbox','id'=>'txtImage','size'=>'40','label'=>false,'readonly'=>true,'id'=>'imagesid3')); ?> 
    <div style="position:relative; top:-20px; left:240px;"><a href="javascript:window.open('<?php echo DOMAIN; ?>/upload3.php','images','left=400,top=100,width=500,height=300');window.history.go(1)">Upload</a></div>
    <div class="functionBtnEvent" style="width:100%; padding-left:11px;"><img id="images-default" name="imagesdefault3" src="<?php echo DOMAIN ?>/img/no-images.jpg" width="100"></img></div>
                            </td>
						</tr> 
						<tr>
							<td class="key">
								<label for="txtImage">Ảnh sản phẩm 5</label>
							</td>
							<td>
							<?php echo $this->Form->input('Product.images4',array('class'=>'inputbox','id'=>'txtImage','size'=>'40','label'=>false,'readonly'=>true,'id'=>'imagesid4')); ?> 
    <div style="position:relative; top:-20px; left:240px;"><a href="javascript:window.open('<?php echo DOMAIN; ?>/upload4.php','images','left=400,top=100,width=500,height=300');window.history.go(1)">Upload</a></div>
    <div class="functionBtnEvent" style="width:100%; padding-left:11px;"><img id="images-default" name="imagesdefault4" src="<?php echo DOMAIN ?>/img/no-images.jpg" width="100"></img></div>
                            </td>
						</tr>                  
                        
                        <tr>
							<td width="150" class="key">
								<label for="txtName">Thông tin sản phẩm - Tiếng Việt</label>
							</td>
							<td>
                            <?php  echo $this->Form->input('Product.content',array('label'=>'')).$this->TvFck->create('Product.content',array('toolbar'=>'extra','height'=>'250px','width'=>'600')); ?>
								
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
							<td class="key">
								<label for="chekActive">Trạng thái</label>
							</td>
							<td>
								 <?php	echo $this->Form->input('Product.status',array('type'=>'checkbox','label'=>false,'class'=>'inputbox','id'=>'chekActive','style'=>'width:12px;')); ?>
								<label id="lbActive">Hoạt động</label>
							</td>
						</tr>
						<tr>
							<td class="key">
								<label for="checkProminent">Sản phẩm nổi bật:</label>
							</td>
							<td>
								 <?php	echo $this->Form->input('Product.prominent',array('type'=>'checkbox','label'=>false,'class'=>'inputbox','id'=>'checkProminent','style'=>'width:12px;')); ?>
							</td>
						</tr>
						<tr>
							<td class="key">
								<label for="checkSale">Sản phẩm khuyến mại</label>
							</td>
							<td>
								 <?php	echo $this->Form->input('Product.sale',array('type'=>'checkbox','label'=>false,'class'=>'inputbox','id'=>'checkSale','style'=>'width:12px;')); ?>
							</td>
						</tr>
						<tr>
							<td class="key">
								<label for="checkNew">Sản phẩm mới</label>
							</td>
							<td>
								 <?php	echo $this->Form->input('Product.new',array('type'=>'checkbox','label'=>false,'class'=>'inputbox','id'=>'checkNew','style'=>'width:12px;')); ?>
							</td>
						</tr>
						</tbody></table>
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
