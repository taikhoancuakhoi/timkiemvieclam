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
		if (isset($_GET['result'])) {
			echo "<script type='text/javascript'>alert('Sai tên tk hoặc mk');</script>'";
		}

	}

	public function checkLogin(){
		
		if(isset($_POST['txt_email'])){
			$email = $_POST['txt_email'];
			$pass = $_POST['txt_pass'];
			$user = new User();
			$data = $user->UserLogin($email,$pass);
			if ($data == true) {
				// cấp session cho user
				$_SESSION['login'] = true;
				$_SESSION['email'] = $email;

				header("location:".path."/?controller=job&action=index");

			}else{
				header("location:".path."/?controller=user&action=login&result=''");
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
	public function checkRegister(){
		if (isset($_POST['txt_name'])) {
			$ten = $_POST['txt_name'];
			$email = $_POST['txt_email'];
			$pass = $_POST['txt_pass'];
			$sdt = $_POST['txt_mobile'];
			$user = new User();
			$user->Register($ten,$sdt,$email,$pass);
			header("location:".path."/?controller=user&action=login");
		}
	}
}