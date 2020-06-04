<?php 

ob_start();
session_start();

include 'nedmin/netting/connect.php';
include 'nedmin/production/function.php';
$asksetting=$db->prepare("SELECT * FROM setting where setting_id=:id");
$asksetting->execute(array(
	'id'=>0
));
$checksetting=$asksetting->fetch(PDO::FETCH_ASSOC);

$askuser=$db->prepare("SELECT * FROM user where user_mail=:mail");
$askuser->execute(array(
	'mail' => $_SESSION['useruser_mail']
));
$count=$askuser->rowCount();
$checkuser=$askuser->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php echo $checksetting['setting_title'] ?> </title>
	<meta name="description" content="<?php echo $checksetting['setting_description'] ?>">
	<meta name="keywords" content="<?php echo $checksetting['setting_keywords'] ?>">
	<meta name="author" content="<?php echo $checksetting['setting_author'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
	<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- owl Style -->
	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">

	<!-- fancy Style -->
	<link rel="stylesheet" type="text/css" href="js\product\jquery.fancybox.css?v=2.1.5" media="screen">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="header"><!--Header -->
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-md-4 main-logo">
						<a href="index.php"><img width="250" 
							src=" <?php echo $checksetting['setting_logo'] ?> " alt="logo" class="logo img-responsive"></a>
						</div>
						<div class="col-md-8">
							<div class="pushright">
								<div class="top">
									

									<?php 

									if (!isset($_SESSION['useruser_mail'])) {?>

										<a href="#" id="reg" class="btn btn-default btn-dark">Login<span>-- or --</span>Sing In</a>

									<?php } else { ?>

										<a href="#"  class="btn btn-default btn-dark">Welcome<span>--</span><?php echo $checkuser['user_name'] ?></a>

									<?php } ?>


									


									<div class="regwrap">
										<div class="row">
											<div class="col-md-6 regform">
												<div class="title-widget-bg">
													<div class="title-widget">Login</div>
												</div>
												




												<form action="nedmin/netting/process.php" method="POST" role="form">


													<div class="form-group">
														<input type="text" class="form-control" name="user_mail" id="username" placeholder="User Mail">
													</div>


													<div class="form-group">
														<input type="password" class="form-control" name="user_password" id="password" placeholder="Password">
													</div>


													<div class="form-group">
														<button type="submit" name="userlogin" class="btn btn-default btn-red btn-sm">Login</button>
													</div>

												</form>







											</div>
											<div class="col-md-6">
												<div class="title-widget-bg">
													<div class="title-widget">Register</div>
												</div>
												<p>
													New User? By creating an account you be able to shop faster, be up to date on an order's status...
												</p>
												<a href="register.php"><button class="btn btn-default btn-yellow">Register Now</button></a>
											</div>
										</div>
									</div>
									<div class="srch-wrap">
										<a href="#" id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
									</div>
									<div class="srchwrap">
										<div class="row">
											<div class="col-md-12">
												<form class="form-horizontal" role="form">
													<div class="form-group">
														<label for="search" class="col-sm-2 control-label">Search</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="search">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="dashed"></div>
			</div><!--Header -->
			<div class="main-nav"><!--end main-nav -->
				<div class="navbar navbar-default navbar-static-top">
					<div class="container">
						<div class="row">
							<div class="col-md-10">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="navbar-collapse  collapse">
									<ul class="nav navbar-nav">
										<li><a href="index.php" class="active">Home</a><div class="curve"></div></li>


										<?php 
										$askmenu=$db->prepare("SELECT * FROM menu where menu_status=:status order by menu_row ASC limit 5");
										$askmenu->execute(array('status'=>1));

										while($checkmenu=$askmenu->fetch(PDO::FETCH_ASSOC)) { 
											?>
											<li><a href="

												<?php 

												if(!empty($checkmenu['menu_url'])){
													echo $checkmenu['menu_url'];

												}
												else{

													echo "page-".seo($checkmenu['menu_name']);
												}

												?>

												"> <?php echo $checkmenu['menu_name'] ?> </a></li>

											<?php } ?>





											

										</ul>
									</div>
								</div>
								

								
								<?php 

								if (isset($_SESSION['useruser_mail'])) {?>

									<ul class="small-menu">
										<li><a href="myaccount.php" class="myacc">My Account</a></li>
										<li><a href="myshopping.php" class="myshop">My Shopping</a></li>
										<li><a href="logout.php" class="mycheck">Logout</a></li>
									</ul>

								<?php }

								?>



								


							</div>
						</div>
					</div>
	</div><!--end main-nav -->