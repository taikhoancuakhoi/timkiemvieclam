<?php  

$controllers  = array(

	'user'=>['add','error','login','index','chooseRegister','businessRegister','checkBusinessRegister','userRegister','checkUserRegister','checkLogin','userProfile','businessProfile','indexAdmin','logout','postBusiness','userJobSent','checkFile','chooseLogin','userLogin','businessLogin','checkUserLogin','checkBusinessLogin','saveJob','userSaveJob','userInfo',"updateInfo","businessPost","checkBusinessPost","showTinTd","deleteTin","hoSoDaTuyen","sendMess","checkMess","showHoSo","admin","checkAdmin","account","listAccount"],

	'job'=>['index','detail','camnang','jobSearch','getJobRandom','CamNang'],

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