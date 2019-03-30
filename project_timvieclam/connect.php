<?php  

class DB{

	//khai báo đối tượng csdl

	private static $instance = null;
	

	
	//Kiểm tra giá trị của đối tượng csdl
	public static function getInstance(){
		$dsn = 'mysql:host=localhost;dbname=timkiemvieclam;charset=utf8';
		$user = 'root';
		$password = '';
		if (!isset(self::$instance)) {
			try {
				self::$instance = new PDO($dsn,$user,$password);
			} catch (Exception $ex) {
				die($ex->getMessage());
			}
		}
		return 	self::$instance;

	}

}
