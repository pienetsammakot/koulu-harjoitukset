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
 
   <!-- POST-metodilla lomake joka laskee taas ne rinnankytkennät.
        laske1.php-tiedostossa funktiot.-->
	
   <div class="vari4">
     <h3>Anna kolmen rinnankytkennän vastukset:</h3>
     <form action="laske1.php" method="POST"> 
        R1: <input type="number" name="R1"><br> 
        R2: <input type="number" name="R2"><br>
        R3: <input type="number" name="R3"><br><br>	  
        <input type="submit" value="Lähetä">
     </form>
   </div>
 </body>
</html>