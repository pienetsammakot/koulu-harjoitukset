<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Laskemista muuttujien avulla. -->
	
    <div class="loota1">
      <?php
	    $luku1 = 3;
	    $luku2 = 7;
	    $luku3 = 10;
	    $tulos = $luku1 + $luku2 + $luku3;
	
	    echo $luku1 . " + " . $luku2 . " + " . $luku3 . "<br>";
	    echo "= " . $tulos;
      ?>
	</div>
  </body>
</html>