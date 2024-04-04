<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <!------- Start navbar ------->
    <nav>
        <div class="container nav-container">
            <a href="" class="logo"><h3>Exotic Cars.</h3></a>
            <ul class="nav-link">
                <li><a href="" class="active">Home</a></li>
                <li><a href="">News</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Contact</a></li>
                <li>
                    <form action="" class="search">
                        <input type="text" name="tag" placeholder="Search">
                        <button type="submit" style="display:none"></button>
                    </form>
                </li>
            </ul>
            <ul class="social-link">
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
            </ul>
        </div>
    </nav>
    <!------- End navbar ------->

    <!------- Start header selection ------->
    <header>
        <div class="container header-container">
           <div class="header-left">
                <h1>Car Dealing Experience.</h1>
                <h3>Readfinde!</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, expedita ipsam <br>ea porro  
                    rem ut, iste quod a nesciunt natus earum vitae sunt necessitatibus<br> corrupti, error ipsa doloremque quaerat aspernatur!
                </p>
                <a href="" class="btn">Explore Cars</a>
           </div>
           <div class="header-right">
                <div class="sq-box">
                    <img src="{{asset('images\cars\subarubrz.png')}}" alt="">
                </div>
           </div>
        </div>
        <div class="sq-box2">

        </div>
    </header>

    <!------- End header selection ------->

</body>
</html>