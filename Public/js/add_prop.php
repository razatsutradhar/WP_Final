<?php session_start(); ?>
<html>

<head>
   <title>Add Property Page</title>
   <style>
      body {
         text-align: center;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      }

      div.bod {
         position: fixed;
         margin: auto;
         margin-top: 2em;
         display: flex;
         flex-direction: column;
         justify-content: space-evenly;
         height: 90%;
         width: 90%;
         text-align: center;
         align-items: center;
         padding: 1em;
         transform: translate(4%, 0%);
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
         <!-- Add the form tag wit appropriate attributes -->
         <form class=form action="add_prop_db.php" method="post">
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