<style>
.uploauimges{
	 
	width:20px; 
	height:20px; 
	background-color:#FF6600; 
	color:#FFFFFF; 
	text-align:center;
}
.ul-ul-ul{
	width:800px;
	border:1px  solid #CCC;
	overflow:hidden;
}
.ul-ul-ul li{
	float:left;
	list-style:none;
	margin:10px;
}

</style>
  <ul class="ul-ul-ul"> 
   <?php foreach($listImages as $value){?>
         <li>
         <img style="border:#CCCCCC 1px solid" src="<?php echo DOMAIN?>/<?php echo $value['Photo']['images']?>" width="150" height="100" border="0"  /> 
         <div class="uploauimges">
               <a href="<?php echo DOMAIN?>/images/admin_delete/<?php echo $value['Photo']['id']?>" style="font-size:12px; color:#FFFFFF; text-decoration:none">X</a>
               </div> 
         </li>
           <?php }?>
  </ul>
  <div style="clear:both;"></div>

<form action="<?php echo DOMAIN?>/images/admin_upload" method="post" name="adminForm" enctype="multipart/form-data" id="adminForm" autocomplete="off">
					
						<table class="admintable" cellspacing="1">
						<tr>
							<td ><p style="float:left;"> Ảnh </p>
							<?php echo $this->Form->input('Photo.images',array('class'=>'inputbox','id'=>'txtImage','size'=>'40','label'=>false,'readonly'=>true,'id'=>'imagesid')); ?> 
    <div style="position:relative; top:-20px; left:288px;"><a href="javascript:window.open('<?php echo DOMAIN; ?>/upload.php','images','left=400,top=100,width=500,height=300');window.history.go(1)">Chọn ảnh</a></div>
    <div class="functionBtnEvent" style="width:100%; padding-left:11px;"><img id="images-default" name="imagesdefault" src="<?php echo DOMAIN ?>/img/no-images.jpg" width="100"></div>
   	<input type="hidden" name="data[Photo][galleries_id]" value="<?php echo $id?>" />
    <input type="submit" value=" Up ảnh" />
     <input type="button" name="button2" id="button2" value="Close"  onclick="window.close();"/>
    </td>
							
						</tr>
						
						
						</table>
						
					</div>
					
					<div class="clr"></div>
					
				</form>