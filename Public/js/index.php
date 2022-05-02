<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buyer Dashboard</title>
    <link rel="stylesheet" href="../css/buyer.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>

<body>

    <nav class="navbar"></nav>
    <!-- hero-section-->
    <hearder class="hero-section">
        <div class="'content">
            <img src="../img/logo.jpeg" class="logo" atl="">
            <p class="sub-heading"> Thank you for choosing us! <br>Find your home HERE!</p>
        </div>

    </hearder>

    <section class="product">
        <a href="./userlogin.php" class="button1 center6">Login/Register</a>
    </section>

    <!-- Collection -->
    <section class="collection-container">
        <a href="#" class="collection">
            <img src="../img/p1.jpeg" alt="">
            <p class="collection-title"> Houses </p>
        </a>
        <a href="#" class="collection">
            <img src="../img/p2.jpeg" alt="">
            <p class="collection-title"> Apartments </p>
        </a>
        <a href="#" class="collection">
            <img src="../img/p3.jpeg" alt="">
            <p class="collection-title"> Duplex </p>
        </a>
        <a href="#" class="collection">
            <img src="../img/p4.jpeg" alt="">
            <p class="collection-title"> Mansions </p>
        </a>
    </section>


    <?php 
        if (isset($_SESSION["user"])){
            echo "<script src=\"navLoggedIn.js\"></script>";
        }else{
            echo "<script src=\"nav.js\"></script>";
        }
    ?>

    <script src="index.js"></script>
</body>

</html>