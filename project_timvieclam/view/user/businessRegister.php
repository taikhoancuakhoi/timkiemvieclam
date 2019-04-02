<!--     <div class="row">
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
                    </div> -->
<div class="promo-block">
            <div class="container">
                <div class="margin-b-40">
                </div>
                                    
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
    <div class="col-md-4 col-md-offset-4" style="box-shadow: 1px 1px 1px 1px #ccc;">
      <br>
      <!-- Nav tabs -->
      <h3>Đăng ký cho nhà tuyển dụng</h3>
      
      
      <div class="tab-content">
        <div class="tab-pane fade in active" id="new">
          <br>
          <form method="POST" action="?controller=user&action=checkBusinessRegister">
          <fieldset>
            <h5>Tài khoản <span style="color: red;">*</span></h5>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Nhập email</b>
                <input class="form-control input-lg" name="txt_email" placeholder="Nhập email" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Nhập mật khẩu</b>
                <input class="form-control input-lg" name="txt_pass" placeholder="Password" type="password" required>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Nhập lại mật khẩu</b>
                <input class="form-control input-lg" name="txt_passreset" placeholder="Nhập lại Password" id="" type="password" required>
              </div>
            </div><hr style="border: 0.4px solid black">
            <h5>Thông tin công ty <span style="color: red;">*</span></h5>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Tên Nhà Tuyển Dụng</b>
                <input class="form-control input-lg" placeholder="" name="txt_tenntd" id="" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Số điện thoại liên hệ</b>
                <input class="form-control input-lg" name="txt_sdt" placeholder="" id="" type="number" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Địa chỉ công ty</b>
                <input class="form-control input-lg" placeholder="Địa chỉ công ty" name="txt_diachi" id="" type="text" required>
              </div>
            </div>
            <select name="txt_loaitk" id="">
                            <option value="<?php echo $_GET['tk']; ?>">Nhà Tuyển Dụng</option>
            </select>
            <hr>
            <div class="tab-content">
            <div class="tab-pane fade in active text-center" id="pp">
              <button class="btn btn-primary btn-lg btn-block" name="btnReg"><i class="fa fa-plus"></i> Đăng ký</button>
            </div>
          </div>
          </fieldset>
      </form>
     
          
        </div>
        
      </div>
    </div>
  </div>
        </div>
           <br>