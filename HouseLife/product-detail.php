<?php 

include 'header.php'; 


$askproduct=$db->prepare("SELECT * FROM product where product_id=:product_id");
$askproduct->execute(array(
	'product_id' => $_GET['product_id']
));

$checkproduct=$askproduct->fetch(PDO::FETCH_ASSOC);


?>



<?php 

if ($_GET['status']=="ok") {?>

	<script type="text/javascript">
		alert("Reviews succesfully added...");
	</script>

<?php }
?>

<div class="container">
	
	<div class="clearfix"></div>
	<div class="lines"></div>
</div>

<div class="container">
	<div class="row">

	</div>
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="title-bg">
				<div class="title"><?php echo $checkproduct['product_name'] ?></div>
			</div>
			<div class="row">
				<div class="col-md-6">

					<?php
					$product_id=$checkproduct['product_id'];
					$askproductfoto=$db->prepare("SELECT * FROM productfoto where product_id=:product_id order by profoto_raw ASC limit 1 ");
					$askproductfoto->execute(array(
						'product_id' => $product_id
						));

					$checkproductfoto=$askproductfoto->fetch(PDO::FETCH_ASSOC);

					?>
					

					<div class="dt-img">
						<div class="detpricetag"><div class="inner"><?php echo $checkproduct['product_price'] ?> TL</div></div>
						<a class="fancybox" href="<?php echo $checkproductfoto['profoto_picway'] ?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo $checkproductfoto['profoto_picway'] ?>" alt="" class="img-responsive"></a>
					</div>


					<?php
					$product_id=$checkproduct['product_id'];
					$askproductfoto=$db->prepare("SELECT * FROM productfoto where product_id=:product_id order by profoto_raw ASC limit 1,3 ");
					$askproductfoto->execute(array(
						'product_id' => $product_id
						));

					while($checkproductfoto=$askproductfoto->fetch(PDO::FETCH_ASSOC)) {

					?>

					<div class="thumb-img">
						<a class="fancybox" href="<?php echo $checkproductfoto['profoto_picway'] ?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo $checkproductfoto['profoto_picway'] ?>" alt="" class="img-responsive"></a>
					</div>

					<?php } ?>

				</div>
				



				<div class="col-md-6 det-desc">
					<div class="productdata">
						<div class="infospan">Product code<span><?php echo $checkproduct['product_id']; ?></span></div>
						<div class="infospan">Product Price <span><?php echo $checkproduct['product_price']; ?></span></div>




						<div class="clearfix"></div>
						<hr>


						<form action="nedmin/netting/process.php" method="POST">

							<div class="form-group">
								<label for="qty" class="col-sm-2 control-label">QTY</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" value="1" name="product_quantity">
								</div>
								<input type="hidden" name="user_id" value="<?php echo $checkuser['user_id'] ?>">

								<input type="hidden" name="product_id" value="<?php echo $checkproduct['product_id'] ?>">
								<div class="col-sm-4">
									<button type="submit" name="addcart" class="btn btn-default btn-red btn-sm"><span class="addchart">Add Cart</span></button>
								</div>
								<div class="clearfix"></div>
							</div>

						</form>

						<div class="sharing">
							<div class="share-bt">
								<div class="addthis_toolbox addthis_default_style ">
									<a class="addthis_counter addthis_pill_style"></a>
								</div>
								
								<div class="clearfix"></div>
							</div>


							<div  class="avatock"><span>

								<?php if ($checkproduct['product_stock']>=1) {

									echo "Stok Adeti : ".$checkproduct['product_stock'];
								} else {

									echo "No product left.";
								} ?>

							</span></div>
						</div>



					</div>
				</div>
			</div>

			<div class="tab-review">
				<ul id="myTab" class="nav nav-tabs shop-tab">
					
					<li <?php if ($_GET['status']!="ok") {?>
						class="active"
						<?php } ?>><a href="#desc" data-toggle="tab">Description</a></li>
						<li 

						<?php if ($_GET['status']=="ok") {?>
							class="active"
						<?php } ?>

						<?php 
						$user_id=$checkuser['user_id'];
						$product_id=$checkproduct['product_id'];

						$askreviews=$db->prepare("SELECT * FROM reviews where product_id=:product_id");
						$askreviews->execute(array(
							'product_id' => $product_id
						));


						?>
						><a href="#rev" data-toggle="tab">Reviews (<?php echo $askreviews->rowCount(); ?>)</a></li>
						
					</ul>




					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade <?php if ($_GET['status']!="ok") {?>
							active in
							<?php } ?>" id="desc">
							<p>
								<?php echo $checkproduct['product_detail'] ?>
							</p>
						</div>


						<div class="tab-pane fade <?php if ($_GET['status']=="ok") {?>
							active in
							<?php } ?>" id="rev">


							<?php 




							while($checkreviews=$askreviews->fetch(PDO::FETCH_ASSOC)) {

								$ruser_id=$checkreviews['user_id'];

								$askruser=$db->prepare("SELECT * FROM user where user_id=:id");
								$askruser->execute(array(
									'id' => $ruser_id
								));

								$checkruser=$askruser->fetch(PDO::FETCH_ASSOC);
								?>



								
								<p class="dash">
									<span><?php echo $checkruser['user_name'] ?></span> (<?php echo $checkreviews['reviews_time'] ?>)<br><br>
									<?php echo $checkreviews['reviews_detail'] ?>
								</p>

								
							<?php } ?>


							<h4>Write Reviews</h4>

							<?php if (isset($_SESSION['useruser_mail'])) {?>

								<form action="nedmin/netting/process.php" method="POST" role="form">




									<div class="form-group">
										<textarea name="reviews_detail" class="form-control" placeholder="" id="text"></textarea>
									</div>

									<input type="hidden" name="user_id" value="<?php echo $checkuser['user_id'] ?>">

									<input type="hidden" name="product_id" value="<?php echo $checkproduct['product_id'] ?>">

									<input type="hidden" name="site_url" value="<?php 
									echo "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""; 

									?>">

									

									<button type="submit" name="addreviews" class="btn btn-default btn-red btn-sm">SEND</button>
								</form>

							<?php } else {?>

								You need <a style="color:red" href="register">login</a>...

							<?php } ?>



						</div>

						


					</div>
				</div>

				
				<div class="spacer"></div>
			</div><!--Main content-->


			<?php include 'sidebar.php' ?>
		</div>
	</div>

	<?php include 'footer.php' ?>