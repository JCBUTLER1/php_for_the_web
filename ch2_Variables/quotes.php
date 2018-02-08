<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
  </head>
  <body>
       
       <!-- Chapt 2 VARIABLES:
          
           This script displays the difference between single quotes and double quotes used to initialize and display variable values.
            
           Single quotes will display the literal value.
           
           Double quotes display the interpreted value.
       -->
        <?php
            $first_name = "Jerrodo"; // Declare a variable $first_name with a value of "Jerrodo"
            $last_name = "Butler"; // Declare a variable $last_name with a value of "Butler"
      
            $name1 = '$first_name $last_name'; // Declare a variable $name1 with a value of the $first_name and $last_name variables using single quotes
            $name2 = "$first_name $last_name"; // Declare a variable $name2 with a value of the $first_name and $last_name variables using double quotes
      
            echo "<h1>Double Quotes</h1
                    <p>name1 is $name1 <br>
                    name2 is $name2</p>.";
                
            echo '<h1>Single Quotes</h1>
                    <p>name 1 is $name1 <br>
                    name2 is $name2</p>';
        ?>
  </body>
</html>