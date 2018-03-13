<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<body>
	<?php 
	include'menu_header.php';
	include'slide.php';
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
	include'footer.php';
	?>
</body>
<script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>