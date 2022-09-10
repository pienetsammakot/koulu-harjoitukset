<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phptaulukko.css">
	<link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Taulukon tulostus for-lausetta käyttäen. -->
	
    <div class="CSSTableGenerator" >
      <?php
        echo "<table> <tbody><tr></tr>";
        $luvut = array(
                  array("1","2","3","4","5","6","7"),
                  array("8","9","10","11","12","13","14"),
                  array("15","16","17","18","19","20","21"),
                 );
 				
        for ($rivi = 0; $rivi <= count($luvut)-1; $rivi++) {
          echo "<tr>";
	      for ($sarake = 0; $sarake <= 6; $sarake++){
	        echo "<td>". $luvut[$rivi][$sarake] ."</td>";
          }
          echo "</tr>";
        }
        echo "</tr></tbody></table>";
      ?>
    </div>
	
  </body>
</html>