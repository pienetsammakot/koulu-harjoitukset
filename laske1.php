<!DOCTYPE html>
  <html>
   <head>
    <meta charset="UTF-8">
	<style>
     body{
       background-color: #B2D9D9;
     }
     .viesti {
       margin: auto; 
       background-color: lightgrey;
       width: 40%;
       border: 1px solid green;
       padding: 50px;
     }
     .teksti{
       text-align: center;	
     }
     .paluu{
       background-color: #4CAF50; /* Green */
       border: none;
       color: white;
       text-align: center;
       text-decoration: none;
       display: inline-block;
       font-size: 16px;
       margin: 4px 2px;
       cursor: pointer;
       padding: 7px;  
     }
    </style> 
   </head>
   <body>
    <div class="viesti teksti">
	  <h3>POST-metodi</h3>
      <?php 
	  $R1 = $_POST["R1"];
	  $R2 = $_POST["R2"];
	  $R3 = $_POST["R3"];
	  $summa = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
	  $summa = number_format($summa, 2,',',' ');
	  echo "Kolmen vastuksen rinnankytkennän arvo on: <br><br> 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3)) = " . $summa . " Ω";
  	  ?><br>
      <a href="php_teht36.php"><button class="paluu">Palaa tehtäviin</button></a>
    </div>
	
   </body>
  </html>