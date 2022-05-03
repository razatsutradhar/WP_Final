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
      .travel {
         width: 15em;
         border-radius: 0.4em;
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

      $propid = (int) $_SESSION['propid'];


      if (!empty($_POST['street'])) {
         $street = $_POST['street'];
         $street = $conn->real_escape_string($street);
         $sql = "UPDATE properties 
         SET `street` = '$street'
         WHERE `id` =$propid";

         if ($conn->query($sql) === TRUE) {
            echo "<h1>Street Updated!</h1>";
         } else {
            echo "<h1>Error: Street failed to be updated.</h1>" . $sql . "<br>" . $conn->error;
         }
      }

      if (!empty($_POST['city'])) {
         $city = $_POST['city'];
         $city = $conn->real_escape_string($city);
         $sql = "UPDATE properties 
         SET `city` = '$city'
         WHERE `id` =$propid";

         if ($conn->query($sql) === TRUE) {
            echo "<h1>City Updated!</h1>";
         } else {
            echo "<h1>Error: City failed to be updated.</h1>" . $sql . "<br>" . $conn->error;
         }
      }

      if (!empty($_POST['state'])) {
         $state = $_POST['state'];
         $sql = "UPDATE properties 
      SET `state` = '$state'
      WHERE `id` =$propid";

         if ($conn->query($sql) === TRUE) {
            echo "<h1>State Updated!</h1>";
         } else {
            echo "<h1>Error: State failed to be updated.</h1>" . $sql . "<br>" . $conn->error;
         }
      }

      if (!empty($_POST['year'])) {
         $year = (int) $_POST['year'];
         $sql = "UPDATE properties 
      SET `year` = $year
      WHERE `id` =$propid";

         if ($conn->query($sql) === TRUE) {
            echo "<h1>Year Updated!</h1>";
         } else {
            echo "<h1>Error: Year failed to be updated.</h1>" . $sql . "<br>" . $conn->error;
         }
      }


      if (!empty($_POST['price'])) {
         $price = (int) $_POST['price'];
         $sql = "UPDATE properties 
      SET `price` = $price
      WHERE `id` =$propid";

         if ($conn->query($sql) === TRUE) {
            echo "<h1>Price Updated!</h1>";
         } else {
            echo "<h1>Error: Price failed to be updated.</h1>" . $sql . "<br>" . $conn->error;
         }
      }

      if (!empty($_POST['beds'])) {
         $beds = (int) $_POST['beds'];
         $sql = "UPDATE properties 
      SET `bed` = $beds
      WHERE `id` =$propid";

         if ($conn->query($sql) === TRUE) {
            echo "<h1>Beds Updated!</h1>";
         } else {
            echo "<h1>Error: No. of beds failed to be updated.</h1>" . $sql . "<br>" . $conn->error;
         }
      }

      if (!empty($_POST['garden'])) {
         $garden = $_POST['garden'];
         $sql = "UPDATE properties 
      SET `garden` = '$garden'
      WHERE `id` =$propid";

         if ($conn->query($sql) === TRUE) {
            echo "<h1>Garden Status Updated!</h1>";
         } else {
            echo "<h1>Error: Garden status failed to be updated.</h1>" . $sql . "<br>" . $conn->error;
         }
      }

      echo "<form action='seller_prop.php' method='post'>";
      echo "<input type='hidden' id='hidden' name='propid' value='$propid'>";
      echo "<p><input class=travel type='submit' value='Return'></p>"; //property id

      $conn->close();
      ?>

      <!--<a href="seller_main.php"><input type="button" id="btn1" value="Seller Main"></a>-->
   </div>
</body>

</html>