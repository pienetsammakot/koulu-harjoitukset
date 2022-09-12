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
	
   <div class="lomake1" id="back"> 
     <form action="viesti_1k.php" method="post" id="paluu">
       Nimesi:<br>   
       <input type="text" name="nimi"><br><br>
	
       Sähköpostisi:<br>	
       <input type="text" name="sahkoposti"><br><br>
	
       Viesti:<br> 
       <textarea name="kommentti">Kirjoita viesti..  </textarea><br><br>
       <input type="submit" value="Lähetä"> 
    <!--  <input type="button" class="button" value="Lähetä">-->
	
	   <p><a href="xfile.php">Lue viestit</a>
       <br>
       <p><a href="poista_viestit.php">Poista viestit.</a>
     </form> 
   </div>
 </body>
</html>