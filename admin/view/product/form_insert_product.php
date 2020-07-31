<?php require 'view/header.php';?>
<!-- end menu -->
<!-- slide -->

<!-- list product -->



<div class="container">
	<h1>Thêm Sản phẩm</h1>
	<form action="view/product/process_insert_product.php" method="post" enctype="multipart/form-data" id="formUpload" ">
  <div class="form-group">
    <label for="exampleFormControlInput1">Tên Sản Phẩm</label>
    <input type="text" name="name_product" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
 <div class="box-upload">
    <label for="exampleFormControlInput1">Hình ảnh</label>
      <input type="file" name="img_file[]" multiple="true" onchange="previewImg(event);" id="img_file" accept="image/*">
      <div class="box-preview-img"></div>
    
      
   
  </div>

 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mô tả</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <select name="id_category" class="form-control">
    <?php 
    foreach ($array as $category ) {?>
        <option value="<?php echo $category->id_category ?>"><?php echo $category->name_category ?></option>
     <?php
     } ?>
 
</select>
<br>
    <button type="submit" class="btn btn-primary mb-2">Thêm sản phẩm</button>
</form>

	</div>
<!-- end list product -->


<script src="../jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>