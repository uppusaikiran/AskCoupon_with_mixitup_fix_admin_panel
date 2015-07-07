<?php require_once("includes/database.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ask Coupon | Promotional codes,Coupons,Deals and many more</title>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    footer{
          position: fixed;
          bottom: 0;
          }
    div.col-lg-2{
      padding: 20px;
      border: 1px solid #ddd;
      top:25px;
      margin-bottom: 20px;
      
    }
    /* css */
    </style>
  </head>
  <body class="features">
  <?php $query = "select * from stores"; $result = mysql_query($query);?>
  <?php if (!$result) die ("Database access failed: " . mysql_error());?>
  
  <div class="container">
  <div class="row">
    <div class="col-lg-2 ">Store1</div>
    <div class="col-lg-2 col-lg-offset-1">Store2</div>
    <div class="col-lg-2 col-lg-offset-1">Store2</div>
    <div class="col-lg-2 col-lg-offset-1">Store4</div>

  </div>
  <div class="row">
    <div class="col-lg-2 ">Store5</div>
    <div class="col-lg-2 col-lg-offset-1">Store6</div>
    <div class="col-lg-2 col-lg-offset-1">Store7</div>
    <div class="col-lg-2 col-lg-offset-1">Store8</div>

  </div>
  </div>

  <div class="picholder">
    <img class="fancypics" src=http://placehold.it/500x650></img>
    <div class="overlay"><p class="text_box">Hello World!</p></div>
</div>



    
  <?php
require_once("includes/database_closing.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/jquery/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>