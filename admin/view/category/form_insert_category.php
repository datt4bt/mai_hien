<?php require 'view/header.php';?>



<div class="container">
	<h1>Thêm Thể loại</h1>
	<form action="?controller=category&action=process_insert_category" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Tên Thể loại</label>
    <input type="text"   name="name_category" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
 

 
 
    <button type="submit" class="btn btn-primary mb-2">Thêm</button>
</form>

	</div>
<!-- end list product -->


<script src="../jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>