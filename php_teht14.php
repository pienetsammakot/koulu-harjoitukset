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
   <!--Toteuta käyttäen unaarisia-operaattoreita: 
	  
	  - tulosta luvusta 10 luku 9
	  - ja luvusta 9 luku 10.-->
	  
   <div class="loota2">
     <?php
       $luku10 = 10;

       echo $luku10-- . "<br>";
       echo $luku10 . "<br><br>";
	
	   $luku9 = 9;
	
	   echo $luku9++ . "<br>";
	   echo $luku9;
     ?>
   </div>
 </body>
</html>