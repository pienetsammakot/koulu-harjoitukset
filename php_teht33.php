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
 
   <!-- Tee pyoristaLukufunktio jollaa näytetään funktioon
        siirretty luku X sekä floor(X)-funktiolla pyöristetty luku X.

        Lukuja näytetään www-sivulle funktiolla seuraavan esimerkin mukaisesti allekkain:
        Luku 2,34 on pyöristettynä 2
 
        Luvut ovat seuraavat:
           2,35
           5,55
           -101,2
           -219,7 -->
	
   <div class="loota5">
     <?php
      
	   function pyoristaLuku($luku) {
		  
		  echo "Luku $luku on pyöristettynä " . floor($luku) . ".<br>";
		  
	   }
	  
	   pyoristaluku(2.35);
	   pyoristaluku(5.55);
	   pyoristaluku(-101.2);
	   pyoristaluku(-219.7);
		  
     ?>
   </div>
 </body>
</html>