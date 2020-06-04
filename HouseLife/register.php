﻿<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Register</div>
							<p >New User? By creating an account you be able to shop faster, be up to date on an order's status...</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/process.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Registration Information</div>
				</div>

				<?php 

				if ($_GET['status']=="diffpassword") {?>

				<div class="alert alert-danger">
					<strong>Error!</strong> The passwords you entered do not match.
				</div>
					
				<?php } elseif ($_GET['status']=="incompletepass") {?>

				<div class="alert alert-danger">
					<strong>Error!</strong> Your password must be at least 6 characters long.
				</div>
					
				<?php } elseif ($_GET['status']=="usedname") {?>

				<div class="alert alert-danger">
					<strong>Error!</strong> This user has been registered before.
				</div>
					
				<?php } elseif ($_GET['status']=="failed") {?>

				<div class="alert alert-danger">
					<strong>Error!</strong> Failed To Register Contact The System Administrator.
				</div>
					
				<?php }
				 ?>


				


				<div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="text" class="form-control"  required="" name="user_name" placeholder="Enter your name and surname...">
					</div>
					
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="email" class="form-control" required="" name="user_mail"  placeholder="Attention! Your email address will be your user name.">
					</div>
				</div>
				<div class="form-group dob">
					<div class="col-sm-6">
						<input type="password" class="form-control" name="user_passwordone"    placeholder="Enter your password...">
					</div>
					<div class="col-sm-6">
						<input type="password" class="form-control" name="user_passwordtwo"   placeholder="Enter Your Password Again...">
					</div>
				</div>



				<button type="submit" name="saveuser" class="btn btn-default btn-red">Save</button>
			</div>
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Did you forget your password?</div>
				</div>


				<center><img width="400" src="http://www.emrahyuksel.com.tr/dimg/sifremi-unuttum.jpg"></center>
			</div>
		</div>
	</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>