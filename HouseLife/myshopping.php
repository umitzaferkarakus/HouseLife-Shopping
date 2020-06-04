<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">My Order Information</div>
							<p >List your orders</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/process.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-12">
				<div class="title-bg">
					<div class="title">Order Information</div>
				</div>

				<div class="table-responsive">
					<table class="table table-bordered chart">
						<thead>
							<tr>
								
								<th>Order No</th>
								<th>Date</th>
								<th>Amount</th>
								<th>Payment Type</th>
								
								
								
							</tr>
						</thead>
						<tbody>
							<?php 
							 $user_id=$checkuser['user_id'];
							$askorder=$db->prepare("SELECT * FROM taken where user_id=:id");
							$askorder->execute(array(
								'id' => $user_id
								));

								while($checkorder=$askorder->fetch(PDO::FETCH_ASSOC)) {?>
								<tr>

									<td><?php echo $checkorder['order_id']; ?></td>
									<td><?php echo $checkorder['order_time']; ?></td>
									<td><?php echo $checkorder['order_total']; ?></td>
									<td><?php echo $checkorder['order_type']; ?></td>
									

									
								</tr>

								<?php } ?>
						</tbody>
					</table>
				</div>

				


				


				


				
			</div>
			
		</div>
	</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>