<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Ympyrälaskuja. -->
	
    <div class="loota1">
      <?php
        $teksti_1 = "<h3>Ympyrän kehän laskeminen</h3>";
        $teksti_2 = "kehä";
        $sade = 10;
        $pii = 3.14;

        print "" . $teksti_1 . "<br>";
        print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:<br>";
        print "Ala = 2 * π * säde<br><br>";
        print "Jos säde on 10<br>" . $teksti_2 . " on ";
        print "" .  2 * $pii * $sade . ".<br>";
	    print "ympyrän pinta-ala on " . $pii * $sade * $sade . ".<br>";
	    print "pallon pinta-ala on " . 4 * $pii * $sade * $sade . ".<br>";
	    print "pallon tilavuus on " . (4 * $pii * $sade * $sade * $sade) / 3 . ".<br>";
      ?>
	</div>
  </body>
</html>