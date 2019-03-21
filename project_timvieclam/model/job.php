<?php  

class Job{

	public function getJobRandom(){
		$sql = "SELECT ab.id_baituyen,ab.tieude,ab.ngaydang,ab.img,ab.mucluong,ab.hinhthuc,a.ten_tp,b.ten FROM tb_baituyen ab 
				JOIN 	tb_nhatd b ON ab.id_nhatd = b.id_nhatd 
				JOIN tb_thanhpho a ON ab.id_thanhpho = a.id_thanhpho 
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
		$sql ="SELECT ab.tieude,ab.soluong,ab.gioitinh,ab.tuoi,ab.ngaydang,ab.hannop,ab.diadiem,ab.mota,ab.lienhe,ab.img,ab.mucluong,b.ten,ab.hinhthuc,a.ten_tp,b.ten,c.ten_nganh FROM tb_baituyen ab 
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

	
}	
