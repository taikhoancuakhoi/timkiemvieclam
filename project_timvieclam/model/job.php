<?php  

class Job{

	public function getJobRandom(){
		$sql = "SELECT ab.id_baituyen,ab.tieude,ab.ngaydang,ab.img,ab.mucluong,ab.hinhthuc,a.ten_tp,b.ten,c.ten_nganh FROM tb_baituyen ab 
				JOIN 	tb_nhatd b ON ab.id_nhatd = b.id_nhatd 
				JOIN tb_thanhpho a ON ab.id_thanhpho = a.id_thanhpho 
				JOIN tb_nganh c ON ab.id_nganh = c.id_nganh
				ORDER BY RAND() LIMIT 18";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$result[] = $row;
			}			
		}
		return $result;
	}

	public function getJobDetail($id){
		$sql ="SELECT ab.tieude,ab.soluong,ab.gioitinh,ab.tuoi,ab.ngaydang,ab.hannop,ab.diadiem,ab.mota,ab.lienhe,ab.img,ab.mucluong,b.ten,ab.hinhthuc,ab.id_nhatd,a.ten_tp,b.ten,c.ten_nganh FROM tb_baituyen ab 
				JOIN 	tb_nhatd b ON ab.id_nhatd = b.id_nhatd 
				JOIN tb_thanhpho a ON ab.id_thanhpho = a.id_thanhpho 
				JOIN tb_nganh c ON ab.id_nganh = c.id_nganh
				WHERE id_baituyen = $id";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
		}
		
	}
	public function getCareer(){
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

	//Tìm kiếm công việc trong index
	public function getJobSearch($tieude,$nganh,$tp){
		$result = array();
		if (!empty($tieude)) {
			$sql = "SELECT ab.id_baituyen,ab.tieude,ab.ngaydang,ab.img,ab.mucluong,ab.hinhthuc,a.ten_tp,b.ten,c.ten_nganh FROM tb_baituyen ab 
				JOIN 	tb_nhatd b ON ab.id_nhatd = b.id_nhatd 
				JOIN tb_thanhpho a ON ab.id_thanhpho = a.id_thanhpho 
				JOIN tb_nganh c ON ab.id_nganh = c.id_nganh
				WHERE ab.tieude LIKE \"%$tieude%\" 
				";
			if (!empty($tp) && !empty($nganh)) {
			$sql.=" AND ab.id_thanhpho = \"$tp\" AND ab.id_nganh =\"$nganh\" ORDER BY RAND() LIMIT 18 ";
			}else if (empty($tp) && !empty($nganh)) {
				$sql.=" AND ab.id_nganh =\"$nganh\" ORDER BY RAND() LIMIT 18 ";
			}else{
				$sql.=" ORDER BY RAND() LIMIT 18";
			}
			

		}else{
			$sql = "SELECT ab.id_baituyen,ab.id_nganh,ab.tieude,ab.ngaydang,ab.img,ab.mucluong,ab.hinhthuc,a.ten_tp,a.id_thanhpho,b.ten,ab.id_thanhpho,c.ten_nganh FROM tb_baituyen ab 
				JOIN 	tb_nhatd b ON ab.id_nhatd = b.id_nhatd 
				JOIN tb_thanhpho a ON ab.id_thanhpho = a.id_thanhpho
				JOIN tb_nganh c ON ab.id_nganh = c.id_nganh 
				";
			if (!empty($tp) && !empty($nganh)) {
				$sql.=" WHERE ab.id_thanhpho = \"$tp\" AND ab.id_nganh =\"$nganh\" ORDER BY RAND() LIMIT 18 ";
			}else if (empty($tp) && !empty($nganh)) {
				$sql.=" WHERE ab.id_nganh =\"$nganh\" ORDER BY RAND() LIMIT 18 ";
			}else if(!empty($tp) && empty($nganh)){
				$sql.=" WHERE ab.id_thanhpho = \"$tp\" ORDER BY RAND() LIMIT 18 ";
			}
			else{
				$sql.=" ORDER BY RAND() LIMIT 18";
			}
		}
			$stmt = DB::getInstance()->prepare($sql);
			$stmt->execute();
			$count = $stmt->rowCount();
			if ($count>0) {
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$result[] = $row;
				}			
			}
			return $result;
		
		
	}
}

	

//0959910958