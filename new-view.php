<?php
if (isset($_GET['new_id'])) {
	if ($_GET['new_id']=='1') {
		?>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12 text-center mt-5">
					<h1>PROPAK MYANMAR 2016</h1>
				</div>
				<div class="col-sm-12 text-center"> 24TH - 26TH SEPTEMBER 2016</div>
				<div class="col-sm-10 mt-5">
					<img src="img/obj-new1.png" class="w-100">
				</div>
				<div class="col-sm-12 mt-5 mb-5">
					รายละเอียด.................................................................
				</div>
			</div>
		</div>
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