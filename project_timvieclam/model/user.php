<?php  
class User{

	public function UserLogin($email,$pass){
		$sql = "SELECT email,ten,password FROM tb_thanhvien WHERE email =:e AND password=:p";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":e",$email);
		$stmt->bindParam(":p",$pass);
		$stmt->execute();
		// $count = $stmt->rowCount();
		// if ($count == 1) {
		// 	return true;
		// }else{
		// 	return false;
		// }
		$count = $stmt->rowCount();
		if ($count>0) {
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;			
		}else{
			return false;
		}
	}
	public function Register($tentv,$sdt,$email,$pass){
		$sql = "INSERT INTO tb_thanhvien(ten,sdt,email,password) VALUES ('$tentv','$sdt','$email','$pass')";
		$stmt = DB::getInstance()->prepare($sql);
		if($stmt->execute()){
			header("location:".path."/?controller=user&action=checkRegister&success=''");
		}else{
			die("Không thể thêm mới thành viên");
		}

}
}