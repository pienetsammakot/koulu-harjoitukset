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
   <!--If-lauseen opettelua. -->
	  
   <div class="loota2">
     <?php
       $luku1 = 50;
	   $luku2 = 100;
	
	   if($luku1 >= 50 AND $luku1 < 100) {
		  echo "Luku 1 on 50 tai pienempi kuin 100<br>";
	   }
	
	   if($luku2 > 100) {
		  echo "Luku2 on suurempi kuin 100";
	   }
     ?>
   </div>
 </body>
</html>