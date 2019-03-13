<?php  

$controllers  = array(

	'user'=>['add','error','login','index','register','checkLogin','logout'],

	'job'=>['index','detail','camnang','getJobRandom'],

	'page'=>['error']
);

if (!array_key_exists($controller,$controllers) || !in_array($action,$controllers[$controller])) {
	$controller = "page";
	$action = "error";
}

include_once("controller/".$controller."_controller.php");

$klass = ucwords($controller)."Controller";
$controller = new $klass;
$controller->$action();