<?php 

class Product{
	public $id_product;
	public $name_product;
	public $description;
	public $id_category;

	public function process_insert_product(){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		 $select="select max(id_product) from product";
    $result=mysqli_query($connect,$select);
    $each=mysqli_fetch_array($result);
    $max_id_product=$each['max(id_product)']+1;
		$insert="insert into product values('$this->name_product')";
		mysqli_query($connect,$insert);
		mysqli_close($connect);

	}
	 function view_all(){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$select="select * from product join category on product.id_category=category.id_category";
		$result=mysqli_query($connect,$select);
		$array=[];
		foreach ($result as $each ) {
		$obj= new Product();
		$obj->id_product=$each['id_product'];
		$obj->name_product=$each['name_product'];
		$obj->description=$each['description'];
		$obj->name_category=$each['name_category'];
		array_push($array,$obj);
}


mysqli_close($connect);
return $array;

	}
	public function delete_product($id_product){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$delete="delete from product where id_product='$id_product'";
		mysqli_query($connect,$delete);
		mysqli_close($connect);

	}
	public function update_product($id_product){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$select="select * from product join category on product.id_category=category.id_category where product.id_product='$id_product'";
		$result=mysqli_query($connect,$select);
		$each=mysqli_fetch_array($result);
		
	
		$object= new Product();
		$object->id_product=$each['id_product'];
		$object->name_product=$each['name_product'];
		$object->description=$each['description'];
		$object->id_category=$each['id_category'];
		


mysqli_close($connect);
return $object;

	}
	public function process_update_product(){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$update="update  product set name_product='$this->name_product',description='$this->description'
		where id_product='$this->id_product'";
		mysqli_query($connect,$update);
		mysqli_close($connect);

	}
	
}