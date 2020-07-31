<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/fontawesome-all.css">

</head>
<body>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Trang Chủ <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Giới Thiệu</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="product.php" id="navbarDropdown" >
	          Sản phẩm
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Mái xếp quán Coffee</a>
	          <a class="dropdown-item" href="#">Mái Vòm</a>
	          <a class="dropdown-item" href="#">Mái xếp Bảo Nam</a>
	          <a class="dropdown-item" href="#">Mái xếp quán nhậu</a>
	         
	        </div>
	         <li class="nav-item">
	        <a class="nav-link" href="#">Liên Hệ</a>
	      </li>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0" >
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
	    </form>

	  </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://via.placeholder.com/1920x530" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/1920x530" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/1920x530" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->

<div class="container"> 
 <div class="card"> 
  <div class="container-fliud"> 
   <div class="wrapper row"> 
   	<?php foreach ($product_detail as $each ) : ?>
    <div class="preview col-md-6"> 
     <div class="preview-pic tab-content"> 
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
    
    <?php 
              $connect=mysqli_connect('localhost','root','','mai_hien');
                $select="select * from picture where id_product='$each->id_product'";
                $result=mysqli_query($connect,$select);
                $ee=mysqli_fetch_array($result);
                ?>
                 <div class="carousel-item active">
      <img style=" height:500px" src="anh_san_pham/<?php echo $ee['picture'] ?>" class="d-block w-100" alt="...">
    </div>
                <?php
               foreach ($result as $img ) {
                
                ?>
                 
      <div class="carousel-item ">
      <img style=" height:500px" src="anh_san_pham/<?php echo $img['picture'] ?>" class="d-block w-100" alt="...">
    </div>
                <?php
              }
             ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   
    
      
     
     </div> 
    
    </div> 
    <div class="details col-md-6"> 

     <h3 class="product-title"><?php echo $each->name_product ?></h3> 
     <div class="rating"> 
      <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
      </div> 
     </div> 
    <h4> <p class="product-description"><?php echo $each->description ?></p> </h4>
   
     
     <div class="action"> <a href="" ><button class="add-to-cart btn btn-default" type="button"><i>Liên hệ</i>:<b>0984080531</b></button></a> 


     	
     </div> 
    </div> 
   </div> 
<?php endforeach ?>
  </div> 
 </div>
</div> 


<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>