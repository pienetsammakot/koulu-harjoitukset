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
   <!--Tee PHP-koodaus if-lauseilla joka antaa kokonaispisteitä vastaavan arvosanan seuraavasti:

          Kok.pisteet - Arvosana
          0 - 118 => 0
          119 - 212 => 1
          213 - 305 => 2
          306 - 400 => 3 -->
	  
   <div class="loota2">
     <?php
       $pisteet = 202.45;
	 
       if ($pisteet >= 0)
	   {
		   if($pisteet <=118)
		   {
			   echo "Arvosana on 0";
		   }
	   }
	   if ($pisteet >= 119)
	   {
		   if($pisteet <= 212)
		   {
			   echo "Arvosana on 1";
		   }
	   }
	   if ($pisteet >= 213)
	   {
		   if($pisteet <= 305)
		   {
			   echo "Arvosana on 2";
		   }
	   }
	   if ($pisteet >= 306)
	   {
		   if($pisteet <= 400)
		   {
			   echo "Arvosana on 3";
		   }
	   }
	 ?>
   </div>
 </body>
</html>