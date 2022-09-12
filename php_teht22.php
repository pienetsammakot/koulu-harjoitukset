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
   <!-- Toteuta for-toistolause joka näyttää nollasta alkaen 50 välein 500 asti. -->
	  
   <div class="loota3">
     <?php
    
	   for($luku = 0; $luku <=500; $luku+=50)
	   {
		   echo "$luku<br>";
	   }

     ?>
   </div>
 </body>
</html>