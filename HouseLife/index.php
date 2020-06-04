<?php include 'header.php' ?>

<div class="container">

	<div class="clearfix"></div>
	<div class="lines"></div>


	<?php include'slider.php' ?>
</div>





<div class="container">
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="title-bg">
				<div class="title">About Shopping</div>
			</div>
			<p class="ct">
				<?php

				$askabout=$db->prepare("SELECT * FROM about where about_id=:id");
				$askabout->execute(array(
					'id' => 0
				));
				$checkabout=$askabout->fetch(PDO::FETCH_ASSOC);
				echo substr($checkabout['about_content'], 0,500) ;

				?>
			</p>

			<a href="about.php" class="btn btn-default btn-red btn-sm">  Read More</a>

			<div class="title-bg">
				<div class="title">Lastest Products</div>
			</div>
			<div class="row prdct"><!--Products-->
				


				<?php
				$askproduct=$db->prepare("SELECT * FROM product order by product_id ASC");
				$askproduct->execute();
				
				if ($count==0) {
					echo "Product not found in this category";
				}


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
								<a href="product-<?=seo($checkproduct["product_name"]).'-'.$checkproduct["product_id"]?>"><img src=" <?php echo $checkproductfoto['profoto_picway'] ?> " alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><?php echo $checkproduct['product_price'] ?> </span>₺</div></div>
							</div>
							<span class="smalltitle"><a href="product.htm"><?php echo $checkproduct['product_name'] ?></a></span>
							<span class="smalldesc">Product Code: <?php echo $checkproduct['product_id'] ?></span>
						</div>
					</div>


				<?php } ?>
				
				
				
			</div><!--Products-->
			<div class="spacer"></div>
		</div><!--Main content-->


		<?php include 'sidebar.php' ?>


	</div>
</div>


<?php include 'footer.php' ?>



