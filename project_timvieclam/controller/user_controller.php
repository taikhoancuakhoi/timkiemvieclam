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
		}else{
			header("location:".path."/?controller=user&action=chooseLogin");
		}
		//thông báo sai tên tài khoản mật khẩu đăng nhập
		if (isset($_GET['result']) && $_GET['result'] == 'sai') {
			echo "<script type='text/javascript'>alert('Sai tên tk hoặc mk');</script>'";
		}


	}
	public function chooseLogin(){
		$this->render2("chooseLogin");
	}

	public function userLogin(){
		$this->render2("userLogin");
	}
	public function businessLogin(){
		$this->render2('businessLogin');
	}



	public function checkUserLogin(){
		if(isset($_POST['txt_nametk'])){
			$tentk = $_POST['txt_nametk'];
			$pass = $_POST['txt_pass'];
			$user = new User();
			$data = $user->userLogin($tentk,$pass);
			if (is_array($data)) {
				// cấp session cho user
				$_SESSION['login'] = true;
				$_SESSION['tv'] = $data['id_thanhvien'];
				$_SESSION['quyen'] = $data['id_loaitk'];
				$_SESSION['ten']=$data['ten'];

				if (isset($_SESSION['detail'])) {
					header("location:".path."/?controller=job&action=detail&id=".$_SESSION['detail']);
					
				}else{
					header("location:".path."/?controller=job&action=index");

					
				}

			}else{
				header("location:".path."/?controller=user&action=login&result=sai");
			}
		}else{
			die("không có post");
		}
		
	}
	public function checkBusinessLogin(){
		if(isset($_POST['txt_nametk'])){
			$tentk = $_POST['txt_nametk'];
			$pass = $_POST['txt_pass'];
			$user = new User();
			$data = $user->businessLogin($tentk,$pass);
	
			if (is_array($data)) {
				// cấp session cho user
				$_SESSION['login'] = true;
				$_SESSION['tv'] = $data['id_nhatd'];
				$_SESSION['quyen'] = $data['id_loaitk'];
				$_SESSION['ten']=$data['ten'];

				header("location:".path."/?controller=job&action=index");
				

			}else{
				header("location:".path."/?controller=user&action=login&result=sai");
			}
		}else{
			die("không có post");
		}

	}
	
	public function chooseRegister(){
		$this->render2("register");	
	}
	public function userRegister(){
		$this->render5('userRegister1');

		
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
					header("location:".path."?controller=user&action=login");
				}
			}
		}else{
			header("location:".path."?controller=page&action=error");
		}
	
		
	}	
	
	//xem công việc đã nộp
	public function userJobSent(){
		$idtv = $_SESSION['tv'];
		$user = new User();
		$data = $user->userJobSent($idtv);
		$this->render3('user-job-sent1',$data);

		
	}
	// chức năng đăng xuất 
	public function logout(){
		unset($_SESSION['login']);
		unset($_SESSION['tv']);
		header("location:".path."/?controller=job&action=index");
	}

	public function userProfile(){
		$this->render3('user_profile1');
	}
	public function businessProfile(){
		$this->render4('business_profile');
	}
	public function indexAdmin(){
		$this->render('index_admin');
	}
	public function checkFile(){	
		
		if (isset($_SESSION['login']) && $_SESSION['login']==true && $_SESSION['quyen']=='2') {
				$baituyen =  $_GET['id'];
				if (isset($_POST['submit']) && isset($_FILES['CVcongviec']['name']) && $_FILES['CVcongviec']['size'] > 0) {
					$name = $_FILES['CVcongviec']['name'];
					$type = $_FILES['CVcongviec']['type'];
					$size = $_FILES['CVcongviec']['size'];
					$tmp = $_FILES['CVcongviec']['tmp_name'];
					$thanhvien = $_SESSION['tv'];

					move_uploaded_file($tmp,"upload/cvupload/".$name);
						$user = new User();
						$result = $user->userAddCv("$thanhvien","$baituyen",'upload/cvupload/'.$name);
						if ($result == true) {
							header("location:".path."?controller=job&action=detail&id=".$baituyen);
						}else{
							echo "Lỗi mù";
						}
				}else{
					header("location:".path."?controller=job&action=detail&id=".$baituyen);

				}
		}else{
			$_SESSION['detail'] = $_GET['id'];
			header("location:".path."?controller=user&action=userLogin");
		}
	}

	public function saveJob(){
		$idbt = $_GET['id'];
		$idtv = $_SESSION['tv'];
		if ($_SESSION['quyen']==2) {
			$user_save = new User();
			$result = $user_save->saveJob($idbt,$idtv);
			if ($result==true) {
				header("location:".path.'/?controller=job&action=detail&id='.$idbt);
			}else{
				die();
			}
		}else{
			header("location:".path.'/?controller=job&action=detail&id='.$idbt);
		}
		

	}
	public function userSaveJob(){
		$job = new User();
		$data = $job->getSaveJob($_SESSION['tv']);	
		$this->render3("user_save",$data);
		
	}
	public function userInfo(){
		$userInfo = new User();
		$data1 = $userInfo->userInfo($_SESSION['tv']);
		$data2 = $userInfo->getCity();
		$data3= $userInfo->getJob();
		$data = array(
				'city'=>$data2,
				'info'=>$data1,
				'job'=>$data3
		);
		
		$this->render3("userInfo",$data);
		if (isset($_GET['result']) && $_GET['result'] == "true") {
			echo "<script>alert('Update Success!');</script>";
		}
		
	}
	public function updateInfo(){
		if (isset($_POST['txt_name'])) {
			$name = $_POST['txt_name'];
			$diachi = $_POST['txt_diachi'];
			$gioi = $_POST['txt_gioitinh'];
			$hinhthuc = $_POST['txt_hinhthuc'];
			$ngoaingu = $_POST['txt_ngoaingu'];
			$luong = $_POST['txt_luong'];
			$kinhnghiem = $_POST['txt_kn'];
			$chungchi = $_POST['txt_chungchi'];
			$tp = $_POST['txt_tp'];
			$sdt = $_POST['txt_sdt'];
			$email = $_POST['txt_email'];
			$user = new User();
			$result = $user->updateInfo($_SESSION['tv'],$name,$diachi,$gioi,$chungchi,$ngoaingu,$kinhnghiem,$hinhthuc,$luong,$tp,$email);
			if ($result=="true") {
				header("location:".path."/?controller=user&action=userInfo&result=true");
			}else{
				echo "<script>alert('Update Failed !');</script>";
			}

		}
		
	}
	public function businessPost(){
		$user = new User();
		$data1 = $user->getCity();
		$data2 = $user->getJob();
		$data = array("city"=>$data1,"job"=>$data2);
		$this->render4("businessPost",$data);
		if (isset($_GET['result']) && $_GET['result'] == "true") {
			echo "<script>Thêm Bài Thành Công</script>";
		}

	}
	public function checkBusinessPost(){
		
		if (isset($_POST['txt_tieude'])) {
			$iddn = $_SESSION['tv'];
			$tieude = $_POST['txt_tieude'];
			$soluong = $_POST['txt_num'];
			$hinhthuc = $_POST['txt_hinhthuc'];
			$luong = $_POST['txt_luong'];
			$tuoi = $_POST['txt_tuoi'];
			$diadiem = $_POST['txt_diadiem'];
			$nghe = $_POST['txt_nghe'];
			$mota = $_POST['editor1'];
			$bang =$_POST['txt_bang'];
			$gioi = $_POST['txt_gioi'];
			$hannop = $_POST['txt_han'];
			$lienhe = $_POST['txt_lienhe'];
			$idtp = $_POST['txt_idtp'];
			$ngaydang = date("Y-m-d H:i:s",strtotime($_POST['txt_ngaydang']));
			
			$user = new User();
			$data = $user->businessPost($iddn,$tuoi,$tieude,$soluong,$hinhthuc,$luong,$diadiem,$nghe,$mota,$bang,$gioi,$hannop,$lienhe,$idtp,$ngaydang);
			if ($data == "true") {
				header("location:".path."/?controller=user&action=businessPost&result=true");
			}else{
				echo "<script>alert('Thêm thất bại');</script>";
			}
		}else{
			echo "";
		}
	}
	public function showTinTd(){
		$user = new User();
		$data = $user->showTinTd($_SESSION['tv']);
		$this->render4("tintuyendung",$data);
	}
	public function deleteTin(){
		$user = new User();
		$data = $user->deleteTin($_GET['id']);
		if ($data == "true") {
			header("location:".path."/?controller=user&action=showTinTd");
		}
	}
	public function hoSoDaTuyen(){
		$user = new User();
		$data = $user->showUserTd($_SESSION['tv']);

		$this->render4("hosodatuyen",$data);
	}
	public function sendMess(){
		$this->render4("sendMess");
		
		
	}
	public function checkMess(){
		if (isset($_POST['tinnhan'])) {
			$tinnhan = $_POST['tinnhan'];
			$user=new User();
			$result = $user->sendMess($_GET['id'],$_SESSION['tv'],$tinnhan);
			if ($result == "true") {
				header("location:".path."/?controller=user&action=hoSoDaTuyen");
			}else{
					echo "<script>alert('Gửi Thất Bại');</script>";
			}
		}
	}
	public function showHoSo(){
		if (isset($_GET['id'])) {
			$user= new User();
			$data = $user->showHoSo	($_GET['id']);
			$this->render4("showHoSo",$data);
		}
	}
	public function admin(){
		require "view/user/admin.php";
	}
	public function checkAdmin(){
		if (isset($_POST['txt_name'])) {
			$name = $_POST['txt_name'];
			$pass = $_POST['txt_pass'];
			$user = new User();
			 $result = $user->checkAdmin($name,$pass);
			if ($result == "true") {
				$_SESSION['tv']="admin";
				$this->render6("adminPage");
			}
		}
	}
	public function account(){
		$this->render6('account');
	}
	public function listAccount(){
		$user = new User();
		$data = $user->listAccount();
		
		$this->render6("account",$data);
	}
}

		
// 	public function userGETCV{}
// }


// non hạy nhon tum non khóc vì tum
// lái cháy lừa dối tình cảm
// khọp chay cảm ơn