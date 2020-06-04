<?php 

include 'header.php'; 

if (isset($_GET['sef'])) {


	$askcategory=$db->prepare("SELECT * FROM category where category_seourl=:seourl");
	$askcategory->execute(array(
		'seourl' => $_GET['sef']
		));

	$checkcategory=$askcategory->fetch(PDO::FETCH_ASSOC);

	 $category_id=$checkcategory['category_id'];


	$askproduct=$db->prepare("SELECT * FROM product where category_id=:category_id order by product_id DESC");
	$askproduct->execute(array(
		'category_id' => $category_id
		));

	$count=$askproduct->rowCount();

} else {

	$askproduct=$db->prepare("SELECT * FROM product order by product_id DESC");
	$askproduct->execute();

}




?>



<div class="container">

	<div class="clearfix"></div>
	<div class="lines"></div>
</div>

<div class="container">
	
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="title-bg">
				<div class="title">Products</div>
			
			</div> 
			<div class="row prdct"><!--Products-->


				<?php
				


				while($checkproduct=$askproduct->fetch(PDO::FETCH_ASSOC)) {

					$product_id=$checkproduct['product_id'];
					$askproductfoto=$db->prepare("SELECT * FROM productfoto where product_id=:product_id order by profoto_raw ASC limit 1 ");
					$askproductfoto->execute(array(
						'product_id' => $product_id
						));

					$checkproductfoto=$askproductfoto->fetch(PDO::FETCH_ASSOC);

					?>

					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div class="hot"></div>
								<a href="product-<?=seo($checkproduct["product_name"]).'-'.$checkproduct["product_id"]?>"><img src="<?php echo $checkproductfoto['profoto_picway'] ?>" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><?php echo $checkproduct['product_price'] ?> </span>₺</div></div>
							</div>
							<span class="smalltitle"><a href="product.htm"><?php echo $checkproduct['product_name'] ?></a></span>
							<span class="smalldesc">Product Code: <?php echo $checkproduct['product_id'] ?></span>
						</div>
					</div>


					<?php } ?>





				</div><!--Products-->



			</div>

			<?php include 'sidebar.php' ?>
		</div>
		<div class="spacer"></div>
	</div>
	
	<?php include 'footer.php'; ?>