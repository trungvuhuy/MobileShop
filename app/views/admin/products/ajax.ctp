﻿<?php
if($categories){
?>
	<option value="0"  style="width:124px; height:20px;" > --- Chọn danh mục --- </option>
<?php
	foreach ($categories as $value){
?>																				
	<option value="<?php echo $value['Category']['id']?>"  style="width:124px; height:20px;"> <?php echo $value['Category']['title']?> </option>
<?php }
}else{ ?>
	<option value="0"  style="width:124px; height:20px;" > --- Chọn danh mục --- </option>
<?php
}	
?>