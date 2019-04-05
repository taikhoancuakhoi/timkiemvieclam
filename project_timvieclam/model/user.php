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
		$result = array();
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
		$sql = "SELECT a.ten,a.diachi,a.sdt,a.gioitinh,a.bangcap,a.ngoaingu,a.loainn,a.kinhnghiem,a.email,a.id_thanhpho,a.hinhthuc,a.Luongmm,a.anh  FROM tb_thanhvien a 
			WHERE id_thanhvien='".$idtv."'";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			$row = $stmt->fetch(PDO::FETCH_ASSOC);	
			return $row;
		}
	}
	// public function postBusiness(){
	// 	$sql = "INSERT INTO tb_baituyen(tieude,) VALUES ()";
	// }
	public function updateInfo($idtv,$ten,$diachi,$gioitinh,$bangcap,$ngoaingu,$kinhnghiem,$hinhthuc,$luong,$tp,$email){
		$sql = "UPDATE tb_thanhvien SET ten=:t,diachi=:d,gioitinh=:g,bangcap=:b,ngoaingu=:n,kinhnghiem=:k,hinhthuc=:h,Luongmm=:L,id_thanhpho=:i,email=:e WHERE id_thanhvien='".$idtv."'";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":t",$ten);
		$stmt->bindParam(":d",$diachi);
		$stmt->bindParam(":g",$gioitinh);
		$stmt->bindParam(":b",$bangcap);
		$stmt->bindParam(":n",$ngoaingu);
		$stmt->bindParam(":k",$kinhnghiem);
		$stmt->bindParam(":h",$hinhthuc);
		$stmt->bindParam(":L",$luong);
		$stmt->bindParam(":i",$tp);
		$stmt->bindParam(":e",$email);

		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function businessPost($idntd,$tuoi,$tieude,$soluong,$hinhthuc,$luong,$diadiem,$nghe,$mota,$bang,$gioi,$hannop,$lienhe,$idtp,$ngaydang){
		$sql = "INSERT INTO tb_baituyen(id_nhatd,tuoi,tieude,soluong,hinhthuc,mucluong,diadiem,id_nganh,mota,bangcap,gioitinh,hannop,lienhe,id_thanhpho,ngaydang) VALUES (:i,:t,:td,:s,:h,:ml,:d,:n,:m,:b,:g,:hn,:L,:p,:nd)";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":i",$idntd);
		$stmt->bindParam(":t",$tuoi);
		$stmt->bindParam(":td",$tieude);
		$stmt->bindParam(":s",$soluong);
		$stmt->bindParam(":h",$hinhthuc);
		$stmt->bindParam(":ml",$luong);
		$stmt->bindParam(":d",$diadiem);
		$stmt->bindParam(":n",$nghe);
		$stmt->bindParam(":m",$mota);
		$stmt->bindParam(":b",$bang);
		$stmt->bindParam(":g",$gioi);
		$stmt->bindParam(":hn",$hannop);
		$stmt->bindParam(":L",$lienhe);
		$stmt->bindParam(":p",$idtp);
		$stmt->bindParam(":nd",$ngaydang);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}

	}
	public function showTinTd($idntd){
		$result = array();
		$sql = "SELECT a.tieude,a.id_baituyen,a.soluong,a.hinhthuc,a.gioitinh,a.tuoi,a.bangcap,b.ten_nganh FROM tb_baituyen a
		JOIN tb_nganh b ON b.id_nganh = a.id_nganh
		WHERE id_nhatd ='".$idntd."'";
		$stmt= DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count  = $stmt->rowCount();
		if ($count>0) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$result[] = $row;
			}
		}
		return $result;

	}
	public function deleteTin($id){
		$sql = "DELETE FROM tb_baituyen WHERE id_baituyen='".$id."'";
		$stmt = DB::getInstance()->prepare($sql);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function showUserTd($idntd){
		$result = array();
		$sql = "SELECT a.id_thanhvien,a.id_baituyen,a.link_file,a.thoigian,b.tieude,b.id_nhatd,c.ten FROM tb_ungtuyen a
		JOIN tb_baituyen b ON b.id_baituyen = a.id_baituyen 
		JOIN tb_thanhvien c ON c.id_thanhvien = a.id_thanhvien
		WHERE b.id_nhatd ='".$idntd."'";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$result[]=$row;
			}
		}
		return $result;
	}
	public function sendMess($idntv,$idntd,$tinnhan){
		$sql = "INSERT INTO tb_mess(id_thanhvien,id_nhatd,tinnhan) VALUES (:t,:n,:m) ";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":t",$idntv);
		$stmt->bindParam(":n",$idntd);
		$stmt->bindParam(":m",$tinnhan);
		if($stmt->execute()){
			return true;
		}{
			return false;
		}
	}
	public function showHoSo($idtv){
		$sql = "SELECT a.ten,a.diachi,a.sdt,a.gioitinh,a.bangcap,a.ngoaingu,a.kinhnghiem,a.email,a.hinhthuc,a.anh,b.ten_tp  FROM tb_thanhvien a JOIN tb_thanhpho b ON a.id_thanhpho =b.id_thanhpho 
			WHERE id_thanhvien='".$idtv."'";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
		}
		
	}
	public function checkAdmin($tk,$pass){
		$sql = "SELECT ten_tk,password FROM tb_taikhoan WHERE ten_tk ='".$tk."' AND password='".$pass."'";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			return true;
		}else{
			return false;
		}
	}
	public function listAccount(){
		$sql = "SELECT * FROM tb_taikhoan";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$result[]=$row;
			}
		}
		return $result;
	}
}