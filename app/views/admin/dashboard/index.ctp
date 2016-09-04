
<div id="content-box">
	<div class="border">
		<div class="padding">
			<div id="element-box">
				<div class="t">
					<div class="t">
						<div class="t"></div>
					</div>
				</div>
				<div class="m">
					<table class="adminform">
						<tbody>
							<tr>
							<td width="55%" valign="top">
								<div id="cpanel">
									<div style="float:left;">
										<div class="icon">
											<a href="<?php echo DOMAIN;?>/products/admin_add">
												<img src="<?php echo DOMAIN;?>/images/header/icon-48-article-add.png" alt="Thêm bài sản phẩm"><span>Thêm mới sản phẩm</span>
											</a>
										</div>
									</div>
									<div style="float:left;">
										<div class="icon">
											<a href="<?php echo DOMAIN;?>/products/admin_index">
												<img src="<?php echo DOMAIN;?>/images/header/icon-48-article.png" alt="Quản lý sản phẩm"><span>Quản lý sản phẩm</span>
											</a>
										</div>
									</div>
									<div style="float:left;">
										<div class="icon">
											<a href="">
												<img src="<?php echo DOMAIN;?>/images/header/icon-48-frontpage.png" alt="Quản lý trang chủ"><span>Quản lý trang chủ</span>
											</a>
										</div>
									</div>
									<div style="float:left;">
										<div class="icon">
											<a href="<?php echo DOMAIN;?>/managements/admin_index">
												<img src="<?php echo DOMAIN;?>/images/header/icon-48-user.png" alt="Quản lý thành viên"><span>Thành viên quản trị</span>
											</a>
										</div>
									</div>
									<div style="float:left;">
										<div class="icon">
											<a href="<?php echo DOMAIN;?>/company/admin_index">
												<img src="<?php echo DOMAIN;?>/images/header/icon-48-config.png" alt="Cấu hình chung"><span>Cấu hình website</span>
											</a>
										</div>
									</div>
								</div>
							</td>
							<td width="45%" valign="top">
								<div id="content-pane" class="pane-sliders">
									<div class="panel">
										<h3 class="title jpane-toggler-down" id="cpanel-panel-custom"><span>Thông kê đơn đặt hàng</span></h3>
										<div class="jpane-slider content" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: auto;">
											<form method="post" action="index.php?option=com_users">
												<table class="adminlist">
													<tbody>
														<tr>
															<td width="5%">1</td>
															<td>
																<a href="<?php echo DOMAIN;?>/invoices/admin_index_stt/0" title="Sửa thành viên">Tổng số đơn hàng chưa cập nhật</a>				
															</td>
															<td>
																<?php echo count($allInvoices); ?>			
															</td>
														</tr>
													</tbody>
												</table>
											</form>
										</div>
									</div>
								</div>
							</td>
							</tr>
						</tbody>
					</table>
					<div class="clr"></div>
				</div>
				<div class="b">
					<div class="b">
						<div class="b"></div>
					</div>
				</div>
			</div>
			<noscript>
				!Cảnh báo! Javascript phải được bật để chạy được các chức năng trong phần Quản trị				
			</noscript>
			<div class="clr"></div>
		</div>
	</div>
</div>