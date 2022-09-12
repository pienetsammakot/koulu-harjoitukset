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
 
   <!-- Lomake laskee annetut vastukset joko sarjassa tai rinnan valinnasta riippuen.-->
	
   <div class="lomake1">
     <?php
       $vastus1 = $vastus2 = $vastus3 = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $vastus1 = test_input($_POST["vastus1"]);
           $vastus2 = test_input($_POST["vastus2"]);
           $vastus3 = test_input($_POST["vastus3"]);
       }

       function test_input($data2) {
           $data2 = trim($data2);
           $data2 = stripslashes($data2);
           $data2 = htmlspecialchars($data2);
           return $data2;
       }
     ?>

     <h3>Pieni näppärä esimerkki-lomake</h3>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
       R1: <input type="text" name="vastus1" placeholder="Anna R1 arvo..">
       <br><br>
       R2: <input type="text" name="vastus2" placeholder="Anna R2 arvo..">
       <br><br>
       R3: <input type="text" name="vastus3" placeholder="Anna R3 arvo..">
       <br><br>
       <input type="submit" name="sarjak" value="Laske sarja">
       <br><br>
       <input type="submit" name="rinnank" value="Laske rinnan">
     </form>

     <?php

       function rinnanKytk($vastus1, $vastus2, $vastus3) {
           $Rkok = 1 / ((1 / $vastus1) + (1 / $vastus2) + (1 / $vastus3));
           $Rkok = number_format($Rkok, 2,',',' ');
	       echo "Rinnan-laskun tulos:<br><br>" . $Rkok;  
       }
  
       function sarjaKytk($vastus1, $vastus2, $vastus3) {
	       $Rkok2 = $vastus1 + $vastus2 + $vastus3;
	       $Rkok2 = number_format($Rkok2, 2,',',' ');
	       echo "Sarja-laskun tulos:<br><br>" . $Rkok2;
       }
  
       if(isset($_POST['sarjak'])) {
	       echo "<br>Antamiesi vastusten arvot: <br><br>";
           echo "R1 = " . $vastus1 . " Ω<br>";
           echo "R2 = " . $vastus2 . " Ω<br>";
           echo "R3 = " . $vastus3 . " Ω<br><br>";
           sarjaKytk($vastus1, $vastus2, $vastus3);
       }  
  
       if(isset($_POST['rinnank'])) {
	       echo "<br>Antamiesi vastusten arvot: <br><br>";
           echo "R1 = " . $vastus1 . " Ω<br>";
           echo "R2 = " . $vastus2 . " Ω<br>";
           echo "R3 = " . $vastus3 . " Ω<br><br>";
           rinnanKytk($vastus1, $vastus2, $vastus3); echo " Ω";
       }
  
     ?>
   </div>
 </body>
</html>