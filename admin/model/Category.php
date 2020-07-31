<?php 

class Category{
	public $id_category;
	public $name_category;
	public function process_insert_category(){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$insert="insert into category(name_category) values('$this->name_category')";
		mysqli_query($connect,$insert);
		mysqli_close($connect);

	}
	 function view_all(){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$select="select * from category";
		$result=mysqli_query($connect,$select);
		$array=[];
		foreach ($result as $each ) {
		$obj= new Category();
		$obj->id_category=$each['id_category'];
		$obj->name_category=$each['name_category'];
		array_push($array,$obj);
}


mysqli_close($connect);
return $array;

	}
	public function delete_category($id_category){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$delete="delete from category where id_category='$id_category'";
		mysqli_query($connect,$delete);
		mysqli_close($connect);

	}
	public function update_category($id_category){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$select="select * from category where id_category='$id_category'";
		$result=mysqli_query($connect,$select);
		$each=mysqli_fetch_array($result);
		
	
		$object= new Category();
		$object->id_category=$each['id_category'];
		$object->name_category=$each['name_category'];
		
		


mysqli_close($connect);
return $object;

	}
	public function process_update_category(){
		$connect=mysqli_connect('localhost','root','','mai_hien');
		$update="update  category set name_category='$this->name_category'
		where id_category='$this->id_category'";
		mysqli_query($connect,$update);
		mysqli_close($connect);

	}
	
}