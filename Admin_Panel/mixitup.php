<!-- Database connection is created with the db AskCoupon.com -->
<?php
//Step1
 $db = mysql_connect("localhost","root","sai123"); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }
//Step2
 $db_select = mysql_select_db("AskCoupon.com",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
 // used for printing default categories
 $query = "SELECT name,data_filter FROM `default_coupon_categories` ORDER BY `default_coupon_categories`.`index` ASC";
   $result = mysql_query($query);?>
  <?php if (!$result) die ("Database access failed: " . mysql_error());?>
 <!-- used for getting coupons -->
 <?php
 $coupon = "SELECT * FROM `coupons` ORDER BY `coupons`.`coupon_id` ASC";
   $coupon_result = mysql_query($coupon);?>
  <?php if (!$coupon_result) die ("Database access failed: " . mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/layout.css">
	
	<link rel="stylesheet" href="css/bootstrap.datepicker.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<!-- <script type="text/javascript" src="http://www.queness.com/js/bsa.js"></script> -->
	
	<script>$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();});</script>
	
</script>
</head>
<body>
	<div class="container">
		<ul id="filters" class="clearfix">
		<?php while($row = mysql_fetch_assoc($result)) {?>
		<li><span  class="filter" id="<?php echo $row["name"] ?>" data-filter="<?php echo $row["data_filter"] ?>"><?php echo $row["name"] ?></span></li>	
		<?php } ?>
		</ul>

		<!-- Improved php Version -->
		<div id="portfoliolist">
			<?php while($row_coupon = mysql_fetch_assoc($coupon_result)) {
			    		 include 'time_check.php';
			    		 $extra = $row_coupon["coupon_category_code"];
			    		 if ($add_variable === "expired"){
			    		 	$extra = "expired";
			    		 }else{
			    		 	$extra = $extra." ".$add_variable." ".$daily_variable;;
			    		 }
			?>		
			
			

			
			<div class="portfolio <?php echo "$extra"?>" data-cat="<?php echo $row_coupon["coupon_category_code"] ?> <?php echo "$add_variable"?>" id="<?php echo $row_coupon["coupon_id"] ?>">
				<div class="portfolio-wrapper">
				<div class="new">
				<a href="#"><img src="img/portfolios/pizza/<?php echo $row_coupon["coupon_store"] ?>.jpg" alt=""/></a><!--Dim 400X300px-->
				<div class="label">
					<div class="label-text">
						<a class="text-title"><?php echo $row_coupon["coupon_store"] ?></a>
						<span class="text-category"><?php echo $row_coupon["coupon_category"] ?></span>
					</div><!--label_text ends-->
					<div class="label-bg">
					</div><!--label-bg ends -->
				</div><!-- label ends -->
				</div>
			</div><!-- portfolio-wrapper ends -->
			</div><!-- portfolio class -->
			<?php } ?><!-- Php while loop ends -->
		</div><!--Portfoliolist ends-->
		
	</div><!-- container -->


	<script>
	document.getElementById("All").classList.add("active");
	</script>

</body>
</html>