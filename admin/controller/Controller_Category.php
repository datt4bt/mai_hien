<?php 
class Controller_Category{

	static function insert_category(){
	require 'view/category/form_insert_category.php';
	}
	static function process_insert_category(){
		require 'model/Category.php';
		$category= new Category();
		$category->name_category=$_POST['name_category'];
		$category-> process_insert_category();
		header('location:?controller=category&action=view_category');

		
	
	}
	static function view_category(){
		require 'model/Category.php';
		$array_category=Category::view_all();
		
		require 'view/category/view_all.php';
	}
	static function delete_category(){
		$id_category=$_GET['id_category'];
		require 'model/Category.php';
		Category::delete_category($id_category);
		header('location:?controller=category&action=view_category');	
	}
	static function update_category(){
		$id_category=$_GET['id_category'];
		require 'model/Category.php';
		$array_one=Category::update_category($id_category);
		require 'view/category/form_update_category.php';

			
	}
		static function process_update_category(){
		require 'model/Category.php';
		$category= new Category();
		$category->id_category=$_POST['id_category'];
		$category->name_category=$_POST['name_category'];
		$category-> process_update_category();
		header('location:?controller=category&action=view_category');

		
	
	}

}