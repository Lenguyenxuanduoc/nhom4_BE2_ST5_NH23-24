@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start car detail ------->
<section class="car-detail-container flex">
    <div class="left">
        <div class="main-img">
            <img src="images/cars/ford/mustang1.jpg" alt="" class="slide">
        </div>
        <div class="option">
            <img src="images/cars/ford/mustang1.jpg" onclick="img('images/cars/ford/mustang1.jpg')" alt="">
            <img src="images/cars/ford/mustang2.jpg" onclick="img('images/cars/ford/mustang2.jpg')" alt="">
            <img src="images/cars/ford/mustang3.jpg" onclick="img('images/cars/ford/mustang3.jpg')" alt="">
            <img src="images/cars/ford/mustang4.jpg" onclick="img('images/cars/ford/mustang4.jpg')" alt="">
            <img src="images/cars/ford/mustang5.jpg" onclick="img('images/cars/ford/mustang5.jpg')" alt="">
        </div>
        <button class="btn-specs" onclick="openPopup('specs-popup')">SEE ALL SPECS</button><br>
    </div>


    <!------- Start specifications pop up ------->
    <div class="specs-popup-overlay" id="specs-popup">
        <div class="specs-popup">
            <div class="btn-close-popup">
                <button onclick="closePopup('specs-popup')"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <h1>Ford Mustang Specifications</h1>
            <hr>
            <div class="specs-box">
                <div class="performance-box">
                    <h3>Performance</h3>
                    <table>
                        <tbody>
                            <tr class="tr-background">
                                <td class="td-name">Engine Name</td>
                                <td>4-Cyl Turbo 2.3 Liter EcoBoost®</td>
                            </tr>
                            <tr>
                                <td class="td-name">Trim</td>
                                <td>EcoBoost Coupe</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Horsepower</td>
                                <td>315@5,000</td>
                            </tr>
                            <tr>
                                <td class="td-name">Torque</td>
                                <td>350@3,000</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Number Of Cylinders</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td class="td-name">Standard MPG</td>
                                <td>22/23</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Transmission</td>
                                <td>10 Speed Automatic with Manual Mode</td>
                            </tr>
                            <tr>
                                <td class="td-name">Transmission Type</td>
                                <td>Automatic</td>
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
                                <td>36.7 in</td>
                            </tr>
                            <tr>
                                <td class="td-name">Rear Headroom</td>
                                <td>34.8 in</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Front Legroom</td>
                                <td>34.8 in</td>
                            </tr>
                            <tr">
                                <td class="td-name">Rear Legroom</td>
                                <td>34.8 in</td>
                                </tr>
                                <tr class="tr-background">
                                    <td class="td-name">Front Shoulder Room</td>
                                    <td>34.8 in</td>
                                </tr>
                                <tr>
                                    <td class="td-name">Rear Shoulder Room</td>
                                    <td>34.8 in</td>
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
                                <td>189.4 in</td>
                            </tr>
                            <tr>
                                <td class="td-name">Width</td>
                                <td>34.8 in</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Height</td>
                                <td>34.8 in</td>
                            </tr>
                            <tr>
                                <td class="td-name">Wheel base</td>
                                <td>34.8 in</td>
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
                                <td>16.0</td>
                            </tr>
                            <tr>
                                <td class="td-name">Cargo Capacity</td>
                                <td>13.3 cu-ft</td>
                            </tr>
                            <tr class="tr-background">
                                <td class="td-name">Curb weight</td>
                                <td>3.597 lb</td>
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
            <h3>Ford Mustang <h3 class="producing-year">2024</h3>
            </h3>
        </div>

        <div class="category-mtscore">
            <button class="btn-mt-score" onclick="scrollToCarReview()">MT Score <span>8.1</span><span
                    class="span-10">/10</span></button>
            <button class="btn-category"><a href="">Coupe</a></button>
        </div>

        <div class="car-price">
            <h4>Price:</h4>
            <p>$50.000</p>
        </div>
        <div class="car-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quae animi, perspiciatis numquam porro
                quia odit voluptates similique tenetur ducimus?</p>
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
                <a href=""><h2>Corvette</h2></a>
                <p>Price: $50.000</p>
            </div>
        </div>

        <div class="related-cars-box">
            <p><b>MT Score</b> <span class="span1">8</span><span class="span2">/10</span></p>
            <a href="car_detail.html"><img src="corvette.png" alt=""></a>
            <div class="related-cars-text">
                <a href=""><h2>Corvette</h2></a>
                <p>Price: $50.000</p>
            </div>
        </div>

        <div class="related-cars-box">
            <p><b>MT Score</b> <span class="span1">8</span><span class="span2">/10</span></p>
            <a href="car_detail.html"><img src="corvette.png" alt=""></a>
            <div class="related-cars-text">
                <a href=""><h2>Corvette</h2></a>
                <p>Price: $50.000</p>
            </div>
        </div>

        <div class="related-cars-box">
            <p><b>MT Score</b> <span class="span1">8</span><span class="span2">/10</span></p>
            <a href="car_detail.html"><img src="corvette.png" alt=""></a>
            <div class="related-cars-text">
                <a href=""><h2>Corvette</h2></a>
                <p>Price: $50.000</p>
            </div>
        </div>
    </div>
</section>
<!------- End same category ------->



@include('client.partials.footer')
