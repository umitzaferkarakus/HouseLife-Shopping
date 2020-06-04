<div class="main-slide">
			<div id="sync1" class="owl-carousel">
				

			<?php 
			$askslider=$db->prepare("SELECT * FROM slider");
			$askslider->execute();

			while($checkslider=$askslider->fetch(PDO::FETCH_ASSOC)) { $count++?>
				

				<div class="item">
					<div class="slide-desc">
						<div class="inner">
							<h1> <?php echo $checkslider['slider_name'] ?> </h1>
							<p>
								
							</p>
							<button class="btn btn-default btn-red btn-lg">Add to cart</button>
						</div>
						<div class="inner">
							<div class="pro-pricetag big-deal">
								<div class="inner">
										<span class="oldprice">????</span>
										<span>????</span>
										<span class="ondeal">Best Deal</span>
								</div>
							</div>
						</div>
					</div>
					<div class="slide-type-1">
					<a href=" <?php echo $checkslider['slider_link'] ?> ">	<img src=" <?php echo $checkslider['slider_pic'] ?> " alt="" class="img-responsive"></a>
					</div>

				</div>
				

				<?php } ?>
				
				
			</div>
		</div>


