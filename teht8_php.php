<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Lainaukset taulukossa. -->
	
    <div class="pun">
      <?php
        $aforismit = array("Lähes kaikki suuri on nuorten tekemää.", "Nuoressa ei huilaaminen mene hukkaan.", "Nuoret ovat säännöllisesti ajattelemattomia.");
  
        echo $aforismit[0] . "<br>" . "- Benjamin Franklin" . "<br>";
        echo $aforismit[1] . "<br>" . "- suomalainen sananlasku" . "<br>";
        echo $aforismit[2] . "<br>" . "- Homeros";
      ?>
    </div>
	
  </body>
</html>