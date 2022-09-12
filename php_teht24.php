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
   <!-- Toteuta for-toistolauseella taulukko-ohjelma, joka tulostaa suomenkielen aakkoset 
        järjestyksessä kaksiulotteisesta taulukosta. -->
	  
   <div class="loota3">
     <?php
  
       $aakkoset = array(
	                     array("A", "B", "C", "D", "E"),
                         array("F", "G", "H", "I", "J"),
                         array("K", "L", "M", "N", "O"),
                         array("P", "Q", "R", "S", "T"),
                         array("U", "V", "W", "X", "Y"),
                         array("Z", "Å", "Ä", "Ö"),
				        );
	   $taulukoko = count($aakkoset);
    
	   for($rivi = 0; $rivi < $taulukoko; $rivi++) {
		   echo "<br>";
		   if($rivi < 5) {
	          for($sarake = 0; $sarake <= 4; $sarake++) {
		          echo " " . $aakkoset[$rivi][$sarake] . " ";
			  }
		   }
		   else {
			  for($sarake = 0; $sarake <= 3; $sarake++) {
		          echo " " . $aakkoset[$rivi][$sarake] . " ";
			  }
	       }
	       echo "<br>";
	   }

     ?>
   </div>
 </body>
</html>