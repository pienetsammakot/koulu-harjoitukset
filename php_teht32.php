<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="koodaukset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@0;1&family=Press+Start+2P&family=Special+Elite&display=swap" rel="stylesheet"> 
 </head>
 <body>
 
   <!-- - numero-arvot on sijoitettu muuttujiin PHP-koodauksen alussa
        - muuttujien avulla arvot siirretään funktioon. -->
	
   <div class="loota5">
     <?php
      
	   $korkeus1 = 135;
	   $korkeus2 = 80;
	   $korkeus3 = 350;
	  
       function testiKorkeus($minimiKorkeus = 50)
	   {
		   echo "Korkeus on: $minimiKorkeus. <br>";
	   }
	  
	   testiKorkeus($korkeus1);
	   testiKorkeus();
	   testiKorkeus($korkeus2);
	   testiKorkeus($korkeus3);
	  
     ?>
   </div>
 </body>
</html>