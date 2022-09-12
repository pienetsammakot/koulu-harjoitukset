<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="koodaukset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@0;1&family=Press+Start+2P&family=Special+Elite&display=swap" rel="stylesheet"> 
  <style>
    .lomake1 {
		border: 4px dotted #bc3872;
		background-color: floralwhite;
		border-radius: 8px;
		padding: 20px;
		margin: 20px;
		width: 30%;
		color: #bc3872;
	}
	
	input[type=text] {
		width: 50%;
		padding: 10px 15px;
		margin: 8px;
		border: 2px solid #ee8bb7;
		border-radius: 2px;
		background-color: #fadae7;
		color: #744229;
	}
	
	input[type=text]:focus {
		outline: 2px solid #bc3872;
		border: none;
	}
	
	input[type=submit] {
		width: 58%;
		height: 100%;
		background-color: #bc3872;
		color: white;
		outline: none;
		border: none;
		border-radius: 4px;
		margin-left: 35px;
		padding: 10px;
		font-size: 16px;
	}
	
	input[type=submit]:focus {
		background-color: #e5bdcd;
	}
   </style>
 </head>
 <body>
 
   <!-- Lomake laskee annettujen vastusten rinnankytkennän.-->
	
   <div class="lomake1">
     <?php
       $R1 = 1;
	   $R2 = 1;
	   $R3 = 1;

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $R1 = test_input($_POST["R1"]);
          $R2 = test_input($_POST["R2"]);
          $R3 = test_input($_POST["R3"]);
       }

       function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
       }
     ?>

     <h3>Pieni näppärä esimerkki-lomake</h3>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
       R1: <input type="text" name="R1" placeholder="Anna R1 arvo..">
       <br><br>
       R2: <input type="text" name="R2" placeholder="Anna R2 arvo..">
       <br><br>
       R3: <input type="text" name="R3" placeholder="Anna R3 arvo..">
       <br>
       <br>
       <input type="submit" name="submit" value="Lähetä">  
     </form>

     <?php
       $summa = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
       $summa = number_format($summa, 2,',',' ');
  
       echo "<br>Antamiesi vastusten arvot: <br><br>";
       echo "R1 = " . $R1 . " Ω<br>";
       echo "R2 = " . $R2 . " Ω<br>";
       echo "R3 = " . $R3 . " Ω<br><br>";
       echo "<br>Kolmen vastuksen rinnankytkennän arvo on: <br><br>";
       echo "Rkok = " . $summa . " Ω";
     ?>
   </div>	  
 </body>
</html>