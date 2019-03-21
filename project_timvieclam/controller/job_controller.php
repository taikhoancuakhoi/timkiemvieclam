<?php 

require_once "base_controller.php";
require_once "model/job.php";

class JobController extends BaseController{
	function __construct()
	{
		$this->folder = "job";
	}
	public function index(){
		$job_index = new Job();
		$data = $job_index->getJobRandom();
		$this->render("index",$data);	
	}
	//trang thông tin chi tiết
	public function detail(){
		$jobDetail = new Job();
		$data = $jobDetail->getJobDetail($_GET['id']);
		$this->render("detail",$data);
	}
	
}