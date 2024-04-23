<!------- Start navbar ------->
<nav>
    <div class="container nav-container">
        <a href="/home" class="logo">
            <h3>Exotic Cars.</h3>
        </a>
        <ul class="nav-link">
            <li><a href="/home" class="active">Home</a></li>
            <li><a href="/news">News</a></li>
            <li>
                <a href="/brands">Brands <i class="fa-solid fa-caret-down" style="font-size: 15px;"></i></a>
                <div class="nav-dropdown">
                    <ul>
                        <li><a href="/brands/brand/bmw">BMW</a></li>
                        <li><a href="/brands/brand/chevrolet">Chevrolet</a></li>
                        <li><a href="/brands/brand">Dodge</a></li>
                        <li><a href="/brands/brand">Ferrari</a></li>
                        <li><a href="/brands/brand">Ford</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li>
                <form action="" class="search">
                    <input type="text" name="tag" placeholder="Search">
                    <button type="submit" style="display:none"></button>
                </form>
            </li>
            <div class="login-register">
                <li><button class="login-btn" onclick="openPopup('login-popup')">Login</button></li>
            </div>
        </ul>
        <ul class="social-link">
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
        </ul>
    </div>
</nav>
<!------- End navbar ------->
