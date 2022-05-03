<?php session_start(); ?>
<html>

<head>
   <title>Selected Property Page</title>
   <style>
      body {
         text-align: center;
         font-family: 'roboto', sans-serif;
      }

      td {
         padding: 0.3em;
      }

      .bod {
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

      div.cards {
         position: absolute;
         margin: auto;
         display: flex;
         flex-direction: row;
         height: auto;
         width: 90%;
         text-align: center;
         align-items: center;
         justify-content: space-evenly;
         align-content: space-evenly;
         clear: both;
         overflow-x: auto;
         white-space: nowrap;
      }

      div.card {
         margin: auto;
         height: auto;
         width: auto;
         text-align: center;
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
         width: 10em;
         border-radius: 0.4em;
      }

      .travel-l {
         width: 10em;
         border-radius: 0.4em;
         float: left;
      }

      /*buyer.css*/

      .hero-section {
         width: 100%;
         height: calc(100vh - 120px);
         background-image: url('../img/home.jpeg');
         background-size: cover;
         display: flex;
         justify-content: center;
         align-items: center;
      }

      .hero-section .logo {
         height: 150px;
         display: block;
         ;
         margin: auto;
      }

      .hero-section .sub-heading {
         margin-top: 10px;
         text-align: center;
         color: black;
         text-transform: capitalize;
         font-size: 35px;
         font-weight: 300;
      }

      /* Product */
      .product {
         position: relative;
         overflow: hidden;
         padding: 20px 0;
      }

      .product-category {
         padding: 0 10vw;
         font-size: 30px;
         font-weight: 500;
         margin-bottom: 40px;
         text-transform: capitalize;
      }

      .product-container {
         padding: 0 10vw;
         display: flex;
         overflow-x: auto;
         scroll-behavior: smooth;
      }

      /* Hide the scroll bar*/
      .product-container::-webkit-scrollbar {
         display: non;
         ;
      }

      .product-card {
         flex: 0 0 auto;
         width: 250px;
         height: 450px;
         margin-right: 40px;
      }

      .product-image {
         position: relative;
         width: 100%;
         height: 350px;
         overflow: hidden;
      }

      .product-thumb {
         width: 100%;
         height: 350px;
         object-fit: cover;
      }

      .card-btn {
         position: absolute;
         bottom: 10px;
         left: 50%;
         transform: translateX(-50%);
         padding: 10px;
         width: 90%;
         text-transform: capitalize;
         border: none;
         outline: none;
         background: #fff;
         border-radius: 5px;
         transition: 0.5s;
         cursor: pointer;
         opacity: 0;
      }

      .product-card:hover .card-btn {
         opacity: 1;
      }

      .card-btn:hover {
         background: #efefef;
      }

      .product-info {
         width: 100%;
         height: 100px;
         padding-top: 10px;
      }

      .product-type {
         text-transform: uppercase;
      }

      .product-short-des {
         width: 100%;
         height: 20px;
         line-height: 20px;
         overflow: hidden;
         opacity: 0.5;
         text-transform: capitalize;
         margin: 5px 0;
      }

      .price {
         font-weight: 900;
         font-size: 20px;
      }

      .pre-btn,
      .nxt-btn {
         border: none;
         width: 10vw;
         height: 100%;
         position: absolute;
         top: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
         cursor: pointer;
         z-index: 8;
      }

      .pre-btn {
         left: 0;
         transform: rotate(180deg);
      }

      .nxt-btn {
         right: 0;
      }

      .pre-btn img,
      .nxt-btn img {
         opacity: 0.2;
      }

      .pre-btn:hover img,
      .nxt-btn:hover img {
         opacity: 1;
      }

      /* Collections */
      .collection-container {
         width: 100%;
         display: grid;
         grid-template-columns: repeat(2, 1fr);
         grid-gap: 10px;
      }

      .collection {
         position: relative;
      }

      .collection img {
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      .collection p {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         text-align: center;
         color: #fff;
         font-size: 50px;
         text-transform: capitalize;
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

      .product-details {
         width: 100%;
         padding: 60px 10vw;
         display: flex;
         justify-content: space-between;
      }

      .image-slider {
         width: 500px;
         height: 500px;
         position: relative;
         background-image: url('img/p5.webp');
         background-size: cover;
      }

      .product-images {
         position: absolute;
         bottom: 20px;
         left: 50%;
         transform: translateX(-50%);
         width: 90%;
         background: #fff;
         border-radius: 5px;
         display: grid;
         grid-template-columns: repeat(4, 1fr);
         height: 100px;
         grid-gap: 10px;
         padding: 10px;
      }

      .product-images img {
         width: 100%;
         height: 80px;
         object-fit: cover;
         cursor: pointer;
      }

      .product-images img.active {
         opacity: 0.5;
      }

      .details .Address {
         text-transform: capitalize;
         font-size: 30px;
      }

      .details .product-short-des {
         font-size: 25px;
         line-height: 30px;
         height: auto;
         margin: 15px 0 30px;
      }

      .product-price {
         font-weight: 700;
         font-size: 40px;
      }

      .product-sub-heading {
         font-size: 30px;
         text-transform: uppercase;
         margin: 60px 0 10px;
         font-weight: 300;
      }

      .btn {
         display: flex;
         width: 48%;
         padding: 20px;
         border-radius: 5px;
         background: none;
         border: 1px solid #383838;
         color: #383838;
         font-size: 20px;
         cursor: pointer;
         margin: 20px 0;
         text-transform: capitalize;
      }

      .cart-btn {
         display: flex;
         margin-right: 2%;
         background: #383838;
         color: #fff;
      }

      .detail-des {
         padding: 0 10vw;
         text-transform: capitalize;
      }

      .heading {
         font-size: 30px;
         margin-bottom: 30px;
      }

      .des {
         color: #383838;
         line-height: 25px;
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
   <a href="seller_main.php"><input class=travel-l type="button" id="return-main" value="Back"></a>
   <section class=product-details>
      <div class="image-slider">
         <div class="product-images">
            <img src="img/p5.webp" class="active" alt="">
            <img src="img/P5_1.webp" alt="">
            <img src="img/p5_2.webp" alt="">
            <img src="img/p5_3.webp" alt="">
         </div>
      </div>
      <?php
   //declare variables
   $host = "localhost";
   $user = "kcastilla1";
   $pass = "kcastilla1";
   $dbname = "kcastilla1";
   $propid = $_POST['propid'];
   $_SESSION['propid'] = $propid;
   $conn = new mysqli($host, $user, $pass, $dbname);

   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $sql = "SELECT u.username, p.id, p.street, p.city, p.state, p.year, p.price, p.bed, p.garden
            FROM properties p JOIN users u ON p.seller = u.username
            WHERE p.id = $propid";

   $result = $conn->query($sql);
   $row = $result->fetch_row();

   //echo "<div><h1>Property #" . $propid . "</h1></div>";

   if ($result->num_rows > 0) {
      // output data of each row
      echo "<div class=prop><table>";
      echo "<caption><b>Property #" . $propid . "</b></caption>";
      echo "<tr><td>Street: </td><td>" . $row[2] . "</td></tr>";
      echo "<tr><td>City: </td><td>" . $row[3] . ", " . $row[4] . "</td></tr>";
      echo "<tr><td>Year Built: </td><td>" . $row[5] . "</td></tr>";
      echo "<tr><td>Price: </td><td>$" . $row[6] . "</td></tr>";
      echo "<tr><td>Beds: </td><td>" . $row[7] . "</td></tr>";
      echo "<tr><td>Garden: </td><td>" . $row[8] . "</td></tr>";
      echo "</table></div>";
   } else {
      echo "0 results.</div>";
   }
   ?>
   </section>
   
   <!--Buttons for redirection-->
   <div>
      <a href="update_prop.php"><input class=travel type="button" id="update_button" value="Update"></a>
      <input class=travel type="button" id="del_button" onclick="confirmDelete()" value="Delete">
   </div>
   </div>
   <script src="seller.js"></script>
</body>

</html>