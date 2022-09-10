<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koodaukset.css">
  </head>
  <body>
    <!-- Lisää lainauksia. -->
	
    <div class="loota1">
      <?php
        $lainaus1 = '"Lähes kaikki suuri on nuorten tekemää."';
        $lainaus2 = '"Nuoressa ei huilaaminen mene hukkaan."';
        $lainaus3 = '"Nuoret ovat säännöllisesti ajattelemattomia."';
   
        echo $lainaus1 . "<br>" . "- Benjamin Franklin" . "<br>" . $lainaus2 . "<br>" . "- suomalainen sananlasku" . "<br>" . $lainaus3 . "<br>" . "- Homeros";
   
      ?>
    </div>
  </body>
</html>