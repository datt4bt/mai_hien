<?php
$ma_sp=$_POST['ma_sp'];
// Sử dụng vòng lặp for để lưu từng file trong mảng
foreach($_FILES['img_file']['name'] as $name => $value)
{
	$name_img = stripslashes($_FILES['img_file']['name'][$name]);
	$source_img = $_FILES['img_file']['tmp_name'][$name];
	$path_img = "../../../anh_review/" . $name_img;
	move_uploaded_file($source_img, $path_img);
	$connect=mysqli_connect('localhost','root','','webphone');
	$insert="insert into hinh_anh_sp(ma_sp,anh_sp) values('$ma_sp','$name_img')";
	mysqli_query($connect,$insert);
}

?>