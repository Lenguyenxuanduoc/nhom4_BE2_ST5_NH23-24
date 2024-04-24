@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start banner------->
<section class="banner" style="background-image: url('{{asset('images/banners/bmw.jpg')}}');">
    <div class="banner-content">
        <h1>BMW</h1>
        <p>BMW Models</p>
    </div>
</section>
<!------- End banner ------->


<!------- Start models ------->
<section class="car-list-container">
    <div class="label-car-list">
        <h1>Models</h1>
        <hr>
    </div>
    <div class="car-list">
        <div class="car-box">
            <a href="car_detail.html">
                <h2>Corvette</h2>
                <img src="{{asset('images/cars/ford/mustang-nobg.png')}}" alt="">
            </a>
            <div class="car-text">
                <span>MT score:</span>
                <h3>8.7</h3>
                <span>Price:</span>
                <h3>$50.000</h3>
                <span>Producing:</span>
                <h3>2023</h3>
            </div>
        </div>

        <div class="car-box">
            <a href="car_detail.html">
                <h2>Corvette</h2>
                <img src="{{asset('images/cars/ford/mustang-nobg.png')}}" alt="">
            </a>
            <div class="car-text">
                <span>MT score:</span>
                <h3>8.7</h3>
                <span>Price:</span>
                <h3>$50.000</h3>
                <span>Producing:</span>
                <h3>2023</h3>
            </div>
        </div>

        <div class="car-box">
            <a href="car_detail.html">
                <h2>Corvette</h2>
                <img src="{{asset('images/cars/ford/mustang-nobg.png')}}" alt="">
            </a>
            <div class="car-text">
                <span>MT score:</span>
                <h3>8.7</h3>
                <span>Price:</span>
                <h3>$50.000</h3>
                <span>Producing:</span>
                <h3>2023</h3>
            </div>
        </div>

        <div class="car-box">
            <a href="car_detail.html">
                <h2>Corvette</h2>
                <img src="{{asset('images/cars/ford/mustang-nobg.png')}}" alt="">
            </a>
            <div class="car-text">
                <span>MT score:</span>
                <h3>8.7</h3>
                <span>Price:</span>
                <h3>$50.000</h3>
                <span>Producing:</span>
                <h3>2023</h3>
            </div>
        </div>

        <div class="car-box">
            <a href="car_detail.html">
                <h2>Corvette</h2>
                <img src="{{asset('images/cars/ford/mustang-nobg.png')}}" alt="">
            </a>
            <div class="car-text">
                <span>MT score:</span>
                <h3>8.7</h3>
                <span>Price:</span>
                <h3>$50.000</h3>
                <span>Producing:</span>
                <h3>2023</h3>
            </div>
        </div>

        <div class="car-box">
            <a href="car_detail.html">
                <h2>Corvette</h2>
                <img src="{{asset('images/cars/ford/mustang-nobg.png')}}" alt="">
            </a>
            <div class="car-text">
                <span>MT score:</span>
                <h3>8.7</h3>
                <span>Price:</span>
                <h3>$50.000</h3>
                <span>Producing:</span>
                <h3>2023</h3>
            </div>
        </div>
    </div>
</section>
<!------- End models ------->

@include('client.partials.footer')
