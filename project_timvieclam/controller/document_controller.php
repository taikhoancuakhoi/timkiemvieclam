<?php  
require_once "base_controller.php";
class DocumentController extends BaseController{
	function __construct()
	{
		$this->folder ="doc";
	}
	public function index(){
		$this->render('index');
	}
}