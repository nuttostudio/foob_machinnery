<?php 
	include'inc/config.php';
 ?>
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
	if (isset($_GET['page'])) {
		if ($_GET['page']=="home") {
			include'about_us.php';
			include'our_vision.php';
			include'our_products.php';
			include'video.php';
			include'new.php';
		}elseif ($_GET['page']=="about") {
			include'about_us.php';
			include'after_sales.php';
		}elseif ($_GET['page']=="news") {
			include'news_all.php';
		}elseif ($_GET['page']=="product") {
			include'our_products.php';
		}elseif ($_GET['page']=="contact") {
			include'contact.php';
		}elseif ($_GET['page']=="new-view") {
			include'new-view.php';
		}elseif ($_GET['page']=="product-group") {
			include'product_group.php';
		}elseif ($_GET['page']=="product-view") {
			include'product_view.php';
		}
	}else{
		include'about_us.php';
		include'our_vision.php';
		include'our_products.php';
		include'video.php';
		include'new.php';
	}
	
	include'footer.php';
	?>
</body>
<script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>