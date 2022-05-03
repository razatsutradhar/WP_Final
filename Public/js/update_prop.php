<?php session_start();
unset($_POST); ?>
<html>

<head>
   <title>Update Property Page</title>
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

      div.form {
         display: flex;
         flex-direction: column;
         justify-content: center;
         font-size: 2em;
         margin-bottom: 5em;
      }

      .travel {
         width: 15em;
         border-radius: 0.4em;
      }

      .navbar {
         position: sticky;
         top: 0;
         left: 0;
         width: 100%;
         background: #f5f5f5;
         z-index: 9;
      }

      .nav {
         padding: 10px 10vw;
         display: flex;
         justify-content: space-between;
      }

      .brand-logo {
         height: 60px;
      }

      .nav-items {
         display: flex;
         align-items: center;
      }

      .search {
         width: 500px;
         display: flex;
      }

      .search-box {
         width: 80%;
         height: 40px;
         padding: 10px;
         border-top-left-radius: 10px;
         border-bottom-left-radius: 10px;
         border: 1px solid #d1d1d1;
         text-transform: capitalize;
         background: none;
         color: #a9a9a9;
         outline: none;
      }

      .search-btn {
         width: 20%;
         height: 40px;
         padding: 10px 20px;
         border: none;
         outline: none;
         cursor: pointer;
         background: #383838;
         color: #fff;
         text-transform: capitalize;
         font-size: 15px;
         border-top-right-radius: 10px;
         border-bottom-right-radius: 10px;
      }

      .search-box::placeholder {
         color: #a9a9a9;
      }

      .nav-items a {
         margin-left: 20px;
      }

      .nav-items a img {
         width: 30px;
      }

      .links-container {
         width: 100%;
         height: 30px;
         display: flex;
         padding: 10px 10vm;
         justify-content: center;
         list-style: none;
         border-top: 1px solid #d1d1d1;
      }

      .link {
         text-transform: capitalize;
         padding: 0 10px;
         margin: 0 5px;
         /* Remove the underline*/
         text-decoration: none;
         color: #383838;
         /*make the movement more smooth*/
         opacity: 0.5;
         transition: .5s;
         font-size: x-large;
      }

      .link:hover {
         opacity: 1;
      }

   </style>
</head>

<body>
   <nav class="navbar">
      <div class="nav">
         <img src="img/logo.jpeg" class="brand-logo" atl="">
         <div class="nav-items">
            <div class="search">
               <input type="text" class="search-box" placeholder="search brand, product">
               <button class="search-btn">Search</button>
            </div>
            <a href="#"><img src="img/user.png" alt=""></a>
            <a href="#"><img src="img/cart.png" alt=""></a>
         </div>
      </div>

      <ul class="links-container">
         <li class="link-item"><a a="" href="#" class="link">Home</a></li>
         <li class="link-item"><a a="" href="#" class="link">Houses</a></li>
         <li class="link-item"><a a="" href="#" class="link">Apartments</a></li>
         <li class="link-item"><a a="" href="#" class="link">Duplex</a></li>
         <li class="link-item"><a a="" href="#" class="link">Mansions</a></li>

      </ul>
   </nav>
   <div class=bod>
      <div class=form>
         <!--Form for updating property-->
         <form class=form action="update_prop_db.php" method="post">
            <h2>Update Property</h2>
            <p>Street: <input name="street" type="text" placeholder="123 Drury Lane"></p>
            <p>City: <input name="city" type="text" placeholder="Atlanta"></p>
            <p>State: <input name="state" type="text" placeholder="GA"></p>
            <p>Year Built: <input name="year" type="number" placeholder="2000"></p>
            <p>Price: <input name="price" type="text" placeholder="300000"></p>
            <p>Beds: <input name="beds" type="number" placeholder="2"></p>
            <p>Garden: <input name="garden" type="text" placeholder="y\n"></p>
            <p>Select image to upload:<input type="file" name="fileToUpload" id="fileToUpload"></p>
            <input class=travel type="submit" id="btn2" value="Submit">
            <!-- Close the form tag -->
         </form>
         <?php
         $propid = $_SESSION['propid'];
         echo "<form action='seller_prop.php' method='post'>";
         echo "<input type='hidden' id='hidden' name='propid' value='$propid'>";
         echo "<p><input class=prop-button type='submit' value='Cancel'></p>"; //property id
         echo "</form>";
         ?>
      </div>

   </div>
</body>

</html>