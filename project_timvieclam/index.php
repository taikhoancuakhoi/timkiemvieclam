<?php  
require_once "connect.php";
define("path", "http://localhost:81/timkiemvieclam/project_timvieclam");
session_start();
if (isset($_GET['controller'])) {
	$controller = $_GET['controller'];
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}else{
		$action = "index";
	}
}else{
	$controller = "job";
	$action = 'index';
}
require_once "route.php";