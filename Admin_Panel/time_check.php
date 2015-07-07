<?php
				//expiary date checking
				$input_time = $row_coupon["expiary_date"];	
				$date = date("Y-m-d",strtotime(str_replace('/','-',$input_time)));
				// echo "$date";
				$today = date("Y-m-d");
				// echo "$today";
				$datediff = strtotime($date) - strtotime($today);
				$x = "0";
				if ($datediff >= $x)
				{
					$add_variable = "recent";
				}else {
					$add_variable = "expired";
				}
				if ($datediff == $x)
				{
					$daily_variable = "daily";
				}else {
					$daily_variable = "";
				
			    }				

?>