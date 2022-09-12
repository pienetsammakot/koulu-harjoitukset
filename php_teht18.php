<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="koodaukset.css">
  <link rel="stylesheet" href="phptaulukko.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> 
 </head>
 <body>
   <!--Muokkaa Muuttujat tehtävän 11 antamaan yhteispisteiden mukaan arvosanat taulukkoon: -->
	  
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
	
	   if($arvosanat[0][5] >= 0)
	   {
		   if($arvosanat[0][5] <=120)
		   {
			   $arvosanat[0][6] = 0;
		   }
	   }
	   if($arvosanat[0][5] >= 121)
	   {
		   if($arvosanat[0][5] <=175)
		   {
			   $arvosanat[0][6] = 1;
		   }
	   }
	   if($arvosanat[0][5] >= 176)
	   {
		   if($arvosanat[0][5] <=231)
		   {
			   $arvosanat[0][6] = 2;
		   }
	   }
	   if($arvosanat[0][5] >= 232)
	   {
		   if($arvosanat[0][5] <=287)
		   {
			   $arvosanat[0][6] = 3;
		   }
	   }
	   if($arvosanat[0][5] >= 288)
	   {
		   if($arvosanat[0][5] <=343)
		   {
			   $arvosanat[0][6] = 4;
		   }
	   }
	   if($arvosanat[0][5] >= 344)
	   {
		   if($arvosanat[0][5] <=400)
		   {
		   	   $arvosanat[0][6] = 5;
		   }
	   }
	
	   if($arvosanat[1][5] >= 0)
	   {
		   if($arvosanat[1][5] <=120)
		   {
			   $arvosanat[1][6] = 0;
		   }
	   }
	   if($arvosanat[1][5] >= 121)
	   {
		   if($arvosanat[1][5] <=175)
		   {
			   $arvosanat[1][6] = 1;
		   }
	   }
	   if($arvosanat[1][5] >= 176)
	   {
		   if($arvosanat[1][5] <=231)
		   {
			   $arvosanat[1][6] = 2;
		   }
	   }
	   if($arvosanat[1][5] >= 232)
	   {
		   if($arvosanat[1][5] <=287)
		   {
			   $arvosanat[1][6] = 3;
		   }
	   }
	   if($arvosanat[1][5] >= 288)
	   {
		   if($arvosanat[1][5] <=343)
		   {
			   $arvosanat[1][6] = 4;
		   }
	   }
	   if($arvosanat[1][5] >= 344)
	   {
		   if($arvosanat[1][5] <=400)
		   {
			   $arvosanat[1][6] = 5;
		   }
	   }
	
	   if($arvosanat[2][5] >= 0)
	   {
		   if($arvosanat[2][5] <=120)
		   {
			   $arvosanat[2][6] = 0;
		   }
	   }
	   if($arvosanat[2][5] >= 121)
	   {
		   if($arvosanat[2][5] <=175)
		   {
		       $arvosanat[2][6] = 1;
		   }
	   }
	   if($arvosanat[2][5] >= 176)
	   {
		   if($arvosanat[2][5] <=231)
		   {
			   $arvosanat[2][6] = 2;
		   }
	   }
	   if($arvosanat[2][5] >= 232)
	   {
		   if($arvosanat[2][5] <=287)
		   {
			   $arvosanat[2][6] = 3;
		   }
	   }
	   if($arvosanat[2][5] >= 288)
	   {
		   if($arvosanat[2][5] <=343)
		   {
			   $arvosanat[2][6] = 4;
		   }
	   }
	   if($arvosanat[2][5] >= 344)
	   {
		   if($arvosanat[2][5] <=400)
		   {
		 	   $arvosanat[2][6] = 5;
		   }
	   }
	
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