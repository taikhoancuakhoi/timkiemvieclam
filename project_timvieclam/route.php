<?php  

$controllers  = array(

	'user'=>['add','error','login','index','chooseRegister','register','userRegister','buRegister','checkRegister','checkLogin','logout','postBusiness'],

	'job'=>['index','detail','camnang','getJobRandom'],

	'page'=>['error'],
	'document'=>['index']
);

if (!array_key_exists($controller,$controllers) || !in_array($action,$controllers[$controller])) {
	$controller = "page";
	$action = "error";
}

include_once("controller/".$controller."_controller.php");

$klass = ucwords($controller)."Controller";
$controller = new $klass;
$controller->$action();