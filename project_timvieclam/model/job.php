<?php  

class Job{

	public function getJobRandom(){
		$sql = "SELECT ab.tieude,ab.ngaydang,ab.img,ab.mucluong,ab.hinhthuc,a.ten_tp,b.ten FROM tb_baituyen ab 
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
}	
