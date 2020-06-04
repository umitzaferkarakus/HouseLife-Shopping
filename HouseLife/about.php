<?php 

include 'header.php';

//Belirli veriyi seçme işlemi
$askabout=$db->prepare("SELECT * FROM about where about_id=:id");
$askabout->execute(array(
	'id' => 0
	));
$checkabout=$askabout->fetch(PDO::FETCH_ASSOC);


?>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bigtitle">About Us</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9"><!--Main content-->

			<div class="title-bg">
				<div class="title">Trailer</div>
			</div>

			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $checkabout['about_video'] ?>" frameborder="0" allowfullscreen></iframe>

			<div class="title-bg">
				<div class="title">Mission</div>
			</div>

			<blockquote><?php echo $checkabout['about_mission']; ?></blockquote>



			<div class="title-bg">
				<div class="title">Vision</div>
			</div>

			<blockquote><?php echo $checkabout['about_vision']; ?></blockquote>
			<div class="title-bg">
				<div class="title"><?php echo $checkabout['about_title']; ?></div>
			</div>
			<div class="page-content">
				<p>
					<?php echo $checkabout['about_content']; ?>
				</p>

			</div>




		</div>




		<!-- Sidebar buraya gelecek -->
		<?php include 'sidebar.php'; ?>


	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>