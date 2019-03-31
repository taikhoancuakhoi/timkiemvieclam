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
		$data1 = $job_index->getJobRandom();
		$data2 = $job_index->getCareer();
		$data3 = $job_index->getCity();
		$data4=$job_index->getJobNum();
		$data = array(
			'baituyen'=>$data1,
			'nganh'=>$data2,
			'thanhpho'=>$data3,
			'soviechn'=>$data4
		);

		$this->render('index1',$data);	
	}
	//trang thông tin chi tiết
	public function detail(){
		$jobDetail = new Job();
		$data = $jobDetail->getJobDetail($_GET['id']);
		$this->render2("detail1",$data);
		// if (isset($_GET['id'])) {
		// 	echo "<script type=text/javascript>alert('Hãy thêm file CV của bạn bên dưới')</script>";
		// }else{
		// 	header("location:".path."?controller=job&action=index");
		// }
	}
	
	public function jobSearch(){
		if (isset($_POST['btn'])) {
			$tieude = $_POST['txt_name_search'];
		    $nganh = $_POST['txt_nganh'];
			$tp = $_POST['txt_tp'];
			
			

			$jobSearch = new Job();
			$data1 = $jobSearch->getJobSearch($tieude,$nganh,$tp);
			//Ném dữ liệu ra thanh tìm kiếm
			$data2 = $jobSearch->getCareer();
			$data3 = $jobSearch->getCity();

			$data = array(
				'baituyen'=>$data1,
				'nganh'=>$data2,
				'thanhpho'=>$data3
			);
			
			if ($data['baituyen'] == null) {
				header("location:".path."?controller=job&action=index");
			}else{
				$this->render('search1',$data);
			}
			
		}else{
			echo "haha";
		}
		
	}

	public function CamNang(){
		$this->render("camnang");
	}
	
}