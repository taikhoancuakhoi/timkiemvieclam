<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>viec-da-ung</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="asset/css/bootstrap.css" rel="stylesheet" />
    <!-- datatable -->
    
     <!-- FONTAWESOME STYLES-->
    <link href="asset/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="asset/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="asset/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- TABLE STYLES-->
    <link href="asset/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   <!-- script -->
   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?controller=job&action=index"><img class="logo-img logo-img-main" src="asset/img/logo1.png" width="140px" style="margin-top: -20px;"></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Chào:công &nbsp; <a href="#" class="btn btn-danger square-btn-adjust" style="border-radius: 5px;">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="position: fixed;z-index: 10;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="asset/img/find_user.png" class="user-image img-responsive">
                    </li>
                
                    
                    <li>
                        <a class="active-menu"  href="trang-ca-nhan.html"><i class="fas fa-tv fa-1x"></i> Quản lý chung</a>
                    </li>
                     <li>
                        <a  href="quan-ly-ho-so.html"><i class="fas fa-clipboard-list fa-1x"></i> Quản lý hồ sơ</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-sitemap fa-1x"></i> Quản lý việc làm<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?controller=user&action=userJobSent">Việc làm đã ứng tuyển</a>
                            </li>
                            <li>
                                <a href="viec-lam-da-luu.html">Việc làm đã lưu</a>
                            </li>
                            <li>
                                <a href="cong-viec-phu-hop.html">Công việc phù hợp</a>
                            </li>
                        </ul>
                      </li>                
                    <li>
                        <a href="#"><i class="fas fa-envelope fa-1x"></i> Tin nhắn<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="hop-thu-den.html">Hộp thư đến</a>
                            </li>
                            <li>
                                <a href="hop-thu-di.html">Hộp thư đi</a>
                            </li>
                           
                        </ul>
                      </li>
                      <li>
                        <a href="#"><i class="fas fa-envelope fa-1x"></i> Thông tin cá nhân<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="thay-doi-mat-khau.html">Thay đổi mật khẩu</a>
                            </li>
                           
                        </ul>
                      </li>    
                    
                </ul>
               
            </div>
            
        </nav>  

     <!--========== SLIDER ==========-->
       <?= @$content ?>
        <!--========== FOOTER ==========-->
         <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="asset/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="asset/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="asset/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="asset/js/morris/raphael-2.1.0.min.js"></script>
    <script src="asset/js/morris/morris.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="asset/js/dataTables/jquery.dataTables.js"></script>
    <script src="asset/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example10').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="asset/js/custom.js"></script>
    
   
</body>
</html>