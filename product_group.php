<?php
if (isset($_GET['product_group'])) {
	if ($_GET['product_group']=='1') {
		?>
		<section id="product-group">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-12 mt-5 text-center">
						<h2><b>RETORT</b></h2>
					</div>
					<div class="col-sm-12 mt-3 mb-5 text-center">
						Our Products FoodMachinery Thailand
					</div>
					<div class="col-sm-12 mb-5">
						<div class="row justify-content-md-center">
							<div class="col-sm-4 m-0 p-0"><img src="img/obj-products-g1.png" class="w-100"></div>
							<div class="col-sm-4 m-0 p-0 text-center product-detail">
								<div class="row justify-content-md-center">
									<div class="col-sm-12 text-center mt-5"><h4><b>DIRECT STEAM RETOR</b></h4></div>
									<div class="col-sm-6 mt-5"><button class="btn btn-outline-dark btn-sm" onclick="location.href='./?page=product-view&pro_id=1'">READ MORE</button></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
}else {
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mt-5 mb-5 text-center"><h1>ไม่พบข้อมูล</h1></div>
		</div>
	</div>
	<?php
}
?>
