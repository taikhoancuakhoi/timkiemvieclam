<?php  
class User{

	public function UserLogin($email,$pass){
		$sql = "SELECT email,ten,password FROM tb_thanhvien WHERE email =:e AND password=:p";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":e",$email);
		$stmt->bindParam(":p",$pass);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;			
		}else{
			return false;
		}
	}
	public function Register(){
		$this->render("register");
	}
	public function userRegister($tentv,$sdt,$email,$pass){
		$sql = "INSERT INTO tb_thanhvien(ten,sdt,email,password) VALUES ('$tentv','$sdt','$email','$pass')";
		$stmt = DB::getInstance()->prepare($sql);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function getJob(){
		$sql = "SELECT id_nganh,ten_nganh FROM tb_nganh";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$result[]=$row;
			};
		}
		return $result;	
	}
	public function getCity(){
		$sql = "SELECT id_thanhpho,ten_tp FROM tb_thanhpho";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$result[]=$row;
			};
		}
		return $result;	
	}
	// public function postBusiness(){
	// 	$sql = "INSERT INTO tb_baituyen(tieude,) VALUES ()";
	// }
}