<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buyer Dashboard</title>
    <link rel="stylesheet" href="../css/buyer.css">
    
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
    

    <!-- cards container -->
    <section class="product">
    <div class="dropdown">
            <input type="text" class="textBox" placeholder="Dropdown Menu" readonly>
            <div class="option">
                <div onclick="show('Houses')">
                    <ion-icon name="home-outline"></ion-icon>Houses
                </div>
                <div onclick="show('Apartments')">
                    <ion-icon name="home-outline"></ion-icon>Apartments
                </div>
                <div onclick="show('Duplex')">
                    <ion-icon name="home-outline"></ion-icon>Duplex
                </div>
                <div onclick="show('Mansions')">
                    <ion-icon name="home-outline"></ion-icon>Mansions
                </div>
            </div>
        </div>
        <h2 class="product-category">Great Deal Here</h2>
        <button class="pre-btn"><img src="../img/arrow.png"></button>
        <button class="nxt-btn"><img src="../img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <a href="https://codd.cs.gsu.edu/~llin16/Web%20Programming/PW/Project4/js/product.php">
                        <img src="../img/p5.webp" class="product-thumb" atl="">
                    </a>
                    
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
        echo ($_SESSION["user"]);
        if (isset($_SESSION["user"])){
            echo "<script src=\"navLoggedIn.js\"></script>";
        }else{
            echo "<script src=\"nav.js\"></script>";
        }
    ?>
    
    <script src="index.js"></script>
    <script src="nav.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        function show(anything) {
            document.querySelector('.textBox').value = anything;
        }

        let dropdown = document.querySelector('.dropdown');
        dropdown.onclick = function () {
            dropdown.classList.toggle('active');
        }
    </script>
</body>

</html>