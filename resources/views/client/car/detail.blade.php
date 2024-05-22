@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

@if (session('error'))
    <div id="errorPopup" class="alert-custom-popup popup-error">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div id="successPopup" class="alert-custom-popup popup-success">
        {{ session('success') }}
        <a href="{{ route('user.info') }}" style="color: White; text-decoration: underline">Wishlist</a>
    </div>
@endif

<!------- Start car detail ------->
<section class="car-detail-container flex">
    <div class="left">
        <div class="main-img">
            @php
                if (!empty($car->images)) {
                    $images = json_decode($car->images);
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
            <h1>{{ $car->name }}</h1>
            <hr>
            <div class="specs-box">
                <div class="performance-box">
                    <h3>Performance</h3>
                    <table>
                        <tbody>
                            <tr class="tr-background">
                                <td class="td-name">Engine Name</td>
                                <td>{{ !empty($performance->engine) ? $performance->engine : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Trim</td>
                                <td>{{ !empty($performance->trim) ? $performance->trim : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Horsepower</td>
                                <td>{{ !empty($performance->horsepower) ? $performance->horsepower : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Torque</td>
                                <td>{{ !empty($performance->torque) ? $performance->torque : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Number Of Cylinders</td>
                                <td>{{ !empty($performance->cylinders) ? $performance->cylinders : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Standard MPG</td>
                                <td>{{ !empty($performance->standard_mpg) ? $performance->standard_mpg : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Transmission</td>
                                <td>{{ !empty($performance->transmission) ? $performance->transmission : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Transmission Type</td>
                                <td>{{ !empty($performance->transmission_type) ? $performance->transmission_type : 'N/A' }}
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
                                <td>{{ !empty($interior->front_headroom) ? $interior->front_headroom : 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Rear Headroom</td>
                                <td>{{ !empty($interior->rear_headroom) ? $interior->rear_headroom : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Front Legroom</td>
                                <td>{{ !empty($interior->front_legroom) ? $interior->front_legroom : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Rear Legroom</td>
                                <td>{{ !empty($interior->rear_legroom) ? $interior->rear_legroom : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Front Shoulder Room</td>
                                <td>{{ !empty($interior->front_shoulder_room) ? $interior->front_shoulder_room : 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Rear Shoulder Room</td>
                                <td>{{ !empty($interior->rear_shoulder_room) ? $interior->rear_shoulder_room : 'N/A' }}
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
                                <td>{{ !empty($exterior->length) ? $exterior->length : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Width</td>
                                <td>{{ !empty($exterior->width) ? $exterior->width : 'N/A' }}</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Height</td>
                                <td>{{ !empty($exterior->height) ? $exterior->height : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Wheel base</td>
                                <td>{{ !empty($exterior->wheel_base) ? $exterior->wheel_base : 'N/A' }}</td>
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
                                <td>{{ !empty($weightCapacity->fuel_capacity) ? $weightCapacity->fuel_capacity : 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Cargo Capacity</td>
                                <td>{{ !empty($weightCapacity->cargo_capacity) ? $weightCapacity->cargo_capacity : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Curb Weight</td>
                                <td>{{ !empty($weightCapacity->curb_weight) ? $weightCapacity->curb_weight : 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Towing Capacity</td>
                                <td>{{ !empty($weightCapacity->towing_capacity) ? $weightCapacity->towing_capacity : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">GVWR</td>
                                <td>{{ !empty($weightCapacity->GVWR) ? $weightCapacity->GVWR : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">Payload Capacity</td>
                                <td>{{ !empty($weightCapacity->payload_capacity) ? $weightCapacity->payload_capacity : 'N/A' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Tonnage</td>
                                <td>{{ !empty($weightCapacity->tonnage) ? $weightCapacity->tonnage : 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="safety-box">
                    <h3>Safety</h3>
                    <table>
                        <tbody>
                            <tr class="tr-background">
                                <td class="td-name">IIHS Best Pick</td>
                                <td>{{ !empty($safety->IIHS_best_pick) ? $safety->IIHS_best_pick : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">IIHS Front Small Overlap</td>
                                <td>{{ !empty($safety->IIHS_front_small_overlap) ? $safety->IIHS_front_small_overlap : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">IIHS Rear Crash</td>
                                <td>{{ !empty($safety->IIHS_rear_crash) ? $safety->IIHS_rear_crash : 'N/R' }}</td>
                            </tr>
                            <tr>
                                <td class="td-name">IIHS Rating Front Driver</td>
                                <td>{{ !empty($safety->IIHS_rating_front_driver) ? $safety->IIHS_rating_front_driver : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">IIHS Rating Front Side</td>
                                <td>{{ !empty($safety->IIHS_rating_front_side) ? $safety->IIHS_rating_front_side : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">IIHS Rating Rear Side</td>
                                <td>{{ !empty($safety->IIHS_rating_rear_side) ? $safety->IIHS_rating_rear_side : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">IIHS Front Moderate Overlap</td>
                                <td>{{ !empty($safety->IIHS_front_moderate_overlap) ? $safety->IIHS_front_moderate_overlap : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">IIHS Overall Side Crash</td>
                                <td>{{ !empty($safety->IIHS_overall_side_crash) ? $safety->IIHS_overall_side_crash : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">IIHS Roof Strength</td>
                                <td>{{ !empty($safety->IIHS_roof_strength) ? $safety->IIHS_roof_strength : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">NHTSA Rating Front Passenger</td>
                                <td>{{ !empty($safety->NHTSA_rating_front_passenger) ? $safety->NHTSA_rating_front_passenger : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">NHTSA Rating Overall</td>
                                <td>{{ !empty($safety->NHTSA_rating_overall) ? $safety->NHTSA_rating_overall : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">NHTSA Rating Rollover</td>
                                <td>{{ !empty($safety->NHTSA_rating_rollover) ? $safety->NHTSA_rating_rollover : 'N/R' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="warranty-box">
                    <h3>Warranty</h3>
                    <table>
                        <tbody>
                            <tr class="tr-background">
                                <td class="td-name">Free Maintenance Miles</td>
                                <td>{{ !empty($warranty->free_maintenance_miles) ? $warranty->free_maintenance_miles : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Full Warranty Miles</td>
                                <td>{{ !empty($warranty->full_warranty_miles) ? $warranty->full_warranty_miles : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Powertrain Warranty Miles</td>
                                <td>{{ !empty($warranty->powertrain_warranty_miles) ? $warranty->powertrain_warranty_miles : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Roadside Warranty Miles</td>
                                <td>{{ !empty($warranty->roadside_warranty_miles) ? $warranty->roadside_warranty_miles : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Corrosion Warranty Miles</td>
                                <td>{{ !empty($warranty->corrosion_warranty_miles) ? $warranty->corrosion_warranty_miles : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Free Maintenance Months</td>
                                <td>{{ !empty($warranty->free_maintenance_months) ? $warranty->free_maintenance_months : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Full Warranty Months</td>
                                <td>{{ !empty($warranty->full_warranty_months) ? $warranty->full_warranty_months : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Powertrain Warranty Months</td>
                                <td>{{ !empty($warranty->powertrain_warranty_months) ? $warranty->powertrain_warranty_months : 'N/R' }}
                                </td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Roadside Warranty Months</td>
                                <td>{{ !empty($warranty->roadside_warranty_months) ? $warranty->roadside_warranty_months : 'N/R' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="td-name">Corrosion Warranty Months</td>
                                <td>{{ !empty($warranty->corrosion_warranty_months) ? $warranty->corrosion_warranty_months : 'N/R' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!------- End specifications pop up ------->


    <div class="right">
        <div class="car-name">
            <h3>{{ $car->name }} {{ $car->producing_year }}</h3>

            <div class="icon-wishlist">
                <li>
                    <a href="{{ route('add.to.wishlist', $car->id) }}"><i class="fa-regular fa-star"></i></a>
                </li>
                <div class="tooltip-text">Add to Wishlist</div>
            </div>
        </div>

        <div class="category-mtscore">
            <button class="btn-mt-score" onclick="scrollToCarReview()">MT Score <span>{{ $mt_score }}</span><span
                    class="span-10">/10</span></button>
            <button class="btn-category"><a href="">{{ $car->category->name }}</a></button>
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
                            {{ !empty($performance->trim) ? $performance->trim : 'N/A' }}
                        </td>

                        <td style="width: 25%">
                            @if ($car->msrp != 0)
                                ${{ number_format($car->msrp, 0, ',', '.') }}
                            @else
                                Coming soon
                            @endif
                        </td>

                        <td style="width: 35%">
                            @if ($car->fair_market_price != 0)
                                ${{ number_format($car->fair_market_price, 0, ',', '.') }}
                            @else
                                Coming soon
                            @endif
                        </td>

                        <td style="width: 15%;">
                            <button class="btn-compare"><a href="{{ route('compare') }}">Compare</a></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="btn-order-container">
            <button class="btn-order"><a href="">Add to Cart</a></button>
        </div>

        <div class="horsepower-torque">
            <div class="horsepower">
                <img src={{ asset('images/icons/horsepower-icon.png') }} alt="">
                <span>Horsepower:</span>
                <p>{{ !empty($performance->horsepower) ? $performance->horsepower : 'N/A' }}</p>
            </div>

            <div class="torque">
                <img src={{ asset('images/icons/torque-icon.png') }} alt="">
                <span>Torque:</span>
                <p>{{ !empty($performance->torque) ? $performance->torque : 'N/A' }}</p>
            </div>
        </div>
    </div>
</section>
<!------- End car detail ------->


<!------- Start car review ------->
<section class="car-review-container">
    <div class="car-review-box">
        <div class="label-mt-score">
            <h2>MT Score <span class="span-score">{{ $mt_score }}</span><span class="span-10">/10</span></h2>
        </div>

        <div class="specifications-point-box">
            <div class="specifications-point">
                <h4><span>{{ $performanceInReview }}</span>/10</h4>
                <p>Performance</p>
                <div class="score-bar"></div>
            </div>
            <div class="specifications-point">
                <h4><span>{{ $efficency_rangeInReview }}</span>/10</h4>
                <p>Efficiency/Range</p>
                <div class="score-bar"></div>
            </div>
            <div class="specifications-point">
                <h4><span>{{ $tech_innovationInReview }}</span>/10</h4>
                <p>Tech/Innovation</p>
                <div class="score-bar"></div>
            </div>
            <div class="specifications-point">
                <h4><span>{{ $valueInReview }}</span>/10</h4>
                <p>Value</p>
                <div class="score-bar"></div>
            </div>
        </div>

        <div class="comment-box">
            <h2>Comments</h2>
            <form class="comment-form" method="post" action="{{ route('store.car.comment') }}">
                @csrf
                <div>
                    <textarea class="comment-message" name="content" rows="4" placeholder="Add a comment..." required></textarea>
                    <input type="hidden" name="car_id" value="{{$car->id}}">
                </div>
                <button type="submit">Send</button>
            </form>

            <div class="comments-section">
                @if (!empty($comments))
                    @foreach ($comments as $comment)
                        <div class="comment">
                            <div class="comment-header">
                                <span class="comment-user">{{$comment->user->name}}</span>
                                <span class="comment-date">{{\Carbon::parse($comment->comment_date)->format('d/m/Y')}}</span>
                            </div>
                            <div class="comment-content">
                                {{ $comment->content }}
                            </div>
                            <div class="reply"><a href="">Reply</a></div>
                        </div>
                    @endforeach
                @endif
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
                        <a href="{{ route('car.detail', $car->slug) }}">
                            <div class="D23ds">
                                <h2>{{ $car->name }}</h2>

                                <div class="icon-wishlist">
                                    <li><a href="{{ route('add.to.wishlist', $car->id) }}"><i
                                                class="fa-regular fa-star"></i></a>
                                    </li>
                                    <div class="tooltip-text">Add to Wishlist</div>
                                </div>
                            </div>
                        </a>
                        <p>MSRP:
                            @if ($car->msrp != 0)
                                ${{ number_format($car->msrp, 0, ',', '.') }}
                            @else
                                Coming soon
                            @endif
                        </p>
                    </div>
                    <div class="compare-link">
                        <a href="{{ route('compare') }}">Compare <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                </div>
            @endforeach
        @endif
    </div>
</section>
<!------- End same category ------->


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
