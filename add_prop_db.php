<?php session_start(); ?>
<html>

<head>
   <title>Add Property to Database Page</title>
   <style>
      body {
         text-align: center;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      }

      div.bod {
         margin: auto;
         display: flex;
         flex-direction: column;
         justify-content: space-evenly;
         height: 90%;
         width: 90%;
         text-align: center;
         align-items: center;
      }

      div.spacer {
         clear: both;
         border: none;
         width: 100%;
      }

      div.prop {
         margin: auto;
         height: auto;
         width: auto;
         text-align: center;
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

      $conn = new mysqli($host, $user, $pass, $dbname);

      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

      $sellerid = (int) $_POST['sellerid'];
      $street = $_POST['street'];
      $street = $conn->real_escape_string($street);
      $city = $_POST['city'];
      $city = $conn->real_escape_string($city);
      $state = $_POST['state'];
      $year = (int) $_POST['year'];
      $price = (int) $_POST['price'];
      $beds = (int) $_POST['beds'];
      $garden = $_POST['garden'];
      
      $sql = "INSERT INTO properties 
         (
            `seller`, `street`,
            `city`, `state`,
            `year`, `price`,
            `bed`, `garden`
         )
      VALUES
         (
            $sellerid, '$street',
            '$city', '$state',
            $year, $price,
            $beds, '$garden'
         )";

      if ($conn->query($sql) === TRUE) {
         echo "<h1>New property successfully saved!</h1>";
      } else {
         echo "<h1>Error: New property failed to be saved.</h1>" . $sql . "<br>" . $conn->error;
      }

      $conn->close();
      ?>

      <a href="seller_main.php"><input type="button" id="btn1" value="Seller Main"></a>
   </div>
</body>

</html>