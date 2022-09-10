<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Rinnankytkennän laskut taulukkoon. -->
	
    <div class="pun">
      <?php
        $vastukset = array("10", "10", "10", 0);
		
        echo "Rinnankytkennän arvot: <br>";
        echo "R1 = $vastukset[0]" . " Ω" . "<br>";
        echo "R2 = $vastukset[1]" . " Ω" . "<br>";
        echo "R3 = $vastukset[2]" . " Ω" . "<br>";
		
        $vastukset[3] = 1 / ((1 / $vastukset[0]) + (1 / $vastukset[1]) + (1 / $vastukset [2]));
        $vastukset[3] = number_format($vastukset[3], 2,',',' ');
		
        echo "Rkok = " . $vastukset[3] . " Ω" . "<br>";
      ?>
    </div>	  
  </body>
</html>