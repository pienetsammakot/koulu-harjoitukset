<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="koodaukset.css">
  <link rel="stylesheet" href="phptaulukko.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> 
 </head>
 <body>
   <!-- Näytä numerot 10-1 while-silmukalla. -->
	  
   <div class="loota4">
     <?php
  
       $numero = 10;
  
       while($numero >= 1) {
	       echo "Numero on: $numero <br>";
	       $numero--;
       }
  
     ?>
   </div>
 </body>
</html>