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
   <!-- Toteuta for-toistolause joka näyttää numerot kymmenestä yhteen -->
	  
   <div class="loota3" >
     <?php
    
	   for($luku = 10; $luku >= 1; $luku-=1)
	   {
		   echo "$luku<br>";
	   }

     ?>
   </div>
 </body>
</html>