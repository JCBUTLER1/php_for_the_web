<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <style>
        .bold {
            font-weight: bold;
        }  
    </style>
  </head>
  <body>
       
       <!-- Chapt 1 GETTING STARTED WITH PHP:
          
           This script prints "Hello, Jerrodo".
           'Hello' is displayed with the css declaration of 'font-weight: bold' which is declared in the <style> element located in the <head>.
           Since there are multiple sets of double quotes, the backslash character is used to "escape" the css value quotes located inside of the printed statement.
           
       -->
        <?php
            print "<p>The following is presented by PHP: <span class=\"bold\">Hello</span>, Jerrodo</p>";
        ?>
  </body>
</html>