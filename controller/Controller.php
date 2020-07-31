<?php 
class Controller{
	static function product(){
	require 'model/product.php';
	$array_product=Product::home();
	require 'view/home.php';
	}
	static function product_detail(){
		
		require 'model/product.php';
		$id_product=$_GET['id_product'];
		$product_detail=Product::product_detail($id_product);
	require 'view/product_detail.php';
	}

}