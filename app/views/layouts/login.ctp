<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Đăng nhập hệ thống</title>
	<?php echo  $this->Html->css(array('system','login','rounded','general','icon','menu','component','PopupPanel','dhtmlgoodies_calendar')); ?>
<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo DOMAIN?>/css/ie7.css" type="text/css" />
	<![endif]-->
	<!--[if lte IE 6]>
	<link rel="stylesheet" href="<?php echo DOMAIN?>/css/ie6.css" type="text/css" />
	<![endif]-->
<?php echo $javascript->link(array('jquery-1.4.2','jquery-validate','md5','utils','jquery-menu','script')); ?>

<style type="text/css">
form#form-login label.error, label.error {
	color: red;
	font-style: italic;
	font-size: 1.0em;
	font-weight: normal;
}
</style>

<script language="javascript" type="text/javascript">
/*<![CDATA[*/
	$(function() {
		
		$('#lnkLogin').click(function(){
			$('#form-login').submit();
		});

	});
/*]]>*/
</script>

</head>
<body>
<div id="element-box" class="login" style="margin-top:100px;">
			<div class="t"><div class="t"><div class="t"></div></div></div>
			<div class="m">
				<h1 style="font-size:20px; margin-bottom:25px;"> <center> Đăng nhập hệ thống</center></h1>
				<div id="section-box">
					<div class="t"><div class="t"><div class="t"></div></div></div>

					<div class="m">
						<form action="<?php echo DOMAIN?>/login/admin_index" method="post" name="login" id="form-login" style="clear: both;">
							<p id="form-login-username">
								<label for="txtUserName">Username</label>
								<input name="name" id="name" type="text" class="inputbox1" size="15" />
							</p>
							<p id="form-login-password">
								<label for="txtPasswd">Password</label>

								<input name="pass" id="pass" type="password" class="inputbox1" size="15" />
                                <input name="type" type="hidden" value="0" />
							</p>
						<!--	<p id="form-login-lang" style="clear: both;">
								<label for="cbLang">Language</label>
								<select name="txtlang" id="cbLang" class="inputbox1" >
									<option value="0" selected >Tiếng Việt</option>
									<option value="1" >English</option>
								</select>
							</p>-->
							<div class="button_holder">
								<div class="button1">
									<div class="next">
										<a id="lnkLogin">Login</a>
									</div>
								</div>

							</div>
							<div class="clr"></div>
							
						</form>
						<div class="clr"></div>
					</div>
					<div class="b"><div class="b"><div class="b"></div></div></div>

				</div>
				<p>Sử dụng môt tên truy cập và mật khẩu hợp lệ để được truy cấp vào Quản trị.</p>
				<p><a href="<?php echo DOMAIN?>">Trở lại Trang chủ</a></p>
				<div id="lock"></div>
				<div class="clr"></div>
			</div>
			<div class="b"><div class="b"><div class="b"></div></div></div>
		</div>

<div id="footer">
	<p class="copyright">Thiết kế bởi <a href="http://www.cityshop.vn">www.cityshop.vn</a></p>
</div>
</body>
</html>
