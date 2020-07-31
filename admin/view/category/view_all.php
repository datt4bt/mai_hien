<?php require 'view/header.php';?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Mã Thể loại</th>
      <th scope="col">Tên Thể loại</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($array_category as $category): ?>
    <tr>
      <th scope="row"><?php echo $category->id_category;  ?></th>
      <td><?php echo $category->name_category;  ?></td>
      <td><a href="?controller=category&action=update_category&id_category=<?php echo $category->id_category ?>"><button  type="button" class="btn btn-info">Sửa</button></a></td>
      <td><a href="?controller=category&action=delete_category&id_category=<?php echo $category->id_category ?>"><button type="button" class="btn btn-danger">Xóa</button></a></td>
    </tr>
   <?php endforeach ?>
  </tbody>
</table>