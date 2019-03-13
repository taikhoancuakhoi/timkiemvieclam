<?php  

/**
 * 
 */
class BaseController
{
	protected $folder;
	public function render($file,$data=array()){

		$view_file = "view/".$this->folder.'/'.$file.".php";

		if (is_file($view_file)) {
			extract($data);
			ob_start();
			require $view_file;

			$content = ob_get_clean();

			require "view/layout/application.php";
		}else{
			header("location:index.php?controller=page&action=error");
		}
	}
}