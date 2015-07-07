<?php
// 1) connect to the database by mysql_connect()

mysql_connect("localhost", "root", "sai123") or die(mysql_error()); 
// 2) than select the database like  mysql_select_db()

mysql_select_db("askcoupon.com") or die(mysql_error()); 
// 3) you need to use mysql_query()

$data = mysql_query("SELECT * FROM featured_stores where 1")  or die(mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery-2.1.4.js"></script>
	<!-- <script src="bootstrap.min.js"></script> -->
</head>
<body>
<div class="container">
<div class="row well">
<?php
while($row= mysql_fetch_array( $data )){ ?>
	<div class="col-xs- col-sm- col-md-2 col-lg-">
		<?php echo $row['store_id']; ?>	
	</div>
	<div class="col-xs- col-sm- col-md-4 col-lg-">
		<?php echo $row['store_name'] ?>										
	</div>
	<div class="col-xs- col-sm- col-md-3 col-lg-">
		<?php echo $row['no_of_coupons'] ?>
	</div>
	<div class="col-xs- col-sm- col-md-3 col-lg-">
		<?php echo $row['caption'] ?>
	</div>
	<?php } ?>
</div>
</div> 
</body>
</html>