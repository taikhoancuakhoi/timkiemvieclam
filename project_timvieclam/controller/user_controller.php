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
		
		if(isset($_POST['txt_email'])){
			$email = $_POST['txt_email'];
			$pass = $_POST['txt_pass'];
			$user = new User();
			$data = $user->UserLogin($email,$pass);
			if (is_array($data)) {
				// cấp session cho user
				$_SESSION['login'] = true;
				$_SESSION['name'] = $data['ten'];

				header("location:".path."/?controller=job&action=index");
				

			}else{
				header("location:".path."/?controller=user&action=login&result=sai");
			}
		}else{
			die("không có post");
		}
		
	}
	public function logout(){
		unset($_SESSION['login']);
		header("location:".path."/?controller=job&action=index");
	}

	public function register(){
		$this->render("register");	
		if (isset($_GET['register']) && $_GET['register'] == 'false') {
			echo "<script type='text/javascript'>alert('Trùng tài khoản, hoặc gì gì đấy');</script>'";
		}
	}
	public function checkRegister(){
		if (isset($_POST['txt_name'])) {
			$ten = $_POST['txt_name'];
			$email = $_POST['txt_email'];
			$pass = $_POST['txt_pass'];
			$sdt = $_POST['txt_mobile'];
			$user = new User();
			$result = $user->Register($ten,$sdt,$email,$pass);
			if ($result == true) {
				header("location:".path."/?controller=user&action=login&register=true");
			}else{
				header("location:".path."/?controller=user&action=register&register=false");
			}
		}
	}

	public function postBusiness(){
		
		$userJob = new User();
		$data = $userJob->getJob();
		$this->render('postBusiness',$data);
		// $city = $userJob->getCity(); 
		
	}
}