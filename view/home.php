<?php require 'header.php'; ?>


<!-- list product -->



			<div class="container">
				<div class="row mt-5">
					<h2 class="list-product-title">Mái hiên quán Coffee</h2>
					<div class="list-product-subtitle">
						
					</div>
					<div class="product-group">
				
						<div class="row">
													  <?php 

			foreach ($array_product as $each ) :
				

			 ?>
							<div class="col-md-3 col-sm-6 col-12">
								<div class="card card-product mb-3">
									<?php 
										$connect=mysqli_connect('localhost','root','','mai_hien');
											$select="select * from picture where id_product='$each->id_product'";
											$result=mysqli_query($connect,$select);
											$img=mysqli_fetch_array($result);
											?>
												<img style="width: 300px; height:250px" class="card-img-top"  src="anh_san_pham/<?php echo $img['picture'] ?>" alt="Card image cap">
											<?php
									 ?>
								

								  <div class="card-body">
								    <h5 class="card-title product-title"><?php echo $each->name_product ?></h5>
								   
							    
							    	<a href="?action=product_detail&id_product=<?php  echo $each->id_product   ?>" class="btn btn-outline-info btn-detail">Xem chi tiết</a>
							    	<span class="new-price">Liên hệ</span>
								  </div>

								</div>

							</div>
							
							
							<?php endforeach ?>	
							<hr>
							</div>
								
						</div>

					</div>

			</div>
<!-- end list product -->
	




<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>