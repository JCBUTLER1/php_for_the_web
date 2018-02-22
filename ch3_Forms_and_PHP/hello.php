<!doctype html>


<html lang="en">

    <head>
        <meta charset="utf-8">
		
        <title>Greetings</title>
		
        <style type="text/css">
			.bold {
				font-weight: bolder;
			}
		</style>
    </head>

    <body>
	
		<?php
				   
			//Display any errors.
			ini_set('display_errors', 1);
			   
			//Create that uses the names from hello.html. The variable will GET the name that is clicked by the user and put it in the print statement.
			$name = $_GET['name'];
						
			//Print the greeting using the name selected by the user from hello.html
			print "<p>Hello, <span class=\"bold\">$name</span>!</p>";
		?>
		        
    </body>
</html>

<!--This PHP script uses $_GET to get the $name value, depending on which link is clicked in the HTML document.  The variable of $name references the name value given in the links from the HTML and puts it in the response that is sent back. -->