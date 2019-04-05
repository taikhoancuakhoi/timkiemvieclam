<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Quản lý hồ sơ</h2>   
                    
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thông tin chung
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Thông tin hồ sơ</h3><hr>
                                    <form action="?controller=user&action=updateInfo" method="post">
                                        <div class="form-group">
                                            <label>Họ và tên</label>
                                            <input type="text" name="txt_name" class="form-control" value="<?php echo $data['info']['ten'] ?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="txt_email" class="form-control" placeholder="" value="<?php echo $data['info']['email']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Giới tính</label>
                                            
                                            <select class="form-control" name="txt_gioitinh">
                                              <option value="" selected disabled hidden>Chọn giới tính</option> 
                                              <?php if($data['info']['gioitinh']==0){ ?>
                                                <option value="0" selected>Nam</option>
                                                <option value="1">Nữ</option>
                                                <?php }else{ ?>
                                                <option value="0">Nam</option>
                                                <option value="1" selected>Nữ</option>    
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="number" name="txt_sdt" class="form-control" placeholder="" value="<?php echo $data['info']['sdt']; ?>" />
                                        </div>
                                        
                                        <!-- <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" />
                                        </div> -->
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <input type="text" name="txt_diachi" class="form-control" placeholder="Điền địa chỉ" value="<?php echo $data['info']['diachi']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tỉnh/Thành phố</label>
                                            <select class="form-control" name="txt_tp">
                                                 <option value=""></option>
                                                <?php foreach ($data['city'] as $key => $value): 
                                                    if ($data['info']['id_thanhpho'] == $value['id_thanhpho']) {
                                                ?>
                                                    <option value="<?php echo $value['id_thanhpho'] ?>" selected><?php echo $value['ten_tp'] ?></option>
                                                <?php }else{ ?>
                                                     <option value="<?php echo $value['id_thanhpho'] ?>"><?php echo $value['ten_tp'] ?></option>
                                                <?php } endforeach ?>
                                                      
                                                    
                                                    


                                               
                                           
                                                
                                            </select>
                                        </div>
                                        <!-- div class="form-group">
                                            <label>Quận/Huyện</label>
                                            <select class="form-control">
                                                <option value="">Chọn</option>
                                                <option value=""></option>
                                            </select>
                                        </div> -->
                                        <br>
                                        <h3>Trình độ học vấn</h3><hr/>
                                        
                                        <div class="form-group">
                                            <label>Bằng cấp/chứng chỉ</label>
                                            <input type="text" name="txt_chungchi" class="form-control" value="<?php echo $data['info']['bangcap']; ?>" />
                                            <!-- <input type="file" name=""> -->
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Ngoại Ngữ</label>
                                            <input type="text" name="txt_ngoaingu" class="form-control" value="<?php echo $data['info']['ngoaingu']; ?>" />
                                            <!-- <input type="file" name=""> -->
                                            
                                        </div>
                                        <h3>Kinh nghiệm</h3><hr>
                                        <!-- <div class="form-group">
                                            <label>Vị trí đã làm</label>
                                            <input type="text" class="form-control" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nơi làm việc</label>
                                            <input type="text" class="form-control" />
                                            
                                        </div> -->
                                        <div class="form-group">
                                            
                                            <input type="text" name="txt_kn" class="form-control" value="<?php echo $data['info']['kinhnghiem']; ?>" />
                                            
                                        </div>
                                        <br>
                                        <h3>Công việc mong muốn</h3><hr>
                                      <!--   <div class="form-group">
                                            <label>Nơi làm việc</label>
                                            <input type="text" class="form-control" />
                                            
                                        </div> -->
                                   
                                        <div class="form-group">
                                            <label>Hình thức</label>
                                            <select class="form-control" name='txt_hinhthuc'>
                                                <option value="" selected disabled hidden>Chọn</option>
                                                <?php if ($data['info']['hinhthuc']==0) { ?>
                                                
                                                <option value="0" selected>Full-Time</option>
                                                <option value="1">Part-Time</option>
                                                <?php }else{ ?>
                                                <option value="0">Full-Time</option>
                                                <option value="1" selected>Part-Time</option>

                                                <?php } ?>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Mức lương mong muốn</label>
                                            <select class="form-control" name="txt_luong">
                                                <option value="">Chọn</option>
                                                <?php if ($data['info']['Luongmm'] == 0) { ?>
                                                <option value="0" selected>1.000.000-4.000.000</option>
                                                <option value="1">5.000.000-8.000.000</option>
                                                <option value="2">> 9.000.000</option>
                                                <?php }else if($data['info']['Luongmm'] == 1){ ?>
                                                <option value="0" >1.000.000-4.000.000</option>
                                                <option value="1" selected>5.000.000-8.000.000</option>
                                                <option value="2">> 9.000.000</option>
                                                <?php }else{ ?>
                                                <option value="0" >1.000.000-4.000.000</option>
                                                <option value="1" >5.000.000-8.000.000</option>
                                                <option value="2" selected>> 9.000.000</option>
                                                <?php } ?>
                                            </select>
                                        </div><br>
                                        <div class="form-group">
                                            
                                            <input type="submit" name="btn" class="form-control btn btn-success"  value="Cập nhập" />
                                            
                                        </div>

                                    </form>
                             
                    </div>
                                
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>