<?php  
require_once "controller/base_controller.php";
class PageController extends BaseController{
	function __construct()
	{
		$this->folder = "page";
	}
	public function error(){
	 	$this->render('error');
	}
}