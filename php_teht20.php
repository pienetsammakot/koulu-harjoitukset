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
   <!-- Tee PHP-koodaus käyttäen switch-case rakennetta joka muuttujan tulos arvon mukaan toimii seuraavasti:

      tulos = 123
      näytä teksti "Tulos on 123"
      tulos = 234
      näytä teksti "Tulos on 234"
      tulos = 456
      näytä teksti "Tulos on 456"
      tulos = 567
      näytä teksti "Tulos on 567"

      Testaa koodaus kaikilla annetuilla arvoilla.  -->
	  
   <div class="loota3" >
     <?php
       $tulos = 567;
	
	   switch($tulos) {
		   case 123:
		     echo "Tulos on 123.";
		     break;
		   case 234:
		     echo "Tulos on 234.";
		     break;
		   case 456:
		     echo "Tulos on 456.";
		     break;
		   case 567:
		     echo "Tulos on 567.";
		     break;
	   }
     ?>
   </div>
 </body>
</html>