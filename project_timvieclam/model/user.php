<?php  
class User{

	public function UserLogin($tentk,$pass){
		$sql = "SELECT ten_tk,password,id_loaitk FROM tb_taikhoan WHERE ten_tk =:t AND password=:p";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":t",$tentk);
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
	public function accountRegister($tentk,$pass,$tk){
		$sql = "INSERT INTO tb_taikhoan(ten_tk,password,id_loaitk) VALUES ('$tentk','$pass','$tk')";
		$stmt = DB::getInstance()->prepare($sql);
		// $resutl = DB::getInstance()->lastInsertId();
				try { 
		        DB::getInstance()->beginTransaction(); 
		        $stmt->execute(); 
		        $result =  DB::getInstance()->lastInsertId(); 
		        DB::getInstance()->commit(); 
		        return $result;
		    } catch(PDOExecption $e) { 
		        $dbh->rollback(); 
		        print "Error!: " . $e->getMessage() . "</br>"; 
		    } 
	}

	public function userRegister($tentv,$sdt,$email,$idtk){
		$sql = "INSERT INTO tb_thanhvien(ten,sdt,email,id_tk) VALUES ('$tentv','$sdt','$email','$idtk')";
		$stmt = DB::getInstance()->prepare($sql);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function businessRegister($tendn,$sdt,$email,$diachi,$idtk){
		$sql = "INSERT INTO tb_nhatd(ten,sdt,email,diachi,id_tk) VALUES ('$tendn','$sdt','$email','$diachi','$idtk')";
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