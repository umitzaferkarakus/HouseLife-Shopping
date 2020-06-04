<div class="col-md-3"><!--sidebar-->
	<div class="title-bg">
		<div class="title">Categories</div>
	</div>



	<div class="categorybox">
		<ul>


			

			<?php
			$askcategory=$db->prepare("SELECT * FROM category order by category_row ASC");
			$askcategory->execute();

			while($checkcategory=$askcategory->fetch(PDO::FETCH_ASSOC)) {  ?>

			<li><a href="category-<?=seo($checkcategory["category_name"]) ?>"><?php echo $checkcategory['category_name'] ?></a></li>

		<?php } ?>



		</ul>
	</div>

	

	
	

			</div><!--sidebar-->