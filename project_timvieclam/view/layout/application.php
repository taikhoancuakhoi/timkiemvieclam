<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8"/>
        <title>SV job</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="asset/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- animate -->
    
        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="asset/css/animate.css" rel="stylesheet">
        <link href="asset/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="asset/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="asset/css/layout.min.css" rel="stylesheet" type="text/css"/>
       
          
        <!-- hover -->
        <link rel="stylesheet" href="asset/css/hover.css">
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>

<!-- 
		<div class="nav"> -->
		<!-- 	<div class="container"> -->
				<!-- <div class="header">
					<div class="row">
						<div class="col-lg-12 col-md-12">
								<ul class="menu">

									<li style="margin-top:-10px;padding-top: 10px"><a href="?controller=job&action=index"><img src="asset/images/logo.png" width="170px" height="100px"></a></li>
									<li><a href="?controller=job&action=camnang">CẨM NANG</a></li>
									<?php 
										if(isset($_SESSION['login']) && $_SESSION['login']==true){
											if (isset($_SESSION['quyen']) && $_SESSION['quyen']=='3') {
											
											
									?>	
										<li><a href="?controller=user&action=businessProfile">Quản Lý DN</a></li>
										 
										
									<?php	
										}else if(isset($_SESSION['quyen']) && $_SESSION['quyen']=='2'){
											
									?>
										<li><a href="?controller=user&action=userProfile">Quản Lý NTV</a></li>
									<?php 
										}else if(isset($_SESSION['quyen']) && $_SESSION['quyen']='1'){
											header("location:".path."?controller=user&action=indexAdmin");
										}
									 ?>
										<li><a href="?controller=user&action=logout">Đăng xuất</a></li>
									<?php
										
									}else{
									?>

									<li><a href="?controller=user&action=chooseRegister">ĐĂNG KÝ</a></li>
									<li><a href="?controller=user&action=login">ĐĂNG NHẬP</a></li>
									
										
									<?php 
										}
									 ?>
									
								</ul>
						</div>
						
					</div>
				</div> -->

<body id="body" data-spy="scroll" data-target=".header">
		<header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="?controller=job&action=index">
                                <img class="logo-img logo-img-main" src="asset/img/logo1.png" >
                                <img class="logo-img logo-img-active" src="asset/img/logo.png">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="?controller=job&action=index">Trang chủ</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="?controller=job&action=camnang">Cẩm nang</a></li>
									
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover"  href="?controller=user&action=chooseRegister">Đăng ký</a></li>


                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover"  href="?controller=user&action=login">Đăng nhập</a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->
      
			

	<?= @$content ?>




	 <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-5 sm-margin-b-30">
                            <h4 style="color: white;">Chức năng</h4>
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><i class="fas fa-user" style="color: white;"></i><a href="#"> Tài khoản</a></li>
                                <li class="footer-list-item"><i class="fas fa-comments" style="color: white;"></i><a href="#"> Phản hồi</a></li>
                                <li class="footer-list-item"><i class="fas fa-fist-raised" style="color: white;"></i><a href="#"> Việc làm phù hợp</a></li>
                                <li class="footer-list-item"><i class="fas fa-mail-bulk" style="color: white;"></i><a href="#"> Nhận thông báo qua email</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h4 style="color: white;">Điều khoản sử dụng</h4>
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><i class="fab fa-facebook-square" style="color: white;"></i><a href="#"> Tài khoản</a></li>
                                <li class="footer-list-item"><i class="fas fa-envelope" style="color: white;"></i><a href="#"> Phản hồi từ nhà tuyển dụng</a></li>
                                <li class="footer-list-item"><i class="fas fa-poll" style="color: white;"></i><a href="#"> Quy định và bảo mật</a></li>
                                <li class="footer-list-item"><i class="fab fa-old-republic" style="color: white;"></i><a href="#"> Thỏa thuận sử dụng</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2">
                            <h4 style="color: white;">Tư vấn</h4>
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><i class="fas fa-phone" style="color: white;"></i><a href="#"> Hotline:049499234</a></li>
                                <li class="footer-list-item"><i class="fas fa-phone" style="color: white;"></i><a href="#"> Tư vấn:09329949</a></li>
                                
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="asset/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="asset/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="asset/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="asset/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="asset/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="asset/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="asset/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="asset/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="asset/vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="asset/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="asset/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="asset/js/layout.min.js" type="text/javascript"></script>
        <script src="asset/js/components/wow.min.js" type="text/javascript"></script>
        <script src="asset/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="asset/js/components/maginific-popup.min.js" type="text/javascript"></script>
        <script src="asset/js/components/masonry.min.js" type="text/javascript"></script>
        <script src="asset/js/components/gmap.min.js" type="text/javascript"></script>
</body>
</html>