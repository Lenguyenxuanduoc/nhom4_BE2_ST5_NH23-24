@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start banner------->
<section class="banner" style="background-image: url('{{ asset('images/banners/' . $brand_detail->banner) }}');">
    <div class="banner-content">
        <h1>{{ $brand_detail->name }}</h1>
        <p>{{ $brand_detail->name }} Models</p>
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
        @if (!empty($cars))
            @foreach ($cars as $car)
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
<!------- End models ------->

@include('client.partials.footer')
