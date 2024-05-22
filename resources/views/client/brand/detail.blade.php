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

@if (session('error'))
    <div id="errorPopup" class="alert-custom-popup popup-error">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div id="successPopup" class="alert-custom-popup popup-success">
        {{ session('success') }}
        <a href="{{route('user.info')}}" style="color: White; text-decoration: underline">Wishlist</a>
    </div>
@endif

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
                    <a href={{ asset('car/' . $car->slug) }}>
                        <h3>{{ $car->name }}</h3>
                        <img src={{ asset('images/cars/' . $car->avatar) }} alt="">
                    </a>

                    <div class="car-text">
                        <span>MT score:</span>
                        <h3>{{ round(($car->performance_avg + $car->value_avg + $car->innovation_avg + $car->efficency_range_avg) / 4, 1) }}
                        </h3>
                        <span>MSRP:</span>
                        <h3>
                            @if ($car->msrp != 0)
                                ${{ number_format($car->msrp, 0, ',', '.') }}
                            @else
                                <h4>Coming soon</h4>
                            @endif
                        </h3>
                        <span>Producing:</span>
                        <h3>{{ $car->producing_year }}</h3>
                        <div class="compare-link">
                            <a href="{{ route('compare') }}">Compare <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="icon-wishlist">
                        <li><a href="{{ route('add.to.wishlist', $car->id) }}"><i class="fa-regular fa-star"></i></a>
                        </li>
                        <div class="tooltip-text">Add to Wishlist</div>
                        {{-- <li><a href=""><i class="fa-solid fa-star"></i></a></li> --}}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>

<!------- End models ------->
<script>
    // Wait for the DOM to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Function to show the popup
        function showPopup(popupId) {
            let popupElement = document.getElementById(popupId);
            if (popupElement) {
                popupElement.style.display = 'block';
                setTimeout(function() {
                    popupElement.style.display = 'none';
                }, 2500); // Hide after 2.5 seconds
            }
        }

        // Show the popups if they exist
        showPopup('errorPopup');
        showPopup('successPopup');
    });
</script>
@include('client.partials.footer')
