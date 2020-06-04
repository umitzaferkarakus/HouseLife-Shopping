<?php include 'header.php' ?>

<div class="container">

	<div class="clearfix"></div>
	<div class="lines"></div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
	<div class="title-bg">
		<div class="title">Shopping Cart</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered chart">
			<thead>
				<tr>
					<th>Remove</th>
					
					<th>Name</th>
					<th>Code</th>
					<th>QTY</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>


				<?php 
				$user_id=$checkuser['user_id'];
				$askcart=$db->prepare("SELECT * FROM cart where user_id=:id");
				$askcart->execute(array(
					'id' => $user_id
					));

				while($checkcart=$askcart->fetch(PDO::FETCH_ASSOC)) {

					$product_id=$checkcart['product_id'];
					$askproduct=$db->prepare("SELECT * FROM product where product_id=:product_id");
					$askproduct->execute(array(
						'product_id' => $product_id
						));

					$checkproduct=$askproduct->fetch(PDO::FETCH_ASSOC);
					$total_price+=$checkproduct['product_price']*$checkcart['product_quantity'];

					
					?>

					<tr>
						<td><form><input type="checkbox"></form></td>
						



						
						


						<td><?php echo $checkproduct['product_name'] ?></td>
						<td><?php echo $checkproduct['product_id'] ?></td>
						<td><form><input type="text" class="form-control quantity" value="<?php echo $checkcart['product_quantity'] ?>"></form></td>
						<td><?php echo $checkproduct['product_price'] ?></td>
					</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-6">


			</div>
			<div class="col-md-3 col-md-offset-3">
				<div class="subtotal-wrap">
					
					<div class="total">Total : <span class="bigprice"><?php echo $total_price ?> TL</span></div>
					<div class="clearfix"></div>
					<a href="payment.php" class="btn btn-default btn-yellow">Continue Payment</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>

	<?php include 'footer.php' ?>