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
  /*New Code added here*/
  $couponId = $_POST['coupon_id'];

  $check=mysqli_query($mysqli,"select * from coupons where coupon_id='$couponId'");
    $checkrows=mysqli_num_rows($check);
   if($checkrows>0){echo "coupon with same id exists";}  
else{  
    //insert results from the form input
    $query = "INSERT INTO coupons ( coupon_id, coupon_code,coupon_store,expiary_date,coupon_category,coupon_category_code ) VALUES ( '{$mysqli->real_escape_string($_POST['coupon_id'])}', '{$mysqli->real_escape_string($_POST['coupon_code'])}', '{$mysqli->real_escape_string($_POST['coupon_store'])}', '{$mysqli->real_escape_string($_POST['expiary_date'])}','{$mysqli->real_escape_string($_POST['coupon_category'])}','{$mysqli->real_escape_string($_POST['coupon_category_code'])}' )";
    // $insert = $mysqli->query($sql);
    $result = mysqli_query($mysqli, $query) or die('Error querying database.');

    mysqli_close($mysqli);
    echo "Coupon Added";
    }
    
  };

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <!-- <script src="jquery-2.1.4.js"></script> -->
  <script src="bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <a class="btn btn-primary" href="../admin_panel" role="button">Insert Another Store</a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <a class="btn btn-info" href="#" role="button">Show Stores</a>
    </div>
  </div>
</div>


</body>
</html>