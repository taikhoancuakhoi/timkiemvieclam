<?php 
require_once "base_controller.php";
require_once "model/user.php";
class UserController extends BaseController{
	function __construct()
	{
		$this->folder = "user";
	}
	public function login(){
		if (isset($_SESSION['login']) && $_SESSION == true) {
			header("location:".path."/?controller=job&action=index");
		}
		$this->render("login");
	}

	public function checkLogin(){
		
		if(isset($_POST['txt_tentk'])){
			$tentk = $_POST['txt_tentk'];
			$pass = $_POST['txt_pass'];
			$user = new User();
			$data = $user->UserLogin($tentk,$pass);
			if ($data == true) {
				// cấp session cho user
				$_SESSION['login'] = true;
				$_SESSION['user'] = $tentk;
				header("location:".path."/?controller=job&action=index");

			}else{
				die("haha");
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
	}
}