<?php require_once("includes/database.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ask Coupon | Promotional codes,Coupons,Deals and many more</title>
<link rel="stylesheet" href="css/hover.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="jquery/jquery-2.1.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <script>
    $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
</script> 
   
  </head>
  <body>
  <?php $query = "select * from featured_stores"; $result = mysql_query($query);?>
  <?php if (!$result) die ("Database access failed: " . mysql_error());?>
  
  
<div class="container">
  
    <div class="row">
        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/flipkart.jpeg" alt="...">
            </div>
      </div>
      
        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/paytm.jpeg" alt="...">
            </div>
      </div>

        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/savaari.jpeg" alt="...">
            </div>
      </div>

        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/uber.jpeg" alt="...">
            </div>
      </div>

      <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/foodpanda.jpeg" alt="...">
            </div>
      </div> 
      <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/mobikwik.jpeg" alt="...">
            </div>
      </div>       
        
  </div>






  <div class="row">
        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/zoomcar.jpeg" alt="...">
            </div>
      </div>
      
        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/jabong.jpeg" alt="...">
            </div>
      </div>

        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/tinyowl.jpeg" alt="...">
            </div>
      </div>

        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/americanswan.jpeg" alt="...">
            </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/snapdeal.jpeg" alt="...">
            </div>
      </div>      
      <div class="col-lg-2 col-sm-6 col-xs-6 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Coupons No</h4>
                    <p>Get exiting deals here</p>
                    
                </div>
                <img src="img/askmebazaar.jpeg" alt="...">
            </div>
      </div>  
        
  </div>
  
</div><!-- /.container -->




    
  <?php
require_once("includes/database_closing.php"); ?>
    
  </body>
</html>