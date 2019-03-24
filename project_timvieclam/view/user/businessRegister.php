    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="login">
                                <div class="page-header" style="text-align: center;font-size:27px;font-family: both;">ĐĂNG KÝ NHÀ TUYỂN DỤNG</div>
                                <form action="?controller=user&action=checkBusinessRegister" method="post" onsubmit="return checkValidate();">
            <table class="table table-hover table-responsive table-bordered">
                 <tr>
                    <th>Tên nhà tuyển dụng</th>
                    <td>
                        <input type="text" name="txt_tenntd" id="txt_email" class="form-control">
                    </td>
                    <td>
                        <span id="lbUser" class="msg"></span>
                    </td>
                </tr>
                 <tr>
                    <th>Tên tài khoản</th>
                    <td>
                        <input type="text" name="txt_tentk" id="txt_tk" class="form-control">
                    </td>
                    <td>
                        <span id="lbTentk" class="msg"></span>
                    </td>
                </tr>
                 <tr>
                    <th>Email Liên Hệ</th>
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
                    <th>Địa Chỉ</th>
                    <td>
                        <input type="text" name="txt_diachi" class="form-control">
                    </td>
                    <td>
                        <span id="" class="msg"></span>
                    </td>
                </tr>
                <tr>
                    <th>Số điện thoại liên hệ</th>
                    <td>
                        <input type="text" name="txt_sdt" id="txtMobile" class="form-control">
                    </td>
                    <td>
                        <span id="lbMobile" class="msg"></span>
                    </td>
                </tr>
                <tr>
                    <th>Thành Viên</th>
                    <td>
                        <select name="txt_loaitk" id="">
                            <option value="<?php echo $_GET['tk']; ?>">Nhà Tuyển Dụng</option>
                        </select>
                    </td>
                    <td>
                        <span id="" class=""></span>
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