<?php session_start();?>
<html>

<head>
   <title>Selected Property Page</title>
<style>
   body {
         text-align: center;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
         background-color: rgb(207, 247, 229);
      }

      div.bod {
         margin: auto;
         transform: translate(0%, 11%);
         display: flex;
         flex-direction: column;
         justify-content: space-evenly;
         height: 90%;
         width: 90%;
         text-align: center;
         background-color: rgb(207, 247, 229);
         align-items: center;
      }

      div.spacer {
         clear: both;
         border: none;
         width: 100%;
      }

      div.cards {
         position: absolute;
         margin: auto;
         display: flex;
         flex-direction: row;
         height: auto;
         width: 90%;
         text-align: center;
         background-color: rgb(207, 247, 229);
         align-items: center;
         justify-content: space-evenly;
         align-content: space-evenly;
         clear: both;
      }

      div.card {
         margin: auto;
         height: auto;
         width: auto;
         text-align: center;
         background-color: rgb(207, 247, 229);  
      }

      div.prop {
         margin: auto;
         height: auto;
         width: auto;
         text-align: center;
         background-color: rgb(207, 247, 229);  
      }
      table {
         font-size: 2em;
      }
      tr:hover {
         transform: scale(1.1);
      }
</style>
</head>

<body>
   <div class=bod>
   <?php
   $host = "localhost";
   $user = "kcastilla1";
   $pass = "kcastilla1";
   $dbname = "kcastilla1";
   $propid = $_SESSION['propid'];
   $conn = new mysqli($host, $user, $pass, $dbname);
   
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $sql = "SELECT s.fname, s.lname, p.id, p.street, p.city, p.state, p.year, p.price, p.bed, p.garden
            FROM properties p JOIN sellers s ON p.seller = s.id
            WHERE p.id = $propid";

   $result = $conn->query($sql);
   $row = $result->fetch_row();
   //var_dump($result->fetch_all());
   echo "<div><h1>Property #".$propid."</h1></div>";

   if ($result->num_rows > 0) {
      // output data of each row
      echo "<div class=prop><table>";
      echo "<tr><td>Address: </td><td>".$row[3]." ".$row[4].", ".$row[5]."</td></tr>";
      echo "<tr><td>Year Built: </td><td>".$row[6]."</td></tr>";
      echo "<tr><td>Price: </td><td>".$row[7]."</td></tr>";
      echo "<tr><td>Beds: </td><td>".$row[8]."</td></tr>";
      echo "<tr><td>Garden: </td><td>".$row[9]."</td></tr>";
      echo "</table></div>";
   } else {
      echo "0 results.</div>";
   }
   ?>
   </div>
</body>

</html>