<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phptaulukko.css">
	<link rel="stylesheet" href="phptaulukko.css">
  </head>
  <body>
    <!-- Arvosanojen yhteissumman lasku taulukkoon. -->
	
    <div class="CSSTableGenerator" >
      <?php
        echo "<table> <tbody><tr></tr>";
        $arvosanat = array(
                       array("Matti Meikäläinen","15","24","78","67",0,0),
                       array("Maija Mehiläinen","39","45","66","99",0,0),
                       array("Ville Vilkas","45","59","41","30",0,0),
                     );
					 
 	    $arvosanat[0][5] = $arvosanat[0][1] + $arvosanat[0][2] + $arvosanat[0][3] + $arvosanat[0][4];
	    $arvosanat[1][5] = $arvosanat[1][1] + $arvosanat[1][2] + $arvosanat[1][3] + $arvosanat[1][4];
	    $arvosanat[2][5] = $arvosanat[2][1] + $arvosanat[2][2] + $arvosanat[2][3] + $arvosanat[2][4];
	
	    for ($rivi = 0; $rivi <= count($arvosanat)-1; $rivi++) {
           echo "<tr>";
	       for ($sarake = 0; $sarake <= 6; $sarake++){
	          echo "<td>". $arvosanat[$rivi][$sarake] ."</td>";
           }
           echo "</tr>";
        }
		
        echo "</tr></tbody></table>";
      ?>
    </div>
	
  </body>
</html>