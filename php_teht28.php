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
   <!-- Tee koodaus jossa teksti "Tämä näkyy" tulostuu tekstin "Näytetään numero X" alle
		kun numero on 0 - 4 sekä kun numero on 8 - 10.  -->
	  
   <div class="loota4">
     <?php
  
       for ($numero = 0; $numero <= 10; $numero++) {
          echo "Näytetään numero $numero. <br>";
          if($numero > 4) {
	         if($numero <8) {
				continue;
			 }
		  }
          echo "Tämä näkyy. <br>";
       }
	 
     ?>
   </div>
 </body>
</html>