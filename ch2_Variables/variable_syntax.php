<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
  </head>
  <body>
       
       <!-- Chapt 2 VARIABLES:
          
           This script declares four variables (three string values and one integer value).
           A string is printed to the scrren concatenating the variables. 
           
       -->
        <?php
            $street = "12345 Miramar Pl., Apt 10"; /* Declare a variable as a string for the street value */
            $city = "San Diego"; /* Declare a variable as a string for the city value */
            $state = "CA"; /* Declare a variable as a string for the state value */
            $zip = 92110; /* Declare a variable for the zip code value */           
            
            /* Print to the page an HTML paragraph with the variables to form a statement using their declared values */
            print "<p>My address is:<br> 
                    $street<br>
                    $city $state $zip</p>";
        ?>
  </body>
</html>