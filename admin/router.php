<?php 
$controller='';
if(isset($_GET['controller']))
{
	$controller=$_GET['controller'];
}
$action='';
if(isset($_GET['action']))
{
	$action=$_GET['action'];
}

switch ($controller) {
	case '':
		require 'controller/Controller.php';
		Controller::home();
		break;
	case 'product':
		require 'controller/Controller_Product.php';
			switch ($action) {
				case 'insert_product':
					
					Controller_Product::insert_product();

					break;
				case 'process_insert_product':
					
					Controller_Product::process_insert_product();
					break;
				case 'view_product':
					
					Controller_Product::view_product();
					break;
				case 'delete_product':
					
					Controller_Product::delete_product();
					break;
				case 'update_product':
					
					Controller_Product::update_product();
					break;
				case 'process_update_product':
					
					Controller_Product::process_update_product();
					break;
				
				default:
					# code...
					break;
			}
		break;
		case 'category':
		require 'controller/Controller_Category.php';
			switch ($action) {
				case 'insert_category':
					
					Controller_Category::insert_category();

					break;
				case 'process_insert_category':
					
					Controller_Category::process_insert_category();
					break;
				case 'view_category':
					
					Controller_Category::view_category();
					break;
				case 'delete_category':
					
					Controller_Category::delete_category();
					break;
				case 'update_category':
					
					Controller_Category::update_category();
					break;
				case 'process_update_category':
					
					Controller_Category::process_update_category();
					break;
				
				default:
					# code...
					break;
			}
		break;
	
	default:
		# code...
		break;
}




