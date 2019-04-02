<?php  
class User{

	public function userLogin($tentk,$pass){
		$sql = "SELECT a.ten_tk,a.password,a.id_loaitk,b.id_thanhvien,b.ten FROM tb_thanhvien b 
				JOIN tb_taikhoan a ON b.id_tk = a.id_tk
		 		WHERE ten_tk =:t AND password=:p";
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
	public function businessLogin($tentk,$pass){
		$sql = "SELECT a.ten_tk,a.password,a.id_loaitk,b.id_nhatd,b.ten FROM tb_nhatd b 
				JOIN tb_taikhoan a ON b.id_tk = a.id_tk
		 		WHERE ten_tk =:t AND password=:p";
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
	public function userAddCv($tv,$bt,$link){
		$sql = "INSERT INTO tb_ungtuyen(id_thanhvien,id_baituyen,link_file) VALUES ('$tv','$bt','$link')";
		$stmt = DB::getInstance()->prepare($sql);
		if ($stmt->execute()) {
			return true;
		}else{
			return false;
		}
	
	}
	public function userJobSent($idtv){
		$result =array();
		$sql ="SELECT a.tieude,ab.thoigian,b.ten,ab.id_baituyen FROM tb_ungtuyen ab JOIN tb_baituyen a ON a.id_baituyen = ab.id_baituyen JOIN tb_nhatd b ON b.id_nhatd = a.id_nhatd WHERE ab.id_thanhvien ='".$idtv."'";
		$stmt =DB::getInstance()->prepare($sql);
		// $stmt->bindParam(":tv",$idtv);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$result[]=$row;
			}
		}
		return $result;
	}
	public function saveJob($idbt,$idtv){
		$sql = "INSERT INTO tb_luuvieclam(id_baituyen,id_thanhvien) VALUES (:b,:t)";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":b",$idbt);
		$stmt->bindParam(":t",$idtv);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function getSaveJob($idtv){
		$sql = "SELECT b.tieude,b.ngaydang,b.mucluong,c.ten,b.id_baituyen  FROM tb_luuvieclam a 
				JOIN tb_baituyen b
				ON  a.id_baituyen = b.id_baituyen
				JOIN tb_nhatd c
				ON b.id_nhatd = c.id_nhatd
				WHERE a.id_thanhvien =:i";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":i",$idtv);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$result[]=$row;
			}
		}
		return $result;
	}
	public function userInfo($idtv){
		$sql = "SELECT a.ten,a.diachi,a.sdt,a.gioitinh,a.bangcap,a.loai,a.ngoaingu,a.loainn,a.kinhnghiem,a.email,b.ten_tp FROM tb_thanhvien a JOIN tb_thanhpho b ON b.id_thanhpho = a.id_thanhpho
			WHERE id_thanhvien='".$idtv."'";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			$row = $stmt->fetch(PDO::FETCH_ASSOC);	
			return $row;
		}else{
			$sql = "SELECT a.ten,a.diachi,a.sdt,a.gioitinh,a.bangcap,a.loai,a.ngoaingu,a.loainn,a.kinhnghiem,a.email FROM tb_thanhvien a WHERE id_thanhvien='".$idtv."'";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			$row = $stmt->fetch(PDO::FETCH_ASSOC);	
			return $row;
		}
		
		}
	}
	// public function postBusiness(){
	// 	$sql = "INSERT INTO tb_baituyen(tieude,) VALUES ()";
	// }
}