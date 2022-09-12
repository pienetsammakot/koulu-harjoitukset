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
   <!--Määrittele neljä muuttujaa:<br>

      otsikko1
      otsikko2
      teksti1
      teksti2

      Etsi internetistä kaksi kappaleen mittaista tekstiä sekä sijoita tekstit teksti1- ja teksti2-muuttujiin.
      Keksi teksteihin liittyvät otsikot ja sijoita otsikot muuttujiin otsikko1 ja otsikko2.
      Käytä otsikoissa h3-elementtiä, teksteissä p-elementtiä. Näytä kokonaisuus yhdellä echo:lla. -->
	  
   <div class="loota2">
     <?php
       $teksti1 = "Innistrad: Midnight Hunt is the 89th Magic expansion. 
	              It was released on September 24, 2021, and is paired up with Innistrad: Crimson Vow 
	              which releases two months later.";
	 
	   $teksti2 = "Innistrad: Crimson Vow is the 90th Magic expansion. 
	              It is expected to be released on November 19, 2021, and is paired up with Innistrad: Midnight Hunt 
	              that released two months earlier.";
	 
	   $otsikko1 = "Innistrad: Midnight Hunt";
	 
	   $otsikko2 = "Innistrad: Crimson Vow";
	 
	   echo "<h3>".$otsikko1."</h3><br>".
	   "<p>".$teksti1."</p><br><br>".
	   "<h3>".$otsikko2."</h3><br>".
	   "<p>".$teksti2."</p>";
	 ?>
   </div>
 </body>
</html>