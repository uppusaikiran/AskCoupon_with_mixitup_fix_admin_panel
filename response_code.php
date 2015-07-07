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
    $query = "INSERT INTO coupons ( coupon_id, coupon_code,coupon_store,expiary_date,coupon_category ) VALUES ( '{$mysqli->real_escape_string($_POST['coupon_id'])}', '{$mysqli->real_escape_string($_POST['coupon_code'])}', '{$mysqli->real_escape_string($_POST['coupon_store'])}', '{$mysqli->real_escape_string($_POST['expiary_date,coupon_category'])}','{$mysqli->real_escape_string($_POST['coupon_category'])}' )";
    $insert = $mysqli->query($sql);
    $result = mysqli_query($mysqli, $query) or die('Error querying database.');

    mysqli_close($mysqli);
    echo "Coupon Added"
    }
    ;
  };
     /*New Code Ends Here*/
  // Insert our data
  /*$sql = "INSERT INTO coupons ( store_id, store_name,no_of_coupons,caption ) VALUES ( '{$mysqli->real_escape_string($_POST['store_id'])}', '{$mysqli->real_escape_string($_POST['store_name'])}', '{$mysqli->real_escape_string($_POST['no_of_coupons'])}', '{$mysqli->real_escape_string($_POST['caption'])}' )";
  $insert = $mysqli->query($sql);*/

  // Print response from MySQL
  /*if ( $insert ) {
     echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
}

  // Close our connection
  $mysqli->close();
*/
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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quod consequatur quis, temporibus eligendi, aut, libero ratione voluptatem id at, doloremque dignissimos modi eaque rem natus molestias? Ipsa, aspernatur, odio!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis in sequi assumenda repellat perspiciatis dolorem illum, deleniti, distinctio. Nesciunt sequi molestiae sint, rem ipsa omnis consequatur. Accusamus, voluptatum dolorum. Amet!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident similique voluptatibus error fugit nemo fugiat quis minus soluta, aliquam quidem ullam unde numquam veritatis omnis accusantium voluptate facilis, sequi laboriosam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat laborum animi dolorem dolor suscipit, architecto maiores esse nihil quod beatae velit sapiente repudiandae natus culpa laboriosam provident debitis ipsum voluptatibus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias blanditiis voluptates, id aut, commodi nostrum numquam amet eligendi quis explicabo laborum modi at quasi cumque temporibus incidunt nulla ex, adipisci!</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <a class="btn btn-info" href="#" role="button">Show Stores</a>
    <p>Ipsum dolor sit amet, consectetur adipisicing elit. Commodi quod consequatur quis, temporibus eligendi, aut, libero ratione voluptatem id at, doloremque dignissimos modi eaque rem natus molestias? Ipsa, aspernatur, odio!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis in sequi assumenda repellat perspiciatis dolorem illum, deleniti, distinctio. Nesciunt sequi molestiae sint, rem ipsa omnis consequatur. Accusamus, voluptatum dolorum. Amet!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident similique voluptatibus error fugit nemo fugiat quis minus soluta, aliquam quidem ullam unde numquam veritatis omnis accusantium voluptate facilis, sequi laboriosam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat laborum animi dolorem dolor suscipit, architecto maiores esse nihil quod beatae velit sapiente repudiandae natus culpa laboriosam provident debitis ipsum voluptatibus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias blanditiis voluptates, id aut, commodi nostrum numquam amet eligendi quis explicabo laborum modi at quasi cumque temporibus incidunt nulla ex, adipisci!</p>
    </div>
  </div>
</div>


</body>
</html>