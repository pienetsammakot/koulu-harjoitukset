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
 
   <!-- - Tuomas on 25, Henri on 27  ja Petteri 30 vuotias
        - siirrä funktiokutsulla etunimi ja ikä etuNimi()-funktioon
        - lisää etuNimi()-funktioon muuttuja johon sijoitetaan nykyinen vuosiluku sekä 
          lisää funktioon laskutoimitus joka laskee syntymävuoden
        - näytä esimerkin yllä) tyylisesti: Etunimi Sukunimi. Syntyi vuonna XXXX -->
	
   <div class="loota5">
     <?php
      
       function etuNimi($nimi, $ika)
	   {
		  $vuosi = 2021;
		  $svuosi = $vuosi - $ika;
          echo "$nimi Rupunen. Syntyi vuonna $svuosi. <br>";
       }
       etuNimi("Tuomas", "25");
       etuNimi("Henri", "27");
       etuNimi("Petteri", "30"); 	
	  
	 ?>
   </div>
 </body>
</html>