<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Exotic Car</title>
</head>
<body>
    @include('navbar')

    <!------- Start banner------->
    <section class="banner">
        <div class="banner-content">
            <h1>Supercar News</h1>
            <p>Breaking News, In-Depth Articles, Reviews And Press Releases Covering All You Need To Know In The World Of Supercar News</p>
        </div>
    </section>
    <!------- End banner ------->

    
    <!------- Start posts ------->
    <div class="posts-container">
        <a href="#">
            <div class="posts-box">
                <div class="posts-img">
                    <img src="{{asset('images\posts\posts1\posts1_1.jpg')}}" alt="">
                </div>
    
                <div class="posts-text">
                    <span>9 April 2024 / Terence W</span>
                    <a href="" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam numquam ab iure quibusdam earum cupiditate?</p>
                    <a href="">READ MORE</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="posts-box">
                <div class="posts-img">
                    <img src="{{asset('images\posts\posts1\posts1_1.jpg')}}" alt="">
                </div>
    
                <div class="posts-text">
                    <span>9 April 2024 / Terence W</span>
                    <a href="" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam numquam ab iure quibusdam earum cupiditate?</p>
                    <a href="">READ MORE</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="posts-box">
                <div class="posts-img">
                    <img src="{{asset('images\posts\posts1\posts1_1.jpg')}}" alt="">
                </div>
    
                <div class="posts-text">
                    <span>9 April 2024 / Terence W</span>
                    <a href="" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam numquam ab iure quibusdam earum cupiditate?</p>
                    <a href="">READ MORE</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="posts-box">
                <div class="posts-img">
                    <img src="{{asset('images\posts\posts1\posts1_1.jpg')}}" alt="">
                </div>
    
                <div class="posts-text">
                    <span>9 April 2024 / Terence W</span>
                    <a href="" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam numquam ab iure quibusdam earum cupiditate?</p>
                    <a href="">READ MORE</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="posts-box">
                <div class="posts-img">
                    <img src="{{asset('images\posts\posts1\posts1_1.jpg')}}" alt="">
                </div>
    
                <div class="posts-text">
                    <span>9 April 2024 / Terence W</span>
                    <a href="" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam numquam ab iure quibusdam earum cupiditate?</p>
                    <a href="">READ MORE</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="posts-box">
                <div class="posts-img">
                    <img src="{{asset('images\posts\posts1\posts1_1.jpg')}}" alt="">
                </div>
    
                <div class="posts-text">
                    <span>9 April 2024 / Terence W</span>
                    <a href="" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam numquam ab iure quibusdam earum cupiditate?</p>
                    <a href="">READ MORE</a>
                </div>
            </div>
        </a>
    </div>
    <!------- End posts ------->
    
    @include('footer')

    <script src="{{asset('main.js')}}"></script>
</body>
</html>