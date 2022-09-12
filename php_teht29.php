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
   <!-- Kirjoita funtio joka laskee kolmen vastuksen rinnankytkennän sekä näyttää laskussa 
	    käytettyjen vastusten ja kokonaisvastuksen arvot.  -->
	  
   <div class="loota4">
     <?php
      
       function rinnankytkennat()
	   {
		  $R1 = 100;
	      $R2 = 100;
	      $R3 = 100;

		  $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
		
		  echo "Vastusten arvot ovat: <br> $R1 Ω, $R2 Ω ja $R3 Ω. <br>";
		  $Rkok = number_format($Rkok, 2,',',' ');
		  echo "Kokonaisvastuksen arvo: <br> $Rkok Ω";
	   }
	
	   rinnankytkennat();
	
     ?>
   </div>
 </body>
</html>