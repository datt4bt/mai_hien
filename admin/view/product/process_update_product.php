<?php 
$id_product=$_POST['id_product'];
$name_product=$_POST['name_product'];
$description=$_POST['description'];
$id_category=$_POST['id_category'];

$connect=mysqli_connect('localhost','root','','mai_hien');
	$update_product="update  product set name_product='$name_product', description='$description', id_category='$id_category' where id_product='$id_product'";
    foreach($_FILES['img_file']['name'] as $name => $value)
{
	$name_img = stripslashes($_FILES['img_file']['name'][$name]);
	 
	$source_img = $_FILES['img_file']['tmp_name'][$name];
	$path_img = "../../../anh_san_pham/" . $name_img;
	move_uploaded_file($source_img, $path_img);
	$insert="insert into picture(id_product,picture) values('$id_product','$name_img')";
	mysqli_query($connect,$insert);
	
}
mysqli_query($connect,$update_product);

header('location:../../?controller=product&action=view_product');