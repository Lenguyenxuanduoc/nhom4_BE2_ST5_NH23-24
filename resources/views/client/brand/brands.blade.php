@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start banner------->
<section class="banner" style="background-image: url('images/banners/banner_brands_page.jpg');">
    <div class="banner-content">
        <h1>Automotive Brands</h1>
        <p>The Full List of (Awesome) Car Brands</p>
    </div>
</section>
<!------- End banner ------->


<!------- Start logo brand list ------->
<section class="car-brands-container">
    <div class="label-car-brands">
        <h1>All Brands</h1>
        <hr>
    </div>
    <div class="car-brands">
        @if (!empty($brands))
            @foreach ($brands as $brand)
                <div class="car-brand">
                    <div class="car-brand-img">
                        <a href="/brands/{{ $brand->slug }}"><img
                                src={{ asset('images/manufacturer_logos/' . $brand->image) }}></a>
                    </div>
                    <div class="car-brand-name">
                        <a href="/brands/{{ $brand->slug }}">
                            <h2 style="text-align: center;">{{ $brand->name }}</h2>
                        </a>
                    </div>
                    <div class="car-brand-text">
                        <p style="text-align: center;"><span>Founded: </span>{{ $brand->founded_year }} /
                            <span>Founder: </span>{{ $brand->founder_name }}
                        </p>
                        <p style="text-align: center;">{{ $brand->description }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>

<!------- End logo brand list ------->


<!------- Start featured cars ------->
<section class="car-list-container">
    <div class="label-car-list">
        <h1>Featured Cars</h1>
        <hr>
    </div>
    <div class="car-list">
        @if (!empty($featured_cars))
            @foreach ($featured_cars as $car)
                <div class="car-box">
                    <a href={{asset('car/'. $car->slug)}}>
                        <h2>{{ $car->name }}</h2>
                        <img src={{ asset('images/cars/' . $car->avatar) }} alt="">
                    </a>
                    <div class="car-text">
                        <span>MT score:</span>
                        <h3>{{ round(($car->performance_avg + $car->value_avg + $car->innovation_avg + $car->efficency_range_avg) / 4, 1) }}
                        </h3>
                        <span>Price:</span>
                        <h3>${{ number_format($car->price, 0, ',', '.') }}</h3>
                        <span>Producing:</span>
                        <h3>{{ $car->producing_year }}</h3>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>
<!------- End featured cars ------->

@include('client.partials.footer')
