<?php require 'view/header.php';?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Mã Thể loại</th>
      <th scope="col">Tên Thể loại</th>
       <th scope="col">Mô tả</th>
       <th scope="col">Thể loại</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($array_product as $product): ?>
    <tr>
      <th scope="row"><?php echo $product->id_product;  ?></th>
      <td><?php echo $product->name_product;  ?></td>
       <td><?php echo $product->description;  ?></td>
       <td><?php echo $product->name_category;  ?></td>
      <td><a href="?controller=product&action=update_product&id_product=<?php echo $product->id_product ?>"><button  type="button" class="btn btn-info">Sửa</button></a></td>
      <td><a href="?controller=product&action=delete_product&id_product=<?php echo $product->id_product ?>"><button type="button" class="btn btn-danger">Xóa</button></a></td>
    </tr>
   <?php endforeach ?>
  </tbody>
</table>