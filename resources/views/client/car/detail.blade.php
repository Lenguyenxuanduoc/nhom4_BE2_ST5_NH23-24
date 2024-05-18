@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start car detail ------->
<section class="car-detail-container flex">
    <div class="left">
        <div class="main-img">
            @php
                if (!empty($car_detail->images)) {
                    $images = json_decode($car_detail->images);
                }
            @endphp
            @if (!empty($images[0]))
                <img src="{{ asset('images/cars/' . $images[0]) }}" alt="" class="slide">
            @endif
        </div>

        <div class="option">
            @php
                if (!empty($images)) {
                    foreach ($images as $image) {
                        echo '<img src="' .
                            asset('images/cars/' . $image) .
                            '" onclick="img(\'' .
                            asset('images/cars/' . $image) .
                            '\')" alt="">';
                    }
                }
            @endphp
        </div>

        <button class="btn-specs" onclick="openPopup('specs-popup')">SEE ALL SPECS</button><br>
    </div>


    <!------- Start specifications pop up ------->
    <div class="specs-popup-overlay" id="specs-popup">
        <div class="specs-popup">
            <div class="btn-close-popup">
                <button onclick="closePopup('specs-popup')"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <h1>{{ $car_detail->name }}</h1>
            <hr>
            <div class="specs-box">
                <div class="performance-box">
                    <h3>Performance</h3>
                    <table>
                        <tbody>
                            <tr class="tr-background">
                                <td class="td-name">Engine Name</td>
                                <td>{{ !empty($car_detail->engine) ? $car_detail->engine : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Trim</td>
                                <td>{{ !empty($car_detail->trim) ? $car_detail->trim : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Horsepower</td>
                                <td>{{ !empty($car_detail->horsepower) ? $car_detail->horsepower : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Torque</td>
                                <td>{{ !empty($car_detail->torque) ? $car_detail->torque : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Number Of Cylinders</td>
                                <td>{{ !empty($car_detail->cylinders) ? $car_detail->cylinders : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Standard MPG</td>
                                <td>{{ !empty($car_detail->standard_mpg) ? $car_detail->standard_mpg : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Transmission</td>
                                <td>{{ !empty($car_detail->transmission) ? $car_detail->transmission : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Transmission Type</td>
                                <td>{{ !empty($car_detail->transmission_type) ? $car_detail->transmission_type : 'N/A' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="interior-box">
                    <h3>Interior Demensions</h3>
                    <table>
                        <tbody>
                            <tr class="tr-background">
                                <td class="td-name">Front Headroom</td>
                                <td>{{ !empty($car_detail->front_headroom) ? $car_detail->front_headroom : 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Rear Headroom</td>
                                <td>{{ !empty($car_detail->rear_headroom) ? $car_detail->rear_headroom : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Front Legroom</td>
                                <td>{{ !empty($car_detail->front_legroom) ? $car_detail->front_legroom : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Rear Legroom</td>
                                <td>{{ !empty($car_detail->rear_legroom) ? $car_detail->rear_legroom : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Front Shoulder Room</td>
                                <td>{{ !empty($car_detail->front_shoulder_room) ? $car_detail->front_shoulder_room : 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Rear Shoulder Room</td>
                                <td>{{ !empty($car_detail->rear_shoulder_room) ? $car_detail->rear_shoulder_room : 'N/A' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="exterior-box">
                    <h3>Exterior Demensions</h3>
                    <table>
                        <tbody>
                            <tr class="tr-background">
                                <td class="td-name">Length</td>
                                <td>{{ !empty($car_detail->length) ? $car_detail->length : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Width</td>
                                <td>{{ !empty($car_detail->width) ? $car_detail->width : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Height</td>
                                <td>{{ !empty($car_detail->height) ? $car_detail->height : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Wheel base</td>
                                <td>{{ !empty($car_detail->wheel_base) ? $car_detail->wheel_base : 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="weights-capacities-box">
                    <h3>Weights And Capacities</h3>
                    <table>
                        <tbody>
                            <tr class="tr-background">
                                <td class="td-name">Fuel Capacity</td>
                                <td>{{ !empty($car_detail->fuel_capacity) ? $car_detail->fuel_capacity : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Cargo Capacity</td>
                                <td>{{ !empty($car_detail->cargo_capacity) ? $car_detail->cargo_capacity : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Curb weight</td>
                                <td>{{ !empty($car_detail->curb_weight) ? $car_detail->curb_weight : 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!------- End specifications pop up ------->


    <div class="right">
        <div class="car-name">
            <h3>{{ $car_detail->name }} {{ $car_detail->producing_year }}</h3>
        </div>

        <div class="category-mtscore">
            <button class="btn-mt-score" onclick="scrollToCarReview()">MT Score <span>8.1</span><span
                    class="span-10">/10</span></button>
            <button class="btn-category"><a href="">{{$car_detail->category->name}}</a></button>
        </div>

        <div class="car-price">
            <table>
                <tbody>
                    <tr class="table-heading">
                        <th>Trim</th>
                        <th>MSRP</th>
                        <th>Fair Market Price</th>
                    </tr>
                    <tr class="tr-background">
                        <td style="color: #0073d8; font-weight: bold; width: 30%">
                            {{ !empty($car_detail->trim) ? $car_detail->trim : 'N/A' }}
                        </td>

                        <td style="width: 25%">
                            @if ($car_detail->msrp != 0)
                                ${{ number_format($car_detail->msrp, 0, ',', '.') }}
                            @else
                                Coming soon
                            @endif
                        </td>

                        <td style="width: 35%">
                            @if ($car_detail->fair_market_price != 0)
                                ${{ number_format($car_detail->fair_market_price, 0, ',', '.') }}
                            @else
                                Coming soon
                            @endif
                        </td>

                        {{-- <td style="width: 15%;">    
                            <button class="btn-compare"><a href="{{route('car.comparison')}}">Compare</a></button>
                        </td> --}}
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="btn-order-container">
            <button class="btn-order">Order</button>
        </div>

        <div class="horsepower-torque">
            <div class="horsepower">
                <img src={{ asset('images/icons/horsepower-icon.png') }} alt="">
                <span>Horsepower:</span>
                <p>{{ !empty($car_detail->horsepower) ? $car_detail->horsepower : 'N/A' }}</p>
            </div>

            <div class="torque">
                <img src={{ asset('images/icons/torque-icon.png') }} alt="">
                <span>Torque:</span>
                <p>{{ !empty($car_detail->torque) ? $car_detail->torque : 'N/A' }}</p>
            </div>
        </div>
    </div>
</section>
<!------- End car detail ------->


<!------- Start car review ------->
<section class="car-review-container">
    <div class="car-review-box">
        <div class="label-mt-score">
            <h2>MT Score <span class="span-score">8.1</span><span class="span-10">/10</span></h2>
        </div>
        {{-- <div class="car-description">
            <p>{{ $car_detail->description }}The BRZ has a lot to offer as one of the few affordable sports cars available. Its engaging steering, high-speed stability, and confident handling make it a great choice for serious drivers. But the interior can get noisy.
            </p>
        </div> --}}
        <div class="specifications-point-box">
            <div class="specifications-point">
                <h4><span>8</span>/10</h4>
                <p>Performance</p>
                <div class="score-bar"></div>
            </div>
            <div class="specifications-point">
                <h4><span>7.7</span>/10</h4>
                <p>Efficiency/Range</p>
                <div class="score-bar"></div>
            </div>
            <div class="specifications-point">
                <h4><span>7</span>/10</h4>
                <p>Tech/Innovation</p>
                <div class="score-bar"></div>
            </div>
            <div class="specifications-point">
                <h4><span>8</span>/10</h4>
                <p>Value</p>
                <div class="score-bar"></div>
            </div>
        </div>
    </div>
</section>
<!------- End car review ------->


<!------- Start same category ------->
<section class="related-cars-container">
    <h1>Related Cars</h1>
    <hr>
    <div class="related-cars">
        @if (!empty($related_cars))
            @foreach ($related_cars as $car)
                <div class="related-cars-box">
                    <p><b>MT Score</b> <span class="span1">8</span><span class="span2">/10</span></p>
                    <a href={{ asset('car/' . $car->slug) }}><img src={{ asset('images/cars/' . $car->avatar) }}
                            alt=""></a>
                    <div class="related-cars-text">
                        <a href="">
                            <h2>{{ $car->name }}</h2>
                        </a>
                        <p>MSRP:
                            @if ($car->msrp != 0)
                                ${{ number_format($car->msrp, 0, ',', '.') }}
                            @else
                                Coming soon
                            @endif
                        </p>
                    </div>
                    {{-- <div class="compare-link">
                        <a href="{{route('car.comparison')}}">Compare <i class="fa-solid fa-arrow-right"></i></a>
                    </div> --}}
                </div>
            @endforeach
        @endif
    </div>
</section>
<!------- End same category ------->



@include('client.partials.footer')
