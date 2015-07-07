<?php require_once("includes/database.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ask Coupon | Promotional codes,Coupons,Deals and many more</title>
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <script src="jquery/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
    footer{
          position: relative;
          bottom: 0;
          }
    </style>
  </head>
  <body class="features">
  <?php $query = "select * from stores"; $result = mysql_query($query);?>
  <?php if (!$result) die ("Database access failed: " . mysql_error());?>
  
  <?php include'header.php';?>
  <?php include'responsive_dropdown.php';?>
  <?php include'hover.php';?>
  <?php include'footer.php' ?>
   
  <?php require_once("includes/database_closing.php"); ?>
  </body>
</html>