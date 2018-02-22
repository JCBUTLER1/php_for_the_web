<!doctype html>


<html lang="en">

    <head>
        <meta charset="utf-8">
		
        <title>Your Feedback</title>
		
        <style type="text/css">
			
		</style>
    </head>

    <body>
	
		<?php
			  
			ini_set('display_errors', 1); //TUrn on the "display errors setting". Display any errors with the PHP script.
			   
			//The $_POST array is created to hold the values from the feedback form.
			$title = $_POST['title']; //Declare variable named $title and assign the value that is given by the user in the feedback form. 
			$name = $_POST['name']; //Declare variable named $name and assign the value that is given by the user in the feedback form.
			$response = $_POST['response']; //Declare variable named $response and assign the value that is given by the user in the feedback form.
			$comments = $_POST['comments']; //Declare variable named $comments and assign the value that is given by the user in the feedback form.
			
			print "<p>Thank you, $title $name, for your comments.</p>
			
					<p>You stated that you found this example to be '$response' and added:<br>
					$comments</p>";
		?>
		        
    </body>
</html>

<!--This is the PHP script that takes in the input values from the feedback form.
	Variables are set to reference the inputs given in the form and are assigned to the $_POST array.
    The variables can be used to send back a message that displays the same input values using HTML.  -->