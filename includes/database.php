<!-- Database connection is created with the db AskCoupon.com -->
<?php
//Step1
 $db = mysql_connect("localhost","root","sai123"); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }
//Step2
 $db_select = mysql_select_db("AskCoupon.com",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
 // echo "Database connection Established";
?>