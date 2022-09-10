<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Taulukko jonka solut on nimetty. -->
	
    <div class="pun">
      <?php
        $arvio = array("koe1"=>10, "koe2"=>6,"koe3"=>7, "yhteispiste"=>0);
					
	    $arvio['yhteispiste'] = $arvio['koe1'] + $arvio['koe2'] + $arvio['koe3'];
  
        echo $arvio['koe1'] . "<br>";
        echo $arvio['koe2'] . "<br>";
        echo $arvio['koe3'] . "<br>";
        echo $arvio['yhteispiste'];
      ?>
    </div>
	
  </body>
</html>