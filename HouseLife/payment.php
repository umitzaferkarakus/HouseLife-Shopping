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
		<div class="title">Payment Page</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered chart">
			<thead>
				<tr>
					
					<th>Name</th>
					<th>Code</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
			</thead>

			<form action="nedmin/netting/process.php" method="POST">
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
						$total_amount+=$checkproduct['product_price']*$checkcart['product_quantity'];
						?>

						

						<tr>
							
							<td><?php echo $checkproduct['product_name'] ?></td>
							<td><?php echo $checkproduct['product_id'] ?></td>
							<td><?php echo $checkcart['product_quantity'] ?></td>
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
				
					<div class="total">Total : <span class="bigprice"><?php echo $total_amount ?> TL</span></div>
					<div class="clearfix"></div>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="tab-review">
			<ul id="myTab" class="nav nav-tabs shop-tab">

				
				<li><a href="#rev" data-toggle="tab">Banka Havalesi </a></li>
			</ul>




			<div id="myTabContent" class="tab-content shop-tab-ct">
				

				


				<div class="tab-pane fade " id="rev">


					<p>Chouse your bank.</p>


					<?php 

					$askbank=$db->prepare("SELECT * FROM bank order by bank_id ASC");
					$askbank->execute();

					while($checkbank=$askbank->fetch(PDO::FETCH_ASSOC)) { ?>

					
					<input type="radio" name="order_bank" value="<?php echo $checkbank['bank_name'] ?>">
					<?php echo $checkbank['bank_name']; echo " ";?><br>


					

					<?php } ?>

					<input type="hidden" name="user_id" value="<?php echo $checkuser['user_id'] ?>">
					<input type="hidden" name="order_total" value="<?php echo $total_amount ?>">
					<hr>
					<button class="btn btn-success" type="submit" name="savecart">Buy</button>

				</form>

			</div>


		</div>
	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php' ?>