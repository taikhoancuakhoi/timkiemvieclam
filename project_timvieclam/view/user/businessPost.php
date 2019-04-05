
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Thông tin công việc</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    
                                    <form action="?controller=user&action=checkBusinessPost" method="post">
                                        <div class="form-group">
                                            <label>Tiêu đề công việc</label>
                                            <input type="text" name="txt_tieude" class="form-control" placeholder="Ví dụ: Kế Toán, Phục Vụ Nhà Hàng...">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng tuyển</label>
                                            <input type="number" name="txt_num" class="form-control" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tuổi</label>
                                            <input type="number" name="txt_tuoi" class="form-control" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Hình thức</label>
                                             <input type="text" name="txt_hinhthuc" placeholder="Full Time or Part Time" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Mức lương</label>
                                             <input type="text" name="txt_luong" placeholder="vd: 2000000 VND" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Địa điểm làm việc</label>
                                            <input type="text"  class="form-control" name="txt_diadiem">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Thành Phố</label>
                                            <select class="form-control" name="txt_idtp">
                                                <option value="">Chọn</option>
                                                <?php foreach ($data['city'] as $key => $value) { ?>
                                                <option value="<?php echo $value['id_thanhpho'] ?>"><?php echo $value['ten_tp']; ?></option>
                                                <?php } ?>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngành nghề</label>
                                            <select class="form-control" name="txt_nghe">
                                                <option value="">Chọn</option>
                                                <?php foreach ($data['job'] as $key => $value) { ?>
                                                <option value="<?php echo $value['id_nganh'] ?>"><?php echo $value['ten_nganh']; ?></option>
                                                <?php } ?>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả công việc</label>
                                            <textarea class="form-control" name="editor1" id="editor1" rows="10" cols="8" name="txt_mota">This is my textarea</textarea>
                                            <script>CKEDITOR.replace('editor1');</script>
                                        </div>
                                        <br>
                                        <h3>Yêu cầu công việc</h3><hr>

                                        <div class="form-group">
                                            <label>Bằng cấp</label>
                                            <input type="text" class="form-control" name="txt_bang" placeholder="Nhập bằng cấp">   
                                        </div>
                                        <div class="form-group">
                                            <label>Giới tính</label>
                                            <select class="form-control" name="txt_gioi">
                                              <option value="" selected disabled hidden>Chọn giới tính</option> 
                                                <option value="0" selected>Nam</option>
                                                <option value="1">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Hạn nộp hồ sơ</label>
                                            <input type="date"  class="form-control" name="txt_han">
                                        </div>
                                        <br>
                                        <h3>Thông tin liên hệ</h3>
                                        
                                        <div class="form-group">
                                           
                                            <textarea name="txt_lienhe" id="editor2" cols="30" rows="10"></textarea>
                                            <script>CKEDITOR.replace("editor2");</script>
                                            
                                            
                                        </div>
                                        <h3>Ngày Đăng</h3>
                                        
                                        <div class="form-group"> 
                                            <input type="text" name="txt_ngaydang" value="<?php echo date('d/m/Y'); ?>">
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <a href="trang-doanh-nghiep.html" class="btn btn-default" style="margin-left: 470px;"><i class="fas fa-undo"></i> Bỏ qua</a>
                                            <input type="submit" name="btn" class=" btn btn-primary"  value="Đăng tuyển dụng" />
                                            
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