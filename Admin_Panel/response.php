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
  $storeName = $_POST['store_name'];

  $check=mysqli_query($mysqli,"select * from featured_stores where store_name='$storeName'");
    $checkrows=mysqli_num_rows($check);
   if($checkrows>0){echo "customer exists";}  
else{  
    //insert results from the form input
    $query = "INSERT INTO featured_stores ( store_id, store_name,no_of_coupons,caption ) VALUES ( '{$mysqli->real_escape_string($_POST['store_id'])}', '{$mysqli->real_escape_string($_POST['store_name'])}', '{$mysqli->real_escape_string($_POST['no_of_coupons'])}', '{$mysqli->real_escape_string($_POST['caption'])}' )";
    // $insert = $mysqli->query($sql);
    $result = mysqli_query($mysqli, $query) or die('Error querying database.');

    mysqli_close($mysqli);
    echo "Store Added";
    }
   
  };
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <link rel="stylesheet" href="bootstrap.min.css">
  <!-- <script src="jquery-2.1.4.js"></script> -->
  <script src="bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <a class="btn btn-primary" href="../admin_panel" role="button">Insert Another Store</a>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <a class="btn btn-danger" href="../admin_panel" role="button">Insert Another Coupon</a>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <a class="btn btn-success"  onClick="loadThis()" href="#" >Show Stores</a>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <button  class="btn btn-success" href="#" role="button">Show Coupons</button>
    </div>
  </div>
  <div class="row">
   
  </div>
</div>
<!-- http://stackoverflow.com/questions/20738329/how-to-call-a-php-function-on-the-click-of-a-button -->
<script>
function loadThis(){
        $.ajax({              
            type: "POST",
            url: "include.php",
            dataType: "html",
            success: function(data) {

            },
        });
        )}
</script>



</body>
</html>