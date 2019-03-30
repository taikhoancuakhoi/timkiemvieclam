<div class="promo-block">
            <div class="container">
                <div class="margin-b-40">
                    <h1 class="promo-block-title wow pulse" data-wow-offset="10" data-wow-delay="1s" data-wow-duration="1s" >Tìm kiếm việc làm cho SINH VIÊN </h1>
                    <p class="promo-block-text wow pulse">Uy tín - Tốc độ - Phù hợp</p>
                </div>
                <!-- Search form -->
                     <input class="form-control" type="text" placeholder="Search" style="border-radius: 10px;width: 70%;margin-left: 175px;" ><br>
                    <p><select style="height: 40px;width: 350px;border-radius: 5px">

                        <option value="">Tất cả ngành</option>
                        <?php 

                                foreach ($data['nganh'] as $key => $value) {
                                    
                                    
                            ?>
                        <option style="color: black;" value="<?php echo $value['id_nganh']; ?>"><?php echo $value['ten_nganh']; ?></option>
                        <?php
                                }
                             ?>
                    </select>
                    <span>
                        <select style="height: 41px;width: 350px;border-radius: 5px">
                            <option value="" style="color: black;">Địa chỉ</option>
                            <?php 
                                foreach ($data['thanhpho'] as $key => $value) {
                            ?>
                            <option style="color: black;" value="<?php echo $value['id_thanhpho']; ?>"><?php echo $value['ten_tp']; ?></option>
                            <?php
                                }
                             ?>
                        </select>
                    </span>
                </p>
                <input type="submit" name="" class="btn btn-primary"  value="Search" style="width: 100px;height: 40px;">                    
            </div>
        </div>
        <!--========== SLIDER ==========-->
<br>
        <!--========== PAGE LAYOUT ==========-->
        <!-- Products -->
        <div id="products">
            <div class="container content-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-iteration="1">Việc Làm tuyển gấp <span style="color: red;font-size: 20px;">*</span></h2>
                        
                    </div>
                </div>
                <!--// end row -->
                    
                <div class="row">

                    <!-- Latest Products -->
                    <?php 
                        foreach ($data['baituyen'] as $job => $value) { 

                    ?>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/01.jpg"></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="?controller=job&action=detail&id=<?php echo $value['id_baituyen'] ?>" ><?php echo ucwords($value['tieude']); ?></a></h4>
                        <p><?php echo ucwords($value['ten']); ?></p>
                        <p>Lương: <span><?php echo $value['mucluong']; ?></span></p>
                        <p>Ngày đăng: <?php echo date("d-m-Y", strtotime($value['ngaydang'])); ?></p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->
                         <?php 
                                    }
                        ?>
                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/02.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->
                       
                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- ========hết chuyển động bên trái bay vào ==========-->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- ============hết chuyển động bên phải bay vào =============-->
                    <!-- End Latest Products -->
                </div><br><br>
                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="margin-b-20">
                           <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->
                </div>


                <!--// end row -->
            </div>

            </div> 
        <br><br>
        <!-- End Products -->
        <!-- phần việc làm mới nhất -->
         <div id="products">
            <div class="container content-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-iteration="1">Việc Làm mới nhất <span style="color: red;font-size: 20px;">*</span></h2>
                        
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px"  src="asset/img/970x647/01.jpg"></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#" >Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/02.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->
                </div><br><br>
                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="margin-b-20">
                           <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px" ><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <div class="col-sm-2 sm-margin-b-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="margin-b-20">
                            <a href="#"><img class="img-responsive button bubble-float-bottom" style="margin-left: -12px" src="asset/img/970x647/03.jpg" ></a>
                        </div>
                        <h4 style="font-size: 15px"><a href="#">Quản lý nhà hàng</a></h4>
                        <p>Công ty vingroup</p>
                        <p>Lương: <span>2.000.000 đ</span></p>
                        <p>Ngày đăng: 20-10-2019</p>
                        <a class="link button pulse-grow" href="#">Xem chi tiết</a>
                    </div>
                    <!-- End Latest Products -->
                </div>


                <!--// end row -->
            </div>

            </div> 
            <!-- hết phân việc làm mới nhất -->     
        <br><br>
        <!-- Service -->
        <div id="service">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="content-lg container">
                    <h2 style="text-align: center;" class="wow bounceInUp">Cẩm nang</h2>
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">

                                <div class="service-element">
                                    <img src="asset/img/970x647/01.jpg" width="130px">
                                </div>
                                <div class="service-info">
                                    <h3>4 lời khuyên làm CV lỗi thời cần xoá khỏi tâm trí</h3>
                                    <p class="margin-b-5">Có những giai đoạn mà khí thế tìm việc của bạn lên rất cao nhưng kết quả thu về thật đáng thất vọng: không có công việc nào như ý hoặc tệ hơn, không nhận được bất cứ lời mời phỏng vấn nào. Khí thế của bạn cũng theo đó mà vơi dần và một lúc nào đấy chuyển hoá thành “niềm    </p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">

                                <div class="service-element">
                                    <img src="asset/img/970x647/01.jpg" width="130px">
                                </div>
                                <div class="service-info">
                                    <h3>4 lời khuyên làm CV lỗi thời cần xoá khỏi tâm trí</h3>
                                    <p class="margin-b-5">Có những giai đoạn mà khí thế tìm việc của bạn lên rất cao nhưng kết quả thu về thật đáng thất vọng: không có công việc nào như ý hoặc tệ hơn, không nhận được bất cứ lời mời phỏng vấn nào. Khí thế của bạn cũng theo đó mà vơi dần và một lúc nào đấy chuyển hoá thành “niềm    </p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">

                                <div class="service-element">
                                    <img src="asset/img/970x647/01.jpg" width="130px">
                                </div>
                                <div class="service-info">
                                    <h3>4 lời khuyên làm CV lỗi thời cần xoá khỏi tâm trí</h3>
                                    <p class="margin-b-5">Có những giai đoạn mà khí thế tìm việc của bạn lên rất cao nhưng kết quả thu về thật đáng thất vọng: không có công việc nào như ý hoặc tệ hơn, không nhận được bất cứ lời mời phỏng vấn nào. Khí thế của bạn cũng theo đó mà vơi dần và một lúc nào đấy chuyển hoá thành “niềm    </p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Service -->
<br>