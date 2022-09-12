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
   <!--Tee PHP-koodaus joka toteuttaa seuraavan ehtorakenteen tulostuksineen:

       LUKU_1 = 12
       LUKU_2 = 14
       LUKU_3 = 16

       jos LUKU_2 on yhtäsuuri tai suurempi kuin kuin 14, 
       näytä LUKU_1 + LUKU_2 ja laskun tulos 
       näytä LUKU_2 + LUKU_3 ja laskun tulos 
       näytä LUKU_1 + LUKU_3 ja laskun tulos -->
	  
   <div class="loota3" >
     <?php
       $LUKU_1 = 12;
	   $LUKU_2 = 14;
	   $LUKU_3 = 16;
	
	   $tulos1 = $LUKU_1 + $LUKU_2;
	   $tulos2 = $LUKU_2 + $LUKU_3;
	   $tulos3 = $LUKU_1 + $LUKU_3;
	
	   if($LUKU_2 >= 14)
	   {
		   echo $LUKU_1 . "+" . $LUKU_2 . "=" . $tulos1 . "<br>";
		   echo $LUKU_2 . "+" . $LUKU_3 . "=" . $tulos2 . "<br>";
		   echo $LUKU_3 . "+" . $LUKU_1 . "=" . $tulos3 . "<br>";
	   }
    ?>
  </div>	  
 </body>
</html>