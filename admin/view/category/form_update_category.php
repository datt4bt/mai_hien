<?php require 'view/header.php';?>



<div class="container">
	<h1>Sửa Thể loại</h1>
	<form action="?controller=category&action=process_update_category" method="post">
  <div class="form-group">
  	<input type="hidden" name="id_category" value="<?php  echo $array_one->id_category ?>">
    <label for="exampleFormControlInput1">Tên Thể loại</label>
    <input type="text"   name="name_category" value="<?php  echo $array_one->name_category ?>"  class="form-control" id="exampleFormControlInput1" >
  </div>
 

 
 
    <button type="submit" class="btn btn-primary mb-2">Sửa </button>
</form>

	</div>
<!-- end list product -->


<script src="../jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>