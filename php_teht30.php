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
   <!-- Tee PHP-ohjelma jossa funktioon siirretään ympyrän säteen arvo.
        Funktio laskee ja näyttää ympyrän pinta-alan sekä kehän pituuden.   -->
	  
   <div class="loota4">
     <?php
      
       function ympyra($sade) {
		
		   $pii = 3.1415;
		
		   $ala = $pii * $sade * $sade;
		   $keha = 2 * $pii * $sade;
		
		   $ala = number_format($ala, 2,',',' ');
		   echo "Ympyrän pinta-ala on $ala. <br>";
		   $keha = number_format($keha, 2,',',' ');
		   echo "Ympyrän kehän pituus on $keha.";
	   }
	
	   ympyra(35);
	
     ?>
   </div>
 </body>
</html>