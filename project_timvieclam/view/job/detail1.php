<div class="promo-block">
            <div class="container">
                <div class="margin-b-40">
                    
                </div>
                                    
            </div>
        </div>
        <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="product">
                            <div class="anh-dn">
                                <img src="asset/img/500x500/02.jpg" width="160px" style="padding-top: 10px">
                            </div>
                     
                            <div class="text-dn">
                                <h4><?php echo $data['tieude']; ?></h4>
                                <h5><?php echo $data['ten'] ?></h5>
                            </div><br>
                            <p style="color: black;margin-left: 20px">Ngày Đăng: <?php echo date("d-m-Y",strtotime($data['ngaydang'])); ?></p>
                            <a href="#" class="btn btn-default" style="margin-left: 20px;"><i class="far fa-star" style="color: yellow;"></i> Lưu việc làm</a>
                             <h3 style="text-align: center;">Thông tin tuyển dụng</h3>
                            <div class="thong-tin-td-left" style="margin-left: 60px;">
                                    <p style="color: black;">Địa điểm làm viêc: <span style="color:red;font-size: 15px;font-weight: bold;"><?php echo $data['ten_tp']; ?></span></p>
                                    <p style="color: black;">Ngành nghề: <span style="color:red;font-size: 15px;font-weight: bold;"><?php echo $data['ten_nganh']; ?></span></p>
                                    <p style="color: black;">Hình thức: <span style="color:red;font-size: 15px;font-weight: bold;"><?php echo $data['hinhthuc']; ?></span></p>
                                    <p style="color: black;">Số lượng cần tuyển: <span style="color:red;font-size: 15px;font-weight: bold;"><?php echo $data['soluong'] ?></span> người</p>

                            </div>
                            <div class="thong-tin-td-right" style="float: right;margin-top: -145px;margin-right: 40px;  ">
                                <p style="color: black;">Lương: <span style="color:red;font-size: 15px;font-weight: bold;"><?php echo $data['mucluong']; ?></span></p>
                                <p style="color: black;">Hạn nộp: <span style="color:red;font-size: 15px;font-weight: bold;"><?php echo $data['hannop']; ?></span></p>
                                <p style="color: black;">Yêu cầu giới tính: <span style="color:red;font-size: 15px;font-weight: bold;"><?php 
                                                if ($data['gioitinh'] == 1) {
                                                    echo "Nữ";
                                                }else{
                                                    echo "Nam";
                                                }
                                             ?></span></p>
                                <p style="color: black;">Độ tuổi: <span style="color:red;font-size: 15px;font-weight: bold;"><?php echo $data['tuoi'];  ?></span></p>

                            </div><br>
                            <h3 style="margin-left: 56px">Mô tả công việc</h3>
                            <div class="text-mota" style="margin-left: 60px">
                                <p style="color: black">
                                    <?php echo $data['mota']; ?>
                                </p>
                            </div><br>
                            <h3 style="margin-left: 56px">Thông tin liên hệ</h3>
                            <div class="text-mota" style="margin-left: 60px">
                                <p style="color: black">
                                    <?php echo $data['lienhe']; ?>
                                </p>
                               <!--  <p style="color: black">Email liên hệ:
                                </p> -->
                            </div>
                            
                             <form action="?controller=user&action=checkFile&id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="CVcongviec" style="margin:10px 20px">
                                        <?php 
                                            if (isset($_SESSION['tv'])) {
                                           
                                                 $sql1 = "SELECT * FROM tb_ungtuyen WHERE id_baituyen =\"".$_GET['id']."\" AND id_thanhvien=\"".$_SESSION['tv']."\"";
                                        
                                              $stm =DB::getInstance()->prepare($sql1);
                                              $stm->execute();
                                              // $row = $stm->fetch(PDO::FETCH_ASSOC);
                                              // echo $row;
                                              $count = $stm->rowCount();
                                              if ($count>0) {   
                                             
                                              
                                         ?>
                                        <input type="submit" name="submit" value="ĐÃ NỘP HỒ SƠ" class="btn btn-danger form-control" style="background:red;margin-left: 20px;width: 95%;height: 40px"disabled>
                                        <?php }else{  echo "<script type='text/javascript'>alert('Mời thêm file CV bên dưới trước khi nộp hồ sơ');</script>" ?>
                                        <input type="submit" name="submit" value="NỘP HỒ SƠ" class="btn btn-success form-control" style="margin-left: 20px;width: 95%;height: 40px">
                                    <?php }}else{?>
                                        <input type="submit" name="submit" value="NỘP HỒ SƠ" class="btn btn-success form-control" style="margin-left: 20px;width: 95%;height: 40px">
                                    <?php } ?>
                                    </form>

                        </div><br> 
                        

                    </div>
                    <div class="col-xs-4">
                        <div class="viec-lam-tt">
                            <h3 style="text-align: center;">Việc làm tương tự</h3>
                            <div class="anh-kem-text">
                                <img src="asset/img/500x500/03.jpg" alt="" width="130px" style="padding-left: 6px;">
                                <p style="float: right;margin-right: 80px;"><a href="#" style="color: black">Công ty Vingroup</a>  
                                </p>
                                <div style="clear: both;"></div>
                                <p style="float: right;margin-right: 88px;margin-top: -100px;color: black">Địa điểm:Hà nội</p>
                                <p style="float: right;margin-right: 88px;margin-top: -70px;color: black">Lương: <span style="color: blue">2-3 triệu</span>   </p>
                            </div><hr>
                        </div>
                        <div class="viec-lam-tt">
                            <h3 style="text-align: center;">Việc làm tương tự</h3>
                            <div class="anh-kem-text">
                                <img src="asset/img/500x500/03.jpg" alt="" width="130px" style="padding-left: 6px;">
                                <p style="float: right;margin-right: 80px;"><a href="#" style="color: black">Công ty Vingroup</a>  
                                </p>
                                <div style="clear: both;"></div>
                                <p style="float: right;margin-right: 88px;margin-top: -100px;color: black">Địa điểm:Hà nội</p>
                                <p style="float: right;margin-right: 88px;margin-top: -70px;color: black">Lương: <span style="color: blue">2-3 triệu</span>   </p>
                            </div><hr>
                        </div>
                        <div class="viec-lam-tt">
                            <h3 style="text-align: center;">Việc làm tương tự</h3>
                            <div class="anh-kem-text">
                                <img src="asset/img/500x500/03.jpg" alt="" width="130px" style="padding-left: 6px;">
                                <p style="float: right;margin-right: 80px;"><a href="#" style="color: black">Công ty Vingroup</a>  
                                </p>
                                <div style="clear: both;"></div>
                                <p style="float: right;margin-right: 88px;margin-top: -100px;color: black">Địa điểm:Hà nội</p>
                                <p style="float: right;margin-right: 88px;margin-top: -70px;color: black">Lương: <span style="color: blue">2-3 triệu</span>   </p>
                            </div>
                            <hr>
                          
                               
                        </div>
                         <ul style="margin-left: 250px" class="pagination">    
                                    <li ><a href="#">Tiếp tục</a></li>
                                  </ul>
                    </div>  
                </div>
            </div>