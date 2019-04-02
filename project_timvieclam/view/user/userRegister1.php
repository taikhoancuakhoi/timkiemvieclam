
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
      <h3 style="text-align: center;">Đăng ký thành viên</h3>
    
      
      <div class="tab-content">
        <div class="tab-pane fade in active" id="newtv">
          <br>
          <form method="POST" action="?controller=user&action=checkUserRegister">
          <fieldset>
            <h5>Tài khoản thành viên <span style="color: red;">*</span></h5>
            <div class="form-group">
              <div class="right-inner-addon">
                    <b>Họ Và Tên</b>
                <input class="form-control input-lg" name="txt_name" placeholder="Họ và tên" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                    <b>Tên Tài Khoản</b>
                <input class="form-control input-lg" name="txt_tk" placeholder="Họ và tên" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Email</b>
                <input class="form-control input-lg" name="txt_email" placeholder="Email" type="email">
              </div>
              <h2 id="result"></h2>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Số điện thoại</b>
                <input class="form-control input-lg" name="txt_mobile" placeholder="Số điện thoại" id="" type="number" required>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Mật khẩu</b>
                <input class="form-control input-lg" name="txt_pass" placeholder="Mật khẩu" id="" type="password" required>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Nhập lại mật khẩu</b>
                <input class="form-control input-lg" name="txt_passreset" placeholder="Nhập lại mật khẩu" id="" type="password" required>
              </div>
            </div>
            <select name="txt_loaitk" id="" >
                            <option value="<?php echo $_GET['tk']; ?>">Người Tìm Việc</option>
            </select>
            <hr>
           <div class="tab-content">
            <div class="tab-pane fade in active text-center" id="pp">
              <button class="btn btn-primary btn-lg btn-block" id="validate" name="btnReg"><i class="fa fa-plus"></i> Đăng ký</button>
            </div>
          </div>
            
          </fieldset>
      </form>
       
          
        </div>
        <div class="tab-pane fade" id="user">
          <br>
          <form action="" method="POST">
          <fieldset>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Tài khoản</b>
                <input class="form-control input-lg" placeholder="Tài khoản" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <b>Mật khẩu</b>
                <input class="form-control input-lg" placeholder="Mật khẩu" type="password">
              </div>
            </div>

          </fieldset>
      </form>
          <br>
          <div class=" text-center">
            <button class="btn btn-primary btn-danger"><i class="fa fa-user"></i> Đăng nhập</button>
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
           <br>