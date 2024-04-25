@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start car detail ------->
<section class="car-detail-container flex">
    <div class="left">
        <div class="main-img">
            @php
                $images = json_decode($car_detail->images);
            @endphp
            <img src={{ asset('images/cars/' . $images[0]) }} onclick="img('images/cars/{{ $images[0] }}')"
                alt="" class="slide">
        </div>
        <div class="option">
            <img src="{{ asset('images/cars/' . $images[0]) }}" onclick="img('{{ asset('images/cars/' . $images[0]) }}')"
                alt="">
            <img src="{{ asset('images/cars/' . $images[1]) }}" onclick="img('{{ asset('images/cars/' . $images[1]) }}')"
                alt="">
            <img src="{{ asset('images/cars/' . $images[2]) }}" onclick="img('{{ asset('images/cars/' . $images[2]) }}')"
                alt="">
            <img src="{{ asset('images/cars/' . $images[3]) }}" onclick="img('{{ asset('images/cars/' . $images[3]) }}')"
                alt="">
            <img src="{{ asset('images/cars/' . $images[4]) }}" onclick="img('{{ asset('images/cars/' . $images[4]) }}')"
                alt="">
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
                                <td>{{ !empty($car_detail->transmission_type) ? $car_detail->transmission_type : 'N/A' }}</td>
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
                                <td>{{ !empty($car_detail->front_headroom) ? $car_detail->front_headroom : 'N/A' }}</td>
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
                                <td>{{ !empty($car_detail->front_shoulder_room) ? $car_detail->front_shoulder_room : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Rear Shoulder Room</td>
                                <td>{{ !empty($car_detail->rear_shoulder_room) ? $car_detail->rear_shoulder_room : 'N/A' }}</td>
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
                                <td>{{ !empty($car_detail->cargo_capacity) ? $car_detail->cargo_capacity : 'N/A' }}</td>
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
            <h3>{{ $car_detail->name }} <h3 class="producing-year">{{ $car_detail->producing_year }}</h3>
            </h3>
        </div>

        <div class="category-mtscore">
            <button class="btn-mt-score" onclick="scrollToCarReview()">MT Score <span>8.1</span><span
                    class="span-10">/10</span></button>
            {{-- <button class="btn-category"><a href="">Coupe</a></button> --}}
        </div>

        <div class="car-price">
            <h4>Price:</h4>
            <p>${{ number_format($car_detail->price, 0, ',', '.') }}</p>
        </div>
        <div class="car-description">
            <p>{{$car_detail->description}}</p>
        </div>
        <div class="btn-order">
            <button class="btn-order">Order</button>
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
        <div class="related-cars-box">
            <p><b>MT Score</b> <span class="span1">8</span><span class="span2">/10</span></p>
            <a href="car_detail.html"><img src="images/cars/ford/mustang-nobg.png" alt=""></a>
            <div class="related-cars-text">
                <a href="">
                    <h2>Corvette</h2>
                </a>
                <p>Price: $50.000</p>
            </div>
        </div>

        <div class="related-cars-box">
            <p><b>MT Score</b> <span class="span1">8</span><span class="span2">/10</span></p>
            <a href="car_detail.html"><img src="corvette.png" alt=""></a>
            <div class="related-cars-text">
                <a href="">
                    <h2>Corvette</h2>
                </a>
                <p>Price: $50.000</p>
            </div>
        </div>

        <div class="related-cars-box">
            <p><b>MT Score</b> <span class="span1">8</span><span class="span2">/10</span></p>
            <a href="car_detail.html"><img src="corvette.png" alt=""></a>
            <div class="related-cars-text">
                <a href="">
                    <h2>Corvette</h2>
                </a>
                <p>Price: $50.000</p>
            </div>
        </div>

        <div class="related-cars-box">
            <p><b>MT Score</b> <span class="span1">8</span><span class="span2">/10</span></p>
            <a href="car_detail.html"><img src="corvette.png" alt=""></a>
            <div class="related-cars-text">
                <a href="">
                    <h2>Corvette</h2>
                </a>
                <p>Price: $50.000</p>
            </div>
        </div>
    </div>
</section>
<!------- End same category ------->



@include('client.partials.footer')
