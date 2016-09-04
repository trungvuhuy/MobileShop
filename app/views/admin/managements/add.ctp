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
				<div class="header icon-48-langmanager">Thêm mới thành viên</div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
			</div>
			<div class="clr"></div>
			<div id="element-box">
				<div class="t"><div class="t"><div class="t"></div></div></div>
				<div class="m">
				<form action="<?php echo DOMAIN?>/managements/admin_add" method="post" name="adminForm" enctype="multipart/form-data" id="adminForm" autocomplete="off">
					<div class="col width-60">
						<fieldset class="adminform">
						<legend>Thông tin chi tiết</legend>
						<table class="admintable" cellspacing="1">
						
                  
                    	<tr>
							<td width="150" class="key">
								<label for="txtName">Tài khoản <span style="color:#F00">(*)</span></label>
							</td>
							<td>
								<?php echo $this->Form->input('Admin.name',array('label'=>'','id'=>'name','class'=>'inputbox','style'=>'float:left; margin-right:5px;')); ?>
							</td>
						</tr>
                        <tr>
							<td width="150" class="key">
								<label for="txtName">Password <span style="color:#F00">(*)</span></label>
							</td>
							<td>
								<?php echo $this->Form->input('Admin.password',array('label'=>'','type'=>'password','class'=>'inputbox','style'=>'float:left; margin-right:5px;')); ?>
							</td>

						</tr>
                        <tr>
							<td width="150" class="key">
								<label for="txtName">Họ và tên</label>
							</td>
							<td>
								<?php echo $this->Form->input('Admin.myname',array('label'=>'','id'=>'txtName','class'=>'inputbox')); ?>
							</td>
						</tr>                        
						<tr>
							<td width="150" class="key">
								<label for="txtName">Email</label>
							</td>
							<td>
								<?php echo $this->Form->input('Admin.email',array('label'=>'','id'=>'txtEmail','class'=>'inputbox')); ?>
							</td>
						</tr>
                        <tr>
							<td width="150" colspan="2" class="key">
								<script language="javascript"> 
function change_page_home(i)	 {
	 location.href=i;
}

function check_value()  {
  
    for (i=0;i<document.check_form.element_value.length;i++)
	     {			  
         document.check_form.element_value[i].checked=document.check_form.checkall.checked;		  
		 }
}	 
</script> 
<script language="javascript">

function agreeTerm() {
	if(check_form.checkall.checked==true) {
		for (i = 0; i <= document.check_form.element.length; i++) 
		document.check_form.element[i].checked = true ;
	}
	else {
		for (i = 0; i <= document.check_form.element.length; i++) 
		document.check_form.element[i].checked = false ;
	}
}
</script>

	<SCRIPT type=text/javascript>
var adminForm = document.adminForm;

//***********************************************************************
function doAdd(osource, odes, imax){
	if(odes.options.length<imax) AddTo(osource, odes);
	if(odes.options.length>imax){
		for(i=odes.options.length-1; i>imax-1; i--)
		{
			odes.options[i].selected = true;
			RemoveFrom(odes);
		}//for
	}//if
}

function AddTo(_64,_65){
for(k=0;k<_64.length;k++){
IsExisted=false;
if(_64.options[k].selected==true){
stext=_64.options[k].text;
svalue=_64.options[k].value;

for(i=0;i<_65.length;i++){
if(svalue==_65.options[i].value)
{

IsExisted=true;
break;
}
}
if(IsExisted==false){
var _66=new Option(stext,svalue);
j=_65.length;

_65.options[j]=_66;
}
}
}
}
function RemoveFrom(_67){
for(k=_67.length-1;k>-1;k--){
if(_67.options[k].selected){
_67.options[k]=null;
}
}
}
function select_multi(_68)
 {
	   for(k=_68.length-1;k>-1;k--)
	   {
		_68.options[k].selected=true;
	   }
 }
 
</SCRIPT>
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
								 <?php	echo $this->Form->input('Admin.status',array('type'=>'checkbox','label'=>false,'class'=>'inputbox','id'=>'chekActive','onclick'=>'Checkvalue("chekActive")','style'=>'width:0px;')); ?>
								<label id="lbActive">Hoạt động</label>
							</td>
						</tr>
						<tr>
							<td class="key">
								<label for="listnhom">Ngày tạo</label>
							</td>
							<td>
								<?php  $time = time(); echo date("d-m-Y",$time); ?>
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
