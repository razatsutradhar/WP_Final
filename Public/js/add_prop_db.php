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

      //INSERT NEW PROPERTY INTO TABLE
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

         $sql = "SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'kcastilla1' AND TABLE_NAME = 'properties';";
         $result = ($conn->query($sql))->fetch_all();

         $target_dir = "uploads/";
         $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
         $uploadOk = 1;
         $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
         
         var_dump($target_file);

         // Check if image file is a actual image or fake image
         if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
               echo "File is an image - " . $check["mime"] . ".";
               $uploadOk = 1;
            } else {
               echo "File is not an image.";
               $uploadOk = 0;
            }
         }

         // Check if file already exists
         if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
         }

         // Check file size
         if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
         }

         // Allow certain file formats
         /*if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
         ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
         }*/

         // Check if $uploadOk is set to 0 by an error
         if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
         } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";

               $sql = "INSERT INTO images (prop_id, `path`) VALUES (1, \"" . $target_file . "\");";
               echo $sql;
               if ($conn->query($sql) === TRUE) {
                  echo "New user successfully added";
               } else {
                  echo "Error: New user failed to be saved";
               }
            } else {
               echo "Sorry, there was an error uploading your file.";
            }
         }
      } else {
         echo "<h1>Error: New property failed to be saved.</h1>" . $sql . "<br>" . $conn->error;
      }

      $conn->close();
      ?>

      <a href="seller_main.php"><input type="button" id="btn1" value="Seller Main"></a>
   </div>
</body>

</html>