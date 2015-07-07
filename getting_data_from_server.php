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
    div{
      border-radius: 1px;
    background: #8AC007;
    margin-left:2px;
    
    
    }
    </style>
  </head>
  <body>
  <?php
  $query = "select * from stores";
  $result = mysql_query($query);
  ?>
  <?php
  if (!$result) die ("Database access failed: " . mysql_error());?>

<body>
<div class="container">
<div class="row">

 <?php
while($row = mysql_fetch_array($result))
    {?> 
        <div class="col-xs-1">
                <?php echo $row['store_id']?>
        </div>
        <div class="col-xs-4">
                <?php echo $row['store_name']?>
        </div>
        <div class="col-xs-5">
                <?php echo $row['type_of_items']?>
        </div>
        <div class="col-xs-2">
                <?php echo $row['no_of_coupons']?>
        </div>
    <?php }?>
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