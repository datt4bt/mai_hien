<?php 
$id=$_GET['id'];
$name=$_GET['name'];
$connect=mysqli_connect('localhost','root','','mai_hien');
		$delete="delete from picture where picture='$name'";
		$result=mysqli_query($connect,$delete);
		mysqli_close($connect);
		?>
		<script type="text/javascript">
			location.assign('../../?controller=product&action=update_product&id_product=<?php  echo $id ?>');
		</script>
