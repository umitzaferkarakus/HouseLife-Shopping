<?php 

include 'header.php';



//Belirli veriyi seçme işlemi
$askmenu=$db->prepare("SELECT * FROM menu where menu_seourl=:sef");
$askmenu->execute(array(
	'sef' => $_GET['sef']
	));
$checkmenu=$askmenu->fetch(PDO::FETCH_ASSOC);


?>



<div class="container">
	
	<div class="row">
		<div class="col-md-9"><!--Main content-->

			<div class="title-bg">
				<div class="title"> <?php echo $checkmenu['menu_name'] ?> </div>
			</div>

			

			



			

			
			
			<div class="page-content">
				<p>
					<?php echo $checkmenu['menu_detail']; ?>
				</p>

			</div>




		</div>




		<!-- Sidebar buraya gelecek -->
		<?php include 'sidebar.php'; ?>


	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>