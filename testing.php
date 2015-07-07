<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap: Dropdown on Hover Plugin Demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="A demo for my simple plugin that enables Bootstrap dropdowns to activate on hover and provide a nice user experience.">
  <meta name="author" content="Cameron Spear">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="css/testing.css">
  <style>
 /*div.js-navbar-collapse{
    display:inline-block;
  }*/
  </style>
  </head>
<body>
<nav class="navbar">
    <div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <!-- <a class="navbar-brand" href="#">Large Dropdown Menu</a> -->
  </div>
  <!-- <div class="row"> -->
  <?php include 'includes/fashion.php'; ?>
  <?php include 'includes/electronics.php'; ?>
  <?php include 'includes/travel_food.php'; ?>
  <?php include 'includes/baby_furniture.php'; ?>
  <?php include 'includes/bank_offers.php'; ?>
  <?php include 'includes/daily_offers.php'; ?>
  <!-- </div> -->
  
  
</nav>


  <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
  <script src="jquery/jquery-2.1.4.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="jquery/bootstrap-hover-dropdown.js"></script> -->

  <!-- <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script> -->

  

</body>
</html>
