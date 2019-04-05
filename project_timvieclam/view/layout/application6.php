<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>trang-admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="asset/css/bootstrap.css" rel="stylesheet" />
    <!-- animate -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css”>
    
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
   <!-- hover -->
   <link rel="stylesheet" href="asset/css/hover.css"/>
   <link rel="stylesheet" href="asset/css/hover-min.css" />
   
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
                <a class="navbar-brand" href="index.html"><img class="logo-img logo-img-main" src="asset/img/logo1.png" width="140px" style="margin-top: -20px;"></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Chào: <?php echo $_SESSION['tv']; ?> &nbsp; <a href="dangnhap-thanhvien.html" class="btn btn-danger square-btn-adjust" style="border-radius: 5px;">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="position: fixed;z-index: 10;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="asset/img/find_user.png" class="user-image img-responsive">
          </li>
         
          
                    <li>
                        <a  href="?controller=user&action=account"><i class="fas fa-clipboard-list fa-1x"></i> Quản lý tài khoản </a>
                    </li>
                     <li>
                        <a  href="?controller=user&action=company"><i class="fas fa-clipboard-list fa-1x"></i> Quản lý công ty</a>
                    </li>
                    <li>
                        <a  href="?controller=user&action=baiviet"><i class="fas fa-clipboard-list fa-1x"></i> Quản lý bài viết</a>
                    </li>
                    <li>
                        <a  href="?controller=user&action=nganh"><i class="fas fa-clipboard-list fa-1x"></i> Quản lý ngành</a>
                    </li>
                    <li>
                        <a  href="?controller=user&action=thanhpho"><i class="fas fa-clipboard-list fa-1x"></i> Quản lý thành phố</a>
                    </li>

                    
                                
                    
                         
                    
                </ul>
               
            </div>
            
        </nav>  

        <!-- /. NAV SIDE  -->
        <?= $content ?>
         <!-- /. PAGE WRAPPER  -->
        </div>

     <!-- /. WRAPPER  -->
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
                $('#dataTables-example1').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="asset/js/custom.js"></script>
    
   
</body>
</html>
