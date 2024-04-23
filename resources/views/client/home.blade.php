    @include('client.partials.head')
    
    @include('client.partials.navbar')

    @include('client.partials.login')

    <!------- Start header selection ------->
    <header>
        <div class="container header-container">
            <div class="header-left">
                <h1>Car Dealing Experience.</h1>
                <h3>Readfinde!</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, expedita ipsam <br>ea porro
                    rem ut, iste quod a nesciunt natus earum vitae sunt necessitatibus<br> corrupti, error ipsa
                    doloremque
                    quaerat aspernatur!
                </p>
                <a href="brands" class="btn">Explore Cars</a>
            </div>
            <div class="header-right">
                <div class="sq-box">
                    <img src={{ asset('images\banners\banner_home_page.png') }} alt="">
                </div>
            </div>
        </div>
        <div class="sq-box2"></div>
    </header>
    <!------- End header selection ------->

    @include('client.partials.footer')
