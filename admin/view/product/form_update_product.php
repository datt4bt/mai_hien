<?php require 'view/header.php';?>
<!-- end menu -->
<!-- slide -->

<!-- list product -->



<div class="container">
	<h1>Thêm Sản phẩm</h1>
	<form action="view/product/process_update_product.php" method="post" enctype="multipart/form-data" id="formUpload" ">
  <div class="form-group">
  	<input type="hidden" name="id_product" value="<?php  echo $array_one->id_product ?>">
    <label for="exampleFormControlInput1">Tên Sản Phẩm</label>
    <input type="text" name="name_product" value="<?php echo $array_one->name_product ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
 <div class="box-upload">
    <label for="exampleFormControlInput1">Hình ảnh</label>
      <input type="file" name="img_file[]" multiple="true" onchange="previewImg(event);" id="img_file" accept="image/*">
      <div class="box-preview-img"></div>

    
      
   
  </div>
   <div class="form-group">
   <?php 
$connect=mysqli_connect('localhost','root','','mai_hien');
		$select="select * from picture where id_product='$array_one->id_product'";
		$result=mysqli_query($connect,$select);
		
		foreach ($result as $each ) {
		?>
		<img style="width: 400px;height: 400px" src="../anh_san_pham/<?php echo $each['picture'] ?>"  class="img-thumbnail" >
		<a href="view/product/delete_picture.php?id=<?php echo $each['id_product'] ?>&name=<?php echo $each['picture'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a>
		<?php
		
		
}


mysqli_close($connect);
    ?>
  </div>

 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mô tả</label>
    <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $array_one->description ?></textarea>
  </div>
  <select name="id_category" class="form-control">
  	<?php 
  	foreach ($array_category as $category ) :?>
  		  <option value="<?php echo $category->id_category ?>" 
  		  	<?php if ($category->id_category==$array_one->id_category) echo "selected"?>>
  		  	<?php echo $category->name_category ?>
  		  	
  		  </option>
  	 <?php
  	 endforeach ?>
 
</select>
    <button type="submit" class="btn btn-primary mb-2">Thêm sản phẩm</button>
</form>

	</div>
<!-- end list product -->


<script src="../jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>