	<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<div class="login">
								<div class="page-header" style="text-align: center;font-size:27px;font-family: both;">ĐĂNG KÝ THÀNH VIÊN</div>
								<form action="?controller=user&action=checkRegister" method="post" onsubmit="return checkValidate();">
            <table class="table table-hover table-responsive table-bordered">
            	 <tr>
                    <th>Họ Tên</th>
                    <td>
                        <input type="text" name="txt_name" id="txtUser" class="form-control">
                    </td>
                    <td>
                        <span id="lbUser" class="msg"></span>
                    </td>
                </tr>
            	 <tr>
                    <th>Email</th>
                    <td>
                        <input type="text" name="txt_email" id="txtEmail" class="form-control">
                    </td>
                    <td>
                        <span id="lbEmail" class="msg"></span>
                    </td>
                </tr>
                <tr>
                    <th>Mật khẩu</th>
                    <td>
                        <input type="password" name="txt_pass" id="txtPass" class="form-control">
                    </td>
                    <td>
                        <span id="lbPass" class="msg"></span>
                    </td>
                </tr>
                <tr>
                    <th>Nhập lại mật khẩu</th>
                    <td>
                        <input type="password" name="txt_passreset" id="txtPassreset" class="form-control">
                    </td>
                    <td>
                        <span id="lbPassreset" class="msg"></span>
                    </td>
                </tr>
               
                <tr>
                    <th>Số điện thoại</th>
                    <td>
                        <input type="text" name="txt_mobile" id="txtMobile" class="form-control">
                    </td>
                    <td>
                        <span id="lbMobile" class="msg"></span>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" name="btnReg" id="btnReg" value="Đăng ký" class="btn btn-success form-control">
                    </td>
                    <td></td>
                </tr>
            </table>
        </form>
							</div>
						</div>
						<div class="col-lg-2"></div>
					</div>