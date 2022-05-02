<?php session_start(); $_SESSION['propid'] = 1;?>
<html>

<head>
   <title>Seller Main Page</title>
   <style>
      body {
         text-align: center;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
         background-color: rgb(207, 247, 229);
      }

      div.bod {
         margin: auto;
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
         border: solid black 0.15em;
         text-align: center;
         font-size: 2em;
         background-color: rgb(207, 247, 229);  
      }

      tr:hover {
         transform: scale(1.1);
      }
   </style>
</head>

<body>
      <?php
      $host = "localhost";
      $user = "kcastilla1";
      $pass = "kcastilla1";
      $dbname = "kcastilla1";

      // Step -1 : Create DB connection
      $conn = new mysqli($host, $user, $pass, $dbname);

      // Step-2 : check if the DB connection is established or not
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

      //$prop = $_POST['property'];
      $sellerid = $_POST['sellerid'];
      $sql = "SELECT s.fname, s.lname, p.id, p.street, p.city, p.price 
            FROM properties p JOIN sellers s ON p.seller = s.id";

      $result = $conn->query($sql);
      $rows = $result->fetch_all();
      //var_dump($rows);

      echo "<div><h1>" . $rows[0][0] . " " . $rows[0][1] . "'s Properties:</h1></div>";
      echo "<div class=bod>";
      echo "<div class=cards>";
      if ($result->num_rows > 0) {
         $lentable = $result->num_rows;
         for ($row = 0; $row < $lentable; $row++) {
            echo "<div class=card>";
            echo "<p><a href='seller_prop.php'> Property ".$rows[$row][2]."</a></p>"; //property id
            echo "<p>".$rows[$row][3]."</p>"; //street
            echo "<p>".$rows[$row][4]."</p>"; //city
            echo "<p>".$rows[$row][5]."</p>"; //price
            echo "</div>";
         }
      } else {
         echo "0 results.</div>";
      }
      echo "</div>";
      $_SESSION['propid'] = 2;
      echo "<a href='seller_prop.php'><p>Selected Property Page</p></a>";
      ?>
   </div>
</body>

</html>