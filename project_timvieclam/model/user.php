<?php  
class User{

	public function UserLogin($tentk,$pass){
		$sql = "SELECT ten_tk,password FROM tb_tk WHERE ten_tk =:t AND password=:p";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":t",$tentk);
		$stmt->bindParam(":p",$pass);
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count>0) {
			return true;
		}else{
		return false;
		}
	}
}