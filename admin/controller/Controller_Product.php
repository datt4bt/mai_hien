<?php 
class Controller_Product{

	static function insert_product(){
	
	require 'model/Category.php';
		$array=Category::view_all();
		require 'view/product/form_insert_product.php';
	}
	static function view_product(){
		require 'model/Product.php';
		$array_product=Product::view_all();
		
		require 'view/product/view_all.php';
	}
	static function delete_product(){
		$id_product=$_GET['id_product'];
		require 'model/Product.php';
		Product::delete_product($id_product);
		header('location:?controller=product&action=view_product');	
	}
	static function update_product(){
		$id_product=$_GET['id_product'];
		require 'model/Product.php';
		$array_one=Product::update_product($id_product);
		require 'model/Category.php';
		$array_category=Category::view_all();
		require 'view/product/form_update_product.php';

			
	}
		static function process_update_product(){
		require 'model/Product.php';
		$product= new Product();
		$product->id_product=$_POST['id_product'];
		$product->name_product=$_POST['name_product'];
		$product-> process_update_product();
		header('location:?controller=product&action=view_product');

		
	
	}

}