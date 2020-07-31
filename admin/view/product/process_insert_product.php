<?php 
$name_product=$_POST['name_product'];
$description=$_POST['description'];
$id_category=$_POST['id_category'];

$connect=mysqli_connect('localhost','root','','mai_hien');
		 $select="select max(id_product) from product";
    $result=mysqli_query($connect,$select);
    $each=mysqli_fetch_array($result);
    $max_id_product=$each['max(id_product)']+1;
	$insert_product="insert into product values('$max_id_product','$name_product','$description','$id_category')";
    foreach($_FILES['img_file']['name'] as $name => $value)
{
	$name_img = stripslashes($_FILES['img_file']['name'][$name]);
	$source_img = $_FILES['img_file']['tmp_name'][$name];
	$path_img = "../../../anh_san_pham/" . $name_img;
	move_uploaded_file($source_img, $path_img);
	$insert="insert into picture(id_product,picture) values('$max_id_product','$name_img')";
	mysqli_query($connect,$insert);
	
}
mysqli_query($connect,$insert_product);
echo $max_id_product;
header('location:../../?controller=product&action=view_product');