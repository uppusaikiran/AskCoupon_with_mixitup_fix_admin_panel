<?php require_once("includes/database.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ask Coupon | Promotional codes,Coupons,Deals and many more</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="features">
  <?php $query = "select * from stores"; $result = mysql_query($query);?>
  <?php if (!$result) die ("Database access failed: " . mysql_error());?>
  
  <div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <!-- <div class="row"> -->
      <!-- <div class="col-md-12"> -->
        <!-- <h1> -->
        <a href='index.html' class='navbar-brand'>
        Blasting off with Bootstrap</a>
        <!-- </h1> -->
        <button type="button" class="navbar-toggle" data-toggle
        ="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <ul class="nav nabar-nav navbar-right collapse navbar-collapse">
          <li><a href="#">Tickets</a></li>
          <li><a href="#">Stations</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </div> 
    </div>


<div class="container">
    <div class="row text-center">
      <div class="col-md-6 well well-lg">
        <h2>The Fastest way to space</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Earum neque in veniam ratione molestiae quisquam dolore</p>
        <button class="btn btn-lg btn-default" type="button">Take a tour</button>
        <button class="btn btn-lg btn-primary" type="button">Book Tickets Now</button>
      </div>

    <div class="col-md-6 col-xs-10  text-center">
    <i class="glyphicon glyphicon-briefcase"></i>
    <h2>Book Today</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ipsam repudiandae itaque libero, illo, excepturi, eum tenetur dicta fugit minima repellat quos. Praesentium perspiciatis fugit, placeat provident inventore beatae reiciendis.</p>
    </div>
    </div>
    
    
    <div class="row"> 
    <div class="col-md-4 col-xs-6 text-center">
    <i class="glyphicon glyphicon-random"></i>
    <h2>Heading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae atque animi facilis inventore dolore asperiores nesciunt explicabo, fugiat adipisci harum impedit eligendi rem, ea optio nulla quam a qui doloribus.</p>
    </div>
    <div class="col-md-4 col-xs-6 text-center">
    <i class="glyphicon glyphicon-send"></i>
    <h2>Heading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quos, aperiam omnis suscipit voluptatem totam, magnam cupiditate expedita perferendis. Dicta iste, eveniet vitae soluta voluptas repellat ipsum dolor laborum nobis.</p>
    </div>
    <div class="col-md-4 text-center">
    <i class="glyphicon glyphicon-random"></i>
    <h2>Heading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugit temporibus reiciendis qui iste ducimus necessitatibus, alias nam ipsa nulla consequatur impedit voluptates quam aut numquam ad asperiores dolores eum?</p>
    </div>
    </div>
    </div>
    


  
<!-- Footer -->
  <div class="container-fluid" style="background-color: #337ab7">
    <h4>Links</h4>
      <ul class="list-unstyled">
        <li>
          <a href="#">Home</a>
          <a href="#">Tickets</a>
          <a href="#">Stations</a>
        </li>
      </ul>
  </div>


  <?php
require_once("includes/database_closing.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/jquery/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>