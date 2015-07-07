	<!-- Database connection is created with the db AskCoupon.com -->
	<?php
	//Step1
	 if ( ! empty( $_POST ) ) {
	  
	  // Connect to MySQL
	  $mysqli = new mysqli( 'localhost', 'root', 'sai123', 'askcoupon.com' );
	 
	  // Check our connection
	  if ( $mysqli->connect_error ) {
	    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
	  }
	  // include 'response.php';
	  }
	 $db = mysql_connect("localhost","root","sai123"); 
	 if (!$db) {
	 die("Database connection failed miserably: " . mysql_error());
	 }
	?>
	<?php
	//Step2
	 $db_select = mysql_select_db("AskCoupon.com",$db);
	 if (!$db_select) {
	 die("Database selection also failed miserably: " . mysql_error());
	 }
	 // used for printing default categories
	 $query = "SELECT store_name FROM `featured_stores` ORDER BY `featured_stores`.`store_id` ASC";
	   $result = mysql_query($query);?>
	  <?php if (!$result) die ("Database access failed: " . mysql_error());

	  $query_coupon = "SELECT * FROM `default_coupon_categories` ORDER BY `default_coupon_categories`.`name` ASC";
	   $result_coupon = mysql_query($query_coupon);?>
	  <?php if (!$result_coupon) die ("Database access failed: " . mysql_error());?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin Panel</title>
		<link rel="stylesheet" href="bootstrap.min.css">
		<script src="jquery-2.1.4.js"></script>
		<link rel="stylesheet" href="css/bootstrap.datepicker.css">
		<script src="js/bootstrap-datepicker.min.js"></script>	
		<script>
	            // When the document is ready
	            $(document).ready(function () {
	                
	                $('#example1').datepicker({
	                    format: "yyyy-mm-dd"
	                });  
	            
	            });
	        </script>
		<!-- <script src="bootstrap.min.js"></script> -->
	</head>
	<body>
	<div class="container well">
		<div class="row">
			<div class="col-md-3">
				<form class="form-horizontal" action="response.php" method="post" >
				<fieldset>

				<!-- Form Name -->
				<legend>Add a store</legend>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="store_type">Select Type</label>
				  <div class="controls">
				    <select name="store_type" class="input-medium">
				      <option>Featured</option>
				      <option>Non-Featured</option>
				    </select>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="store_id">Store Id</label>
				  <div class="controls">
				    <input name="store_id" type="text" placeholder="store_id" class="input-xlarge">
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="store_name">Store Name</label>
				  <div class="controls">
				    <input name="store_name" type="text" placeholder="store_name" class="input-xlarge" required="">
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="no_of_coupons">No of Coupons</label>
				  <div class="controls">
				    <input name="no_of_coupons" type="text" placeholder="no_of_coupons" class="input-xlarge" required="">
				  </div>
				</div>

				<!-- Textarea -->
				<div class="control-group">
				  <label class="control-label" for="caption">Caption</label>
				  <div class="controls">                     
				    <textarea name="caption">enter description here</textarea>
				  </div>
				</div>

				<!-- Button -->
				<div class="control-group">
				  <label class="control-label" for="submit">Add Store</label>
				  <div class="controls">
				    <button name="submit" class="btn btn-primary">Store</button>
				  </div>
				</div>

				</fieldset>
				</form>

			</div>



			<div class="col-md-3">
				<form class="form-horizontal" action="response_code.php" method="post" >
				<fieldset>

				<!-- Form Name -->
				<legend>Add a Coupon</legend>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="coupon_type">Select Type</label>
				  <div class="controls">
				    <select name="coupon_type" class="input-medium">
				      <option>Coupon</option>
				      <option>Deal</option>
				    </select>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="coupon_id">Coupon Id</label>
				  <div class="controls">
				    <input name="coupon_id" type="text" placeholder="coupon_id" class="input-xlarge">
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="coupon_code">Coupon Code</label>
				  <div class="controls">
				    <input name="coupon_code" type="text" placeholder="coupon_code" class="input-xlarge" required="">
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="coupon_store">Coupons Store</label>
				  <div class="controls">
					<select name="coupon_store" class="input-large">
					<?php while($row_store = mysql_fetch_assoc($result)) {?>
				    <option><?php echo $row_store["store_name"] ?></option>
					<?php } ?>
				    </select>	
				  </div>
				</div>

				<!-- Textarea -->
				<div class="control-group">
				  <label class="control-label" for="expiary_date">Expiary date</label>
				  <div class="controls">                     
				    <div class="hero-unit">
	                <input  type="text" placeholder="click to show datepicker"  id="example1" name="expiary_date" >
	            </div>
				  </div>
				</div>

				
				
				Select Basic
				<div class="control-group">
				  <label class="control-label" for="coupon_category_code">Select Category Code</label>
				  <div class="controls">
				    <select name="coupon_category_code" class="input-large">
				        <?php while($row_coupon = mysql_fetch_assoc($result_coupon)) {?>
				    <option><?php echo $row_coupon["data_filter"]; ?></option>
					<?php } ?>
				    </select>
				  </div>
				</div>
<!-- Creating connection again -->
				<?php
				$query1 = "SELECT * FROM `default_coupon_categories` ORDER BY `default_coupon_categories`.`name` ASC";
	   			$result1 = mysql_query($query1);?>

				<div class="control-group">
				  <label class="control-label" for="coupon_category">Select Category</label>
				  <div class="controls">
				    <select name="coupon_category" class="input-large">

				        <?php while($row1 = mysql_fetch_assoc($result1)) {?>
				    <option><?php echo $row1["name"]; ?></option>
					<?php } ?>
				    </select>
				  </div>
				</div>


				<!-- Button -->
				<div class="control-group">
				  <label class="control-label" for="submit">Add Store</label>
				  <div class="controls">
				    <button name="submit" class="btn btn-primary">Store</button>
				  </div>
				</div>

				</fieldset>
				</form>

			</div>
		</div>
	</div>
		
	 
	</body>
	</html>