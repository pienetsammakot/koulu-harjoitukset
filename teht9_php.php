<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Taulukon alkioiden lasku. -->
	
    <div class="pun">
      <?php
        $hedelmat = array("Mango", "Kiivi", "Meloni", "Papaija");
	    echo "Hedelmien määrä";
	    echo "<br>" . "<br>";
        echo "count-funktiolla: " . count($hedelmat);
	    echo "<br>";
	    echo "sizeof-funktiolla: " . sizeof($hedelmat);
      ?>
    </div>
	
  </body>
</html>