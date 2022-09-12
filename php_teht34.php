<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="koodaukset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@0;1&family=Press+Start+2P&family=Special+Elite&display=swap" rel="stylesheet"> 
 </head>
 <body>
 
   <!-- Sovella esimerkkiä kolmen vastuksen rinnankytkennän laskemiseen seuraavasti:

           - vastusten arvot sijoitetaan muuttujiin R1,R2 ja R3 
             funktion ulkopuolella PHP-koodin alussa
           - edellä mainittuissa muuttujissa olevan arvot siirretään
             rinnanLasku-funktioon kuten esimerkissä
           - funktiosta palautetaan Rkok-muuttujan avulla tieto näytettäväksi
             kuten esimerkissäkin -->
	
   <div class="loota5">
     <?php
  
       $R1 = 100;
       $R2 = 100;
       $R3 = 100;
  
       function rinnanLasku($R1, $R2, $R3) {
		
		  $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
		  $Rkok = number_format($Rkok, 2,',',' ');
		  return $Rkok;
	   }
	
	   echo "1 / ((1 / 100) + (1 / 100) + (1 / 100)) = " . rinnanLasku($R1, $R2, $R3) . " Ω";
		  
     ?>
   </div>
 </body>
</html>