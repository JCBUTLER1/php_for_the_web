<!doctype html>


<html lang="en">

    <head>
        <meta charset="utf-8">
		
        <title>Product Cost Calculator</title>
		
        <style type="text/css">
			.number {
				font-weight: bold;
			}
		</style>
    </head>

    <body>
	
		<?php
			//This page receives the data from the form calculator.html.
						   
			//Display any errors.
			ini_set('display_errors', 1);
			   
			//Create shorthand versions of the variables to represent the user input from the calculator.html form.
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];
			$discount = $_POST['discount'];
			$tax = $_POST['tax'];
			$shipping = $_POST['shipping'];
			$payments = $_POST['payments'];
			
			//Calculate the total cost.
			$total = (($price * $quantity) + $shipping) - $discount;
					
			//Determine the tax rate.
			$taxrate = $tax / 100;
			$taxrate = $taxrate + 1;
			
			//Factor in the tax rate.
			$total = $total * $taxrate;
			
			//Calculate the monthly payments.
			$monthly = $total / $payments;
			
			//Apply proper formatting of the total and monthly payment.
			$total = number_format($total, 2);
			$monthly = number_format($monthly, 2);
			
			//Print the results of the calculations.
			print "<p>You have selected to purchase<br>
					<span class=\"number\">$quantity</span> shirt(s) at <br>
					<span class=\"number\">$price</span> price each plus a <br>
					<span class=\"number\">$shipping</span> shipping cost and a <br>
					<span class=\"number\">$tax</span> percent tax rate.<br>
					
					After your $<span class=\"number\">$discount</span> discount, the total cost is $<span class=\"number\">$total</span>. <br>
					
					Divided over <span class=\"number\">$payments</span> monthly payments, that would be $<span class=\"number\">$monthly</span> each.</p>";
		?>
		        
    </body>
</html>