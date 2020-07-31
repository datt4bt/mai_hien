<?php 

$action='';
if(isset($_GET['action']))
{
	$action=$_GET['action'];
}
switch ($action) {
	case '':
		require 'controller/Controller.php';
		Controller::product();
		break;
	case 'product_detail':
		require 'controller/Controller.php';
		Controller::product_detail();
		break;
	
	default:
		# code...
		break;
}