<?php 
	if (isset($_POST['txt_checkbox'])) {
		#
	}
 ?>
		
				<div class="container">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<div class="login">
								<h3 style="text-align: center;font-family: both;color:">Login Thành Viên</h3>
								<form action="?controller=user&action=checkLogin" method="POST" onsubmit="return checkLogin();">

									<table class="table">
										
										

										<tr>
											<td>Tên đăng nhập</td>
											<td><input type="text" name="txt_email" placeholder="Điền thông tin đăng nhập" class="form-control"></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><input type="password" name="txt_pass" placeholder="Nhập mật khẩu" class="form-control"></td>
										</tr>
										<tr>
											<td></td>
											<td><input type="checkbox" name="txt_checkbox"> Nhớ thông tin tài khoản</td>
										</tr>
										<tr>
											<td></td>
											<td><input type="submit" name="submit" class="btn btn-primary form-control" style="width: 40%" value="Đăng nhập"></td>
										</tr>
										

									</table>
								</form>
							</div>
						</div>
						<div class="col-lg-2"></div>
					</div>
				</div>

		