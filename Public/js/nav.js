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
            <li class="link-item"><a a href="#" class="link">Home</a></li>
            <li class="link-item"><a a href="#" class="link">Houses</a></li>
            <li class="link-item"><a a href="#" class="link">Apartments</a></li>
            <li class="link-item"><a a href="#" class="link">Duplex</a></li>
            <li class="link-item"><a a href="#" class="link">Mansions</a></li>

        </ul>
    `;

}

creatNav();