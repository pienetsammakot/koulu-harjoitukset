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
   <!-- Toteuta for-toistolauseella taulukko-ohjelma, joka tulostaa suomenkielen aakkoset järjestyksessä. -->
	  
   <div class="loota3">
     <?php
  
       $aakkoset = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L",
	                     "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X",
					     "Y", "Z", "Å", "Ä", "Ö");
	   $taulukoko = count($aakkoset);
    
	   for($rivi = 0; $rivi < $taulukoko; $rivi++)
	   {
		   echo $aakkoset[$rivi] . "<br>";
	   }

     ?>
   </div>
 </body>
</html>