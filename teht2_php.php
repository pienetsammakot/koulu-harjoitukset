<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
    <style>
  	  #veljekset1 {
	    color: darkolivegreen;
	    background-color: lemonchiffon;
	  }
	  #veljekset2 {
	    color: maroon;
	    background-color: navajowhite;
	  }
	  .velilaatikko {
	    border: 2px solid maroon;
	    padding: 5px;
	    margin: 10px;
	  }
    </style>
  </head>
  <body>
    /* Seitsemän veljestä -sitaatit muuttujissa. */
	
    <div class="velilaatikko">
      <?php
        $lainaus1 = "Eikö kenkään meistä osaa ulkoa yhtään ainoata rukousta. Lukekaat, armaat veljet,
	                 hellittäkäät Herran nimessä mitä vaan muistatte, mitä vaan päähän pistää, ilman yhtään sovittelemista
	                 raamatunkappaletta ainetta myöten. Lukekaat vaikka hätäkasteesta, veljet armaat.<br>";
	    $lainaus2 = "Ehdittiin tuosta viimein kuuhun, joka, niinkuin sokeaeno kertoili, on suuri,
	                 ympyrjäinen ja loistava kallio-saari ilmassa.<br>";
	    $otsikko1 = "JUHANI<br>";
	    $otsikko2 = "SIMEONI<br>";
	  
	    echo "<h4 id='veljekset1'>" . $otsikko1 . "</h4>";
	    echo "<p id='veljekset2'>" . $lainaus1 . "</p>";
	    echo "<h4 id='veljekset1'>" . $otsikko2 . "</h4>";
	    echo "<p id='veljekset2'>" . $lainaus2 . "</p>";
      ?>
	</div>
  </body>
</html>