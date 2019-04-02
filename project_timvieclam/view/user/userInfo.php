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
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label>Họ và tên</label>
                                            <input type="text" class="form-control" value="<?php echo $data['info']['ten'] ?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="" value="<?php echo $data['info']['email']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Giới tính</label>

                                            <select class="form-control" value='<?php echo $data['info']['gioitinh'] ?>'>
                                                <option value="">Chọn giới tính</option>
                                                <option value="0">Nam</option>
                                                <option value="1">Nữ</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="number" class="form-control" placeholder="" value="<?php echo $data['info']['sdt']; ?>" />
                                        </div>
                                        
                                        <!-- <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" />
                                        </div> -->
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <input type="text" class="form-control" placeholder="" value="<?php echo $data['info']['diachi']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tỉnh/Thành phố</label>
                                            <select class="form-control" value="<?php echo $data['info']['id_thanhpho']; ?>">
                                                <option value=""></option>
                                                <?php foreach ($data['city'] as $key => $value) { ?>
                                                <option value="<?php echo $value['id_thanhpho'] ?>"><?php echo $value['ten_tp'] ?></option>
                                                
                                                <?php } ?>
                                                
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
                                            <input type="text" class="form-control" value="<?php echo $data['info']['bangcap']; ?>" />
                                            <!-- <input type="file" name=""> -->
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Xếp loại</label>
                                            <select class="form-control" value='<?php echo $data['info']['loai'] ?>'>
                                                <option value="">Chọn</option>
                                                <option value="1">Gioi</option>
                                                <option value="2">Kha</option>
                                                <option value="3">Trung Binh</option>
                                            </select>
                                            
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
                                            
                                            <input type="text" class="form-control" value="<?php echo $data['info']['kinhnghiem']; ?>" />
                                            
                                        </div>
                                        <br>
                                        <h3>Công việc mong muốn</h3><hr>
                                      <!--   <div class="form-group">
                                            <label>Nơi làm việc</label>
                                            <input type="text" class="form-control" />
                                            
                                        </div> -->
                                        <div class="form-group">
                                            <label>Ngành nghề</label>
                                            <select class="form-control" value='<?php echo $data['info']['id_nganh'] ?>'>
                                                <option value="">Chọn</option>
                                                <?php foreach ($data['job'] as $key => $value) { ?>
                                                <option value="<?php echo $value['id_nganh'] ?>"><?php echo $value['ten_nganh']; ?></option>
                                               <?php } ?>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Hình thức</label>
                                            <select class="form-control">
                                                <option value="">Chọn</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Mức lương mong muốn</label>
                                            <select class="form-control">
                                                <option value="">Chọn</option>
                                            </select>
                                        </div><br>
                                        <div class="form-group">
                                            
                                            <input type="submit" class="form-control btn btn-success"  value="Cập nhập" />
                                            
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