<!doctype html>


<html lang="en">

    <head>
        <meta charset="utf-8">
		
        <title>Grades needed to stay off punishment</title>
		
        <style type="text/css">
		
		</style>
    </head>

    <body>
	
		<?php
			//This page receives the data from the form calculator.html.
						   
			//Display any errors.
			ini_set('display_errors', 1);
			   
			//Create three variables for three random numbers between 1 and 99.
			$n1 = mt_rand(70, 100);
			$n2 = mt_rand(70, 100);
			$n3 = mt_rand(70, 100);
			
			//Print out the random numbers.
			print "<p>Your grades need to be:<br>
			$n1 <br>
			$n2 <br>
			$n3</p>";

		?>
		        
    </body>
</html>

<!--This PHP script generates random numbers.  Variables are set for number1, number2, and number3 with a value created by the Mersenne Twister_Random Number function.
The parameters for the number selected are 70 to 100.
The numbers selected by the function are assigned to the variables and displayed in the printed message. -->