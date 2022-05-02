const creatNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
    <div class="nav">
            <img src="../img/logo.jpeg" class="brand-logo" atl="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">Search</button>
                </div>
                <a href="#"><img src="../img/user.png" alt=""></a>
                <a href="#"><img src="../img/cart.png" alt=""></a>
            </div>
        </div>

        <ul class="links-container">
            <li class="link-item"><a a href="./index.html" class="link">Home</a></li>
            <li class="link-item"><a a href="./aboutus.html" class="link">About Us</a></li>
            <li class="link-item"><a a href="./logout.php" class="link">Logout</a></li>
        </ul>
    `;

}

creatNav();