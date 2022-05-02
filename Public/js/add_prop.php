<?php session_start(); ?>
<html>

<head>
   <title>Add Property Page</title>
   <style>
      body {
         display: flex;
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

      div.form {
         display: flex;
         justify-content: center;
         font-size: 2em;
         margin-bottom: 5em;
      }

      .travel {
         width: 5em;
         border-radius: 0.4em;
      }
   </style>
</head>

<body>
   <div class=bod>
      <div class=form>
         <!-- Add the form tag wit appropriate attributes -->
         <form class=form action="add_prop_db.php" method="post" enctype="multipart/form-data">
            <h3>New Property</h3>
            <p>Seller ID: <input name="sellerid" type="number" placeholder="1"></p>
            <p>Street: <input name="street" type="text" placeholder="123 Drury Lane"></p>
            <p>City: <input name="city" type="text" placeholder="Atlanta"></p>
            <p>State: <input name="state" type="text" placeholder="GA"></p>
            <p>Year Built: <input name="year" type="number" placeholder="2000"></p>
            <p>Price: <input name="price" type="text" placeholder="300000"></p>
            <p>Beds: <input name="beds" type="number" placeholder="2"></p>
            <p>Garden: <input name="garden" type="text" placeholder="y\n"></p>
            <p>Select image to upload:<input type="file" name="fileToUpload" id="fileToUpload"></p>
            <input class=travel type="submit" id="btn2" value="Submit">
            <!-- Redirect how would you handle user cancel -->
            <a href="seller_main.php"><input class=travel type="button" id="btn1" value="Cancel"></a>
            <!-- Close the form tag -->
         </form>
      </div>
      
   </div>
</body>

</html>