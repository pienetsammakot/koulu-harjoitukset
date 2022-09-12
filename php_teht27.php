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
   <!-- - Muuta taulukon solujen nimiksi kirjaimet A - F. 
        - Sijoita taulukon solujen sisällöksi etunimet, Anthony, Bertha, Cecilia, David, Edward ja Felicia. 
          Toteuta PHP-koodaus käyttäen do-while toisto lausetta seuraavasti: 
           - nimi-muuttujaan voidaan antaa solun nimi kirjaimella (A-F) 
           - do-while näyttää taulukon sisällön (etunimet) alekkain alusta alkaen annettuun kirjaimeen asti.  -->
	  
   <div class="loota4">
     <?php
  
       $nimi = "A";
       $taulu = array("A"=>"Anthony","B"=>"Bertha","C"=>"Cecilia",
	                  "D"=>"David","E"=>"Edward","F"=>"Felicia");
  
         do {
	       echo $taulu[$nimi] . "<br>";
	       $nimi++;
         } while ($nimi <= "F");    
     ?>
   </div>
 </body>
</html>