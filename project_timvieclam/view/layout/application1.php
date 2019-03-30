
<?php if (isset($_SESSION['login']) && $_SESSION['login']==true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SV Job</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/fontawesome.min.css">
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="asset/js/checkValidate.js" type="text/javascript">  -->
	<script src="asset/js/checkValidate.js"></script>
  	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
  	<link rel="stylesheet" href="asset/css/tin.css" type="text/css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="stylesheet" href="text/css" href="asset/css/style2.css">
	<div class="user-left-information">
</head>

<body>
	
			<div class="form-case">
	<div class="user-left-information">
			<div class="header-left">
				<a href="#"><img src="images/logo1.png" width="160px" ></a>
			</div>
			<div class="image-user">
				<a href="#"><img src="images/anh2.jpg" width="140xp"></a>
			</div>
			<p style="text-align: center;"><span style="color:white;">Xin Chào: 
				<?php if (isset($_SESSION['ten'])) {
					echo $_SESSION['ten'];
				} ?></span></p>
			<div class="open">
				<ul class="list" >
					<li><a href="?controller=user&action=userProfile" style="margin-left:2.4px;" ><i class="fas fa-clipboard-list"></i> Quản lý hồ sơ</a></li>
					<li class="dropdown">
						<a href="#"><i class="fas fa-briefcase"></i> Quản lý việc làm</a><span class="sub-icon"></span>
						<ul class="sub-menu">
							<li><a href="?controller=user&action=userJobSent"><i class="far fa-circle" style="font-size: 10px"></i> Việc làm đã ứng tuyển</a></li>
							<li><a href="job-saves.html"><i class="far fa-circle" style="font-size: 10px"></i> Việc làm đã lưu</a></li>
							<li><a href="job-phu-hop.html"><i class="far fa-circle" style="font-size: 10px"></i> Công việc phù hợp</a></li>
						</ul>
					</li>
					<li class="dropdown" id="click">
						<a href="#"><i class="fas fa-envelope"></i> Tin nhắn</a><span class="sub-icon"></span>
						<ul class="sub-menu">
							<li><a href="hop-thu-den.html"><i class="far fa-circle" style="font-size: 10px"></i> Hộp thư đến</a></li>
							<li><a href="hop-thu-di.html"><i class="far fa-circle" style="font-size: 10px"></i> Hộp thư đi</a></li>
						</ul>
					</li>
					<li class="dropdown" id="click">
						<a href="#"><i class="fas fa-user"></i> Thông tin cá nhân</a><span class="sub-icon"></span>
						<ul class="sub-menu">
							<li><a href="thay-doi-mat-khau.html"><i class="far fa-circle" style="font-size: 10px"></i> Thay đổi mật khẩu</a></li>
						</ul>
					</li>
				</ul>
			
		</div>
			
	</div>
</div>
	<div class="box-menu">
				<ul>
					<li ><a href="?controller=job&action=index" >Trang chủ</a></li>
					<li id=""><a href="#" >Tuyển dụng</a></li>
					<li id=""><a href="#" >Ứng viên</a></li>
					<li id=""><a href="#" ><i class="far fa-bell" style="color: white"></i></a></li>
					<li id=""><a href="?controller=user&action=logout" >Thoát</a></li>
				</ul>
			</div>
	<div style="clear: both;"></div>
	
	<div class="container" style="margin: 10px 250px;">
	<?= @$content ?>
	</div>
	
</body>
</html>

<?php } ?>