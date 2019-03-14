<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SV Job</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="asset/js/checkValidate.js" type="text/javascript">  -->
	<script src="asset/js/checkValidate.js"></script>
  	<link rel="stylesheet" type="text/css" href="asset/css/style.css">

</head>
<body>
		<div class="nav">
			<div class="container">
				<div class="header">
					<div class="row">
						<div class="col-lg-12 col-md-12">
								<ul class="menu">

									<li><img src="asset/images/logo.png" width="160px"></li>
									<li><a href="?controller=document&action=index">CẨM NANG</a></li>
									<?php 
										if(isset($_SESSION['login']) && $_SESSION['login']==true){
									?>	

										<li><a>Xin Chào <?php echo ucwords($_SESSION['user']); ?> Đẹp Trai ạ</a></li>
										<li><a href="?controller=user&action=logout">Đăng xuất</a></li> 
									
									<?php	
									}else{
									?>

									<li><a href="?controller=user&action=register">ĐĂNG KÝ</a></li>
									<li><a href="?controller=user&action=login">ĐĂNG NHẬP</a></li>
									
										
									<?php 
										}
									 ?>
									
								</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	<div class="container">

	<?= @$content ?>
	</div>


	<div class="footer">
						<div class="container">
							<div class="col-lg-5">
								<div class="function">
									<h4>CHỨC NĂNG</h4>
									<p><i class="fas fa-user"></i><a href="#"> Tài khoản</a></p>
									<p><i class="fas fa-comments"></i><a href="#"> Phản hồi</a></p>
									<p><i class="fas fa-fist-raised"></i><a href="#"> Việc làm phù hợp với bạn</a></p>
									<p><i class="fas fa-mail-bulk"></i><a href="#"> Nhận thông báo quá email</a></p>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="function">
									<h4>KẾT NỐI VỚI SVJob</h4>
									<p><i class="fab fa-facebook-square"></i><a href="#"> Tài khoản</a></p>
									<p><i class="fas fa-envelope"></i><a href="#"> Phản hồi</a></p>
									<p><i class="fas fa-user-circle"></i><a href="#"> NHÓM %</a></p>
									<p><i class="fas fa-map-marker-alt"></i><a href="#">  SỐ 1 Hoàng Đạo Thúy-Hà Nội</a></p>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="function">
									<h4>LIÊN HỆ</h4>
									<p><i class="fas fa-phone"></i><a href="#"> 012354564</a></p>
									<p><i class="fas fa-phone"></i><a href="#"> 234245656</a></p>
									
								</div>
							</div>
						</div>
					</div>
</body>
</html>