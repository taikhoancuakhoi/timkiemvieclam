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

	public function render1($file,$data = array()){
		
		$view_file = "view/".$this->folder.'/'.$file.".php";

		if (is_file($view_file)) {
			extract($data);
			ob_start();
			require $view_file;

			$content = ob_get_clean();

			require "view/layout/application1.php";
		}else{
			header("location:index.php?controller=page&action=error");
		}	

	}
	public function render2($file,$data = array()){
		
		$view_file = "view/".$this->folder.'/'.$file.".php";

		if (is_file($view_file)) {
			extract($data);
			ob_start();
			require $view_file;

			$content = ob_get_clean();

			require "view/layout/application2.php";
		}else{
			header("location:index.php?controller=page&action=error");
		}	

	}
	public function render3($file,$data = array()){
		
		$view_file = "view/".$this->folder.'/'.$file.".php";

		if (is_file($view_file)) {
			extract($data);
			ob_start();
			require $view_file;

			$content = ob_get_clean();

			require "view/layout/application3.php";
		}else{
			header("location:index.php?controller=page&action=error");
		}	

	}
	public function render4($file,$data = array()){
		
		$view_file = "view/".$this->folder.'/'.$file.".php";

		if (is_file($view_file)) {
			extract($data);
			ob_start();
			require $view_file;

			$content = ob_get_clean();

			require "view/layout/application4.php";
		}else{
			header("location:index.php?controller=page&action=error");
		}	

	}
	public function render5($file,$data = array()){
		
		$view_file = "view/".$this->folder.'/'.$file.".php";

		if (is_file($view_file)) {
			extract($data);
			ob_start();
			require $view_file;

			$content = ob_get_clean();

			require "view/layout/application5.php";
		}else{
			header("location:index.php?controller=page&action=error");
		}	

	}
	public function render6($file,$data = array()){
		
		$view_file = "view/".$this->folder.'/'.$file.".php";

		if (is_file($view_file)) {
			extract($data);
			ob_start();
			require $view_file;

			$content = ob_get_clean();

			require "view/layout/application6.php";
		}else{
			header("location:index.php?controller=page&action=error");
		}	

	}
}