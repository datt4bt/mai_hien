<?php 

class Product{
	public $id_product;
	public $name_product;
	public $description;
	public $picture;
	static function home(){
		$connect=mysqli_connect('localhost','root','','mai_hien');
$select="select * from product";
$result=mysqli_query($connect,$select);
$array_product=[];
foreach ($result as $each) {

	$obj=new Product();
	$obj->id_product=$each['id_product'];
	$obj->name_product=$each['name_product'];
	

	array_push($array_product,$obj);
}
mysqli_close($connect);
return $array_product;
	}
	static function product_detail($id_product){
		$connect=mysqli_connect('localhost','root','','mai_hien');
$select="select * from product where id_product='$id_product'";
$result=mysqli_query($connect,$select);
$product_detail=[];
foreach ($result as $each) {
	$object=new Product();
	$object->id_product=$each['id_product'];
	$object->name_product=$each['name_product'];
	$object->description=$each['description'];
	array_push($product_detail,$object);
}
mysqli_close($connect);
return $product_detail;
}
}