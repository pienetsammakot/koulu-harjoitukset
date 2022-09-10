<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Kolmen vastuksen rinnankytkennän lasku. -->
	
    <div class="loota1">
      <?php
	    $R1 = 10;
	    $R2 = 10;
	    $R3 = 10;
	    $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
	
	    echo "1 / (1 /" . $R1 . " +  1  / " . $R2 . " + 1 / " . $R3 . ")<br>";
	    $Rkok = number_format($Rkok, 2,',',' ');
	    echo  "= " . $Rkok . "Ω";
      ?>
	</div>
  </body>
</html>