<?php 
require_once "base_controller.php";
require_once "model/user.php";
class UserController extends BaseController{
	function __construct()
	{
		$this->folder = "user";
	}
	public function login(){
		if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			header("location:".path."/?controller=job&action=index");
		}
		$this->render("login");
		//thông báo sai tên tài khoản mật khẩu đăng nhập
		if (isset($_GET['result']) && $_GET['result'] == 'sai') {
			echo "<script type='text/javascript'>alert('Sai tên tk hoặc mk');</script>'";
		}

		//Thông báo đăng ký thành công 
		if (isset($_GET['register']) && $_GET['register']=='true' ) {
			echo "<script type='text/javascript'>alert('Đăng ký thành công, mời đăng nhập');</script>'";
		}

	}

	public function checkLogin(){
		
		if(isset($_POST['txt_nametk'])){
			$tentk = $_POST['txt_nametk'];
			$pass = $_POST['txt_pass'];
			$user = new User();
			$data = $user->UserLogin($tentk,$pass);
			if (is_array($data)) {
				// cấp session cho user
				$_SESSION['login'] = true;
				$_SESSION['quyen'] = $data['id_loaitk'];
				header("location:".path."/?controller=job&action=index");
				

			}else{
				header("location:".path."/?controller=user&action=login&result=sai");
			}
		}else{
			die("không có post");
		}
		
	}

	public function chooseRegister(){
		$this->render("register");	
	}
	public function userRegister(){
		$this->render('userRegister');

		
		if (isset($_GET['register']) && $_GET['register'] == 'false') {
			echo "<script type='text/javascript'>alert('Trùng tài khoản, hoặc gì gì đấy');</script>'";
		}
	}
	
	public function checkUserRegister(){
		if (isset($_POST['txt_name'])) {
			$ten = $_POST['txt_name'];
			$email = $_POST['txt_email'];
			$tentk = $_POST['txt_tk'];
			$pass = $_POST['txt_pass'];
			$sdt = $_POST['txt_mobile'];
			$taikhoan = $_POST['txt_loaitk'];
			if ($taikhoan == 2) {

				$user = new User();
				
				$data = $user->accountRegister($tentk,$pass,$taikhoan);
				$result = $user->userRegister($ten,$sdt,$email,$data);
				if ($result == true) {
					header("location:".path."?controller=user&action=login&register=true");

				}else{
					header("location:".path."?controller=page&action=error");
				}
			}
		}
	}
	public function businessRegister(){
		$this->render('businessRegister');
	}
	public function checkBusinessRegister(){
		if (isset($_POST['txt_tenntd'])) {
			$ten = $_POST['txt_tenntd'];
			$email = $_POST['txt_email'];
			$taikhoan = $_POST['txt_tentk'];
			$pass = $_POST['txt_pass'];
			$sdt = $_POST['txt_sdt'];
			$diachi = $_POST['txt_diachi'];
			$quyen = $_POST['txt_loaitk'];

			if ($quyen == '3') {
				$user = new User();
				$data = $user->accountRegister($ten,$pass,$quyen);
				$result = $user->businessRegister($ten,$sdt,$email,$diachi,$data);
				if ($result == true) {
					header("location:".path."?controller=user&action=login&register=true");
				}
			}
		}else{
			header("location:".path."?controller=page&action=error");
		}
		
	}	
	

	// chức năng đăng xuất 
	public function logout(){
		unset($_SESSION['login']);
		header("location:".path."/?controller=job&action=index");
	}

	public function userProfile(){
		$this->render('user_profile');
	}
	public function businessProfile(){
		$this->render('business_profile');
	}
	public function indexAdmin(){
		$this->render('index_admin');
	}
}



// non hạy nhon tum non khóc vì tum
// lái cháy lừa dối tình cảm
// khọp chay cảm ơn