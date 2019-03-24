<?php  

/**
 * 
 */
class BaseController
{
	protected $folder;
	public function render($file,$data1=array(),$data2=array(),$data3=array()){

		$view_file = "view/".$this->folder.'/'.$file.".php";

		if (is_file($view_file)) {
			extract($data1);
			extract($data2);
			extract($data3);
			ob_start();
			require $view_file;

			$content = ob_get_clean();

			require "view/layout/application.php";
		}else{
			header("location:index.php?controller=page&action=error");
		}
	}
}