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
   <!--Kirjoita PHP-ohjelma joka laskee sade-muuttujaan sijoitetun arvon 
	  avulla ympyrän kehän mitan, pinta-alan sekä pallon tilavuuden.-->
	  
   <div class="loota2">
     <?php
    
	   $sade = 15;
	   $pii = 3.14159;
	
	   echo "Ympyrän kehän pituus:<br>";
	   echo 2 * $sade * $pii . "<br><br>";
	
	   echo "Ympyrän pinta-ala:<br>";
	   echo $pii * $sade * $sade . "<br><br>";
	
	   echo "Pallon tilavuus on:<br>";
	   echo (4 * $pii * $sade * $sade * $sade) / 3;
	
     ?>
   </div>	  
 </body>
</html>