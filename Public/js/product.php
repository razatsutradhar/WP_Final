<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product page</title>

    <link rel="stylesheet" href="../css/buyer.css" ;>
    <link rel="stylesheet" href="../css/product.css" ;>
    <?php session_start()?>

</head>

<body>

    <nav class="navbar"></nav>

    <section class="product-details">
        <div class="image-slider">
            <div class="product-images">
                <img src="../img/p5.webp" class="active" alt="">
                <img src="../img/P5_1.webp" alt="">
                <img src="../img/p5_2.webp" alt="">
                <img src="../img/p5_3.webp" alt="">
            </div>
        </div>
        <div class="details">
            <h4 class="Address">Atlanta, GA</h4>
            <p class="product-short-des">Some detail information about the property</p>
            <span class="product-price">$2000</span>

            <button class="btn cart-btn">Add to cart</button>
            <button class="btn">Add to wishlist</button>
        </div>
    </section>

    <section class="detail-des">
        <h2 class="Heading">Description</h2>
        <p class="des">Stately brick traditional in Vinings Glen with swim and tennis. Parking in rear underneath, large entry, plantation shutters throughout, sitting room, living room with fireplace, updated eat in kitchen, half bath, separate dining room and large family room with fireplace with built ins, deck with doors from kitchen and living room, unfinished basement with a stubbed bath and daylight shop area that can be finished, large two car garage, and ample driveway parking, four bedrooms and three baths on upper level, oversized master bedroom, with sitting </p>
    </section>

    <section class="product">
        <h2 class="product-category">Similar Product</h2>
        <button class="pre-btn"><img src="../img/arrow.png"></button>
        <button class="nxt-btn"><img src="../img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/p2.jpeg" class="product-thumb" atl="">
                    <button class="card-btn">Add to wishlist</button>
                </div>
                <div class="product-info">
                    <h4 class="product-type">Sandy Spring, GA</h4>
                    <p class="product-short-des">A short description</p>
                    <span class="price">$2000</span>
                </div>

            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/p3.jpeg" class="product-thumb" atl="">
                    <button class="card-btn">Add to wishlist</button>
                </div>
                <div class="product-info">
                    <h4 class="product-type">Rincon, GA</h4>
                    <p class="product-short-des">A short description</p>
                    <span class="price">$2000</span>
                </div>

            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/p4.jpeg" class="product-thumb" atl="">
                    <button class="card-btn">Add to wishlist</button>
                </div>
                <div class="product-info">
                    <h4 class="product-type">Doraville, GA</h4>
                    <p class="product-short-des">A short description</p>
                    <span class="price">$2000</span>
                </div>

            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/p1.jpeg" class="product-thumb" atl="">
                    <button class="card-btn">Add to wishlist</button>
                </div>
                <div class="product-info">
                    <h4 class="product-type">Atlanta, GA</h4>
                    <p class="product-short-des">A short description</p>
                    <span class="price">$2000</span>
                </div>

            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/p2.jpeg" class="product-thumb" atl="">
                    <button class="card-btn">Add to wishlist</button>
                </div>
                <div class="product-info">
                    <h4 class="product-type">Sandy Spring, GA</h4>
                    <p class="product-short-des">A short description</p>
                    <span class="price">$2000</span>
                </div>

            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/p3.jpeg" class="product-thumb" atl="">
                    <button class="card-btn">Add to wishlist</button>
                </div>
                <div class="product-info">
                    <h4 class="product-type">Rincon, GA</h4>
                    <p class="product-short-des">A short description</p>
                    <span class="price">$2000</span>
                </div>

            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/p4.jpeg" class="product-thumb" atl="">
                    <button class="card-btn">Add to wishlist</button>
                </div>
                <div class="product-info">
                    <h4 class="product-type">Doraville, GA</h4>
                    <p class="product-short-des">A short line of description</p>
                    <span class="price">$2000</span>
                </div>

            </div>

        </div>
    </section>

    <script src="../js/nav.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/product.js"></script>

    <?php   
        echo ($_SESSION["user"]);
        if (isset($_SESSION["user"])){
            echo "<script src=\"navLoggedIn.js\"></script>";
        }else{
            echo "<script src=\"nav.js\"></script>";
        }
    ?>

</body>

</html>