<?php
require_once("includes/database.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ask Coupon | Promotional codes,Coupons,Deals and many more</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    .store_div{
      height:auto;
      width: 50px;
      
    }
    </style>
  </head>
  <body>
  <?php
  $query = "select store_name  from stores_names";
  $result = mysql_query($query);
  ?>
  <?php
  if (!$result) die ("Database access failed: " . mysql_error());?>

<body>
<div class="container">
<div class="row ">

 <?php
 $n = 1;
while($post = mysql_fetch_array($result)) {
    // echo $n;
    print '<div class="store_div">';
    print $post['store_name'];
    // print $post['store_id_no'];
    // print $post['all_deals'];
    // print $post['coupons'];
    print '</div>';
    $n ++;
}?>
    </div>
</div>




  <?php
require_once("includes/database_closing.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/jquery/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>