@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<div class="_3QBNF">
    <section class="ar1Tt">
        <div class="_2Npmi _16irY">
            <div class="_2gTju">
                <h1 class="_3GY2o">Compare Cars Side-by-Side</h1>
            </div>
            <div class="_3JVXT">
                {{-- -------------------------- Start Column 1 -------------------------- --}}
                <div class="_3N7xD">
                    <div class="nezKb" id="carDetails1">
                        <div class="_1nUqL">
                            <!-- Car name, slug -->
                            <div>
                                <a class="F23fs" href="">
                                    <h3 class="_1YVTl" data-c="link">Car name</h3>
                                </a>
                            </div>
                            <div class="_3-Ngj"><span></span><span></span><span></span></div>
                        </div>
                        <!-- Car image, slug -->
                        <div>
                            <div class="_1BAwM">
                                <a class="F32aF" href="">
                                    <img src="car image path" alt="" width="875" height="220"
                                        class="_3sDNq">
                                </a>
                            </div>
                            <div class="_3q3BO">
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>MSRP</h3>
                                    </div>
                                    <div class="_1oPDF">
                                        <span>

                                        </span>
                                    </div>
                                </div>
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>TRIM</h3>
                                    </div>
                                    <div class="_1IHO3"></div>
                                </div>

                                <!-- MPG & Horsepower -->
                                <div class="_3qbtt">
                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>MPG</h3>
                                        </div>
                                        <div class="_1oSFG"></div>
                                    </div>

                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>HORSEPOWER</h3>
                                        </div>
                                        <div class="_1r6Hs">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="DkjGx" href="" data-c="link">See Full</a>
                    </div>
                </div>

                <div class="_3vbjm">
                    <div class="_3fstS">Add Vehicle</div>
                    <form class="_2iyl_" action="/" target="_top">
                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Make">
                                <select class="RxvJH" id="Car Make" aria-label="Car Make">
                                    <option disabled="" selected>Make</option>
                                    @if (!empty($allBrands))
                                        @foreach ($allBrands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Category">
                                <select class="RxvJH" id="Car Category" disabled="" aria-label="Car Category">
                                    <option disabled="" selected>Category</option>
                                    @if (!empty($allCategories))
                                        @foreach ($allCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Model">
                                <select class="RxvJH" id="Car Model" disabled="" aria-label="Car Model">
                                    <option disabled="">Model</option>

                                </select>
                            </label>
                        </div>
                        @csrf
                        <div class="_2US6W">
                            <button type="button" class="A8zWh" aria-label="Clear Add Vehicle Form">Clear</button>
                            <button type="button" class="_1_ts0 _3QU5r" aria-label="Add Vehicle">Add</button>
                        </div>
                    </form>
                </div>
                {{-- -------------------------- End Column 1 -------------------------- --}}



                {{-- -------------------------- Start Column 2 -------------------------- --}}
                <div class="_3N7xD">
                    <div class="nezKb" id="carDetails2">
                        <div class="_1nUqL">
                            <!-- Car name, slug -->
                            <div>
                                <a class="F23fs" href="">
                                    <h3 class="_1YVTl" data-c="link">Car name</h3>
                                </a>
                            </div>
                            <div class="_3-Ngj"><span></span><span></span><span></span></div>
                        </div>
                        <!-- Car image, slug -->
                        <div>
                            <div class="_1BAwM">
                                <a class="F32aF" href="">
                                    <img src="car image path" alt="" width="875" height="220"
                                        class="_3sDNq">
                                </a>
                            </div>
                            <div class="_3q3BO">
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>MSRP</h3>
                                    </div>
                                    <div class="_1oPDF">
                                        <span>

                                        </span>
                                    </div>
                                </div>
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>TRIM</h3>
                                    </div>
                                    <div class="_1IHO3"></div>
                                </div>

                                <!-- MPG & Horsepower -->
                                <div class="_3qbtt">
                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>MPG</h3>
                                        </div>
                                        <div class="_1oSFG"></div>
                                    </div>

                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>HORSEPOWER</h3>
                                        </div>
                                        <div class="_1r6Hs">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="DkjGx" href="" data-c="link">See Full</a>
                    </div>
                </div>

                <div class="_3vbjm">
                    <div class="_3fstS">Add Vehicle</div>
                    <form class="_2iyl_" action="/" target="_top">
                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Make">
                                <select class="RxvJH" id="Car Make" aria-label="Car Make">
                                    <option disabled="" selected>Make</option>
                                    @if (!empty($allBrands))
                                        @foreach ($allBrands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Category">
                                <select class="RxvJH" id="Car Category" disabled="" aria-label="Car Category">
                                    <option disabled="" selected>Category</option>
                                    @if (!empty($allCategories))
                                        @foreach ($allCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Model">
                                <select class="RxvJH" id="Car Model" disabled="" aria-label="Car Model">
                                    <option disabled="">Model</option>

                                </select>
                            </label>
                        </div>

                        <div class="_2US6W">
                            <button type="button" class="A8zWh" aria-label="Clear Add Vehicle Form">Clear</button>
                            <button type="button" class="_1_ts0 _3QU5r" aria-label="Add Vehicle">Add</button>
                        </div>
                    </form>
                </div>
                {{-- -------------------------- End Column 2 -------------------------- --}}



                {{-- -------------------------- Start Column 3 -------------------------- --}}
                <div class="_3N7xD">
                    <div class="nezKb" id="carDetails3">
                        <div class="_1nUqL">
                            <!-- Car name, slug -->
                            <div>
                                <a class="F23fs" href="">
                                    <h3 class="_1YVTl" data-c="link">Car name</h3>
                                </a>
                            </div>
                            <div class="_3-Ngj"><span></span><span></span><span></span></div>
                        </div>
                        <!-- Car image, slug -->
                        <div>
                            <div class="_1BAwM">
                                <a class="F32aF" href="">
                                    <img src="car image path" alt="" width="875" height="220"
                                        class="_3sDNq">
                                </a>
                            </div>
                            <div class="_3q3BO">
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>MSRP</h3>
                                    </div>
                                    <div class="_1oPDF">
                                        <span>

                                        </span>
                                    </div>
                                </div>
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>TRIM</h3>
                                    </div>
                                    <div class="_1IHO3"></div>
                                </div>

                                <!-- MPG & Horsepower -->
                                <div class="_3qbtt">
                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>MPG</h3>
                                        </div>
                                        <div class="_1oSFG"></div>
                                    </div>

                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>HORSEPOWER</h3>
                                        </div>
                                        <div class="_1r6Hs">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="DkjGx" href="" data-c="link">See Full</a>
                    </div>
                </div>

                <div class="_3vbjm">
                    <div class="_3fstS">Add Vehicle</div>
                    <form class="_2iyl_" action="/" target="_top">
                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Make">
                                <select class="RxvJH" id="Car Make" aria-label="Car Make">
                                    <option disabled="" selected>Make</option>
                                    @if (!empty($allBrands))
                                        @foreach ($allBrands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Category">
                                <select class="RxvJH" id="Car Category" disabled="" aria-label="Car Category">
                                    <option disabled="" selected>Category</option>
                                    @if (!empty($allCategories))
                                        @foreach ($allCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_1aCSg">
                            <label class="RxvJH" for="Car Model">
                                <select class="RxvJH" id="Car Model" disabled="" aria-label="Car Model">
                                    <option disabled="">Model</option>

                                </select>
                            </label>
                        </div>

                        <div class="_2US6W">
                            <button type="button" class="A8zWh" aria-label="Clear Add Vehicle Form">Clear</button>
                            <button type="button" class="_1_ts0 _3QU5r" aria-label="Add Vehicle">Add</button>
                        </div>
                    </form>
                </div>
                {{-- -------------------------- End Column 3 -------------------------- --}}
            </div>

            <div>
                <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">Pricing</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        {{-- -------------------------- Start Column 1 -------------------------- --}}
                        <div class="_3JVXT">
                            <div class="DS3K24">
                                <div class="_3aAxO">
                                    <div class="RPY4b">
                                        <div class="GvFPg">MSRP:</div>
                                        <div class="msrp1">

                                        </div>
                                    </div>
                                    <div class="RPY4b">
                                        <div class="GvFPg">Fair Market Price:</div>
                                        <div class="fair_market_price1">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------------------- Start Column 2 -------------------------- --}}
                            <div class="DS3K24">
                                <div class="_3aAxO">
                                    <div class="RPY4b">
                                        <div class="GvFPg">MSRP:</div>
                                        <div class="msrp2">

                                        </div>
                                    </div>
                                    <div class="RPY4b">
                                        <div class="GvFPg">Fair Market Price:</div>
                                        <div class="fair_market_price2">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------------------- Start Column 3 -------------------------- --}}
                            <div class="DS3K24">
                                <div class="_3aAxO">
                                    <div class="RPY4b">
                                        <div class="GvFPg">MSRP:</div>
                                        <div class="msrp3">

                                        </div>
                                    </div>
                                    <div class="RPY4b">
                                        <div class="GvFPg">Fair Market Price:</div>
                                        <div class="fair_market_price3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">MT Score</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        <div class="_3JVXT">
                            {{-- -------------------------- Start Column 1 -------------------------- --}}
                            <div class="DS3K24 mt_score1">
                                <div class="_2_q4f">
                                    <div class="UScrH">
                                        <div>MT Score</div>
                                    </div>
                                    <div class="_2Jhuh">
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Performance</div>
                                            <div class="performance">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Efficiency/Range</div>
                                            <div class="efficiency_range">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Tech/Innovation</div>
                                            <div class="tech_innovation">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Value</div>
                                            <div class="value">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2LbeO">
                                        <div>Overall Score:</div>
                                        <div class="overall_score"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------------------- Start Column 2 -------------------------- --}}
                            <div class="DS3K24 mt_score2">
                                <div class="_2_q4f">
                                    <div class="UScrH">
                                        <div>MT Score</div>
                                    </div>
                                    <div class="_2Jhuh">
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Performance</div>
                                            <div class="performance">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Efficiency/Range</div>
                                            <div class="efficiency_range">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Tech/Innovation</div>
                                            <div class="tech_innovation">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Value</div>
                                            <div class="value">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2LbeO">
                                        <div>Overall Score:</div>
                                        <div class="overall_score"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------------------- Start Column 3 -------------------------- --}}
                            <div class="DS3K24 mt_score3">
                                <div class="_2_q4f">
                                    <div class="UScrH">
                                        <div>MT Score</div>
                                    </div>
                                    <div class="_2Jhuh">
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Performance</div>
                                            <div class="performance">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Efficiency/Range</div>
                                            <div class="efficiency_range">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Tech/Innovation</div>
                                            <div class="tech_innovation">

                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Value</div>
                                            <div class="value">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2LbeO">
                                        <div>Overall Score:</div>
                                        <div class="overall_score"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">Specs</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        <div class="_3JVXT">
                            {{-- -------------------------- Start Column 1 -------------------------- --}}
                            <div class="DS3K24 specs1">
                                <div class="F4HWd">
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Length</div>
                                        <div class="length">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Width</div>
                                        <div class="width">
                                            {{-- {{$exterior->width != null ? $exterior->width : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Height</div>
                                        <div class="height">
                                            {{-- {{$exterior->height != null ? $exterior->height : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Wheelbase</div>
                                        <div class="wheelbase">
                                            {{-- {{$exterior->wheelbase != null ? $exterior->wheelbase : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Cargo Capacity</div>
                                        <div class="cargo_capacity">
                                            {{-- {{$weightCapacity->cargo_capacity != null ? $weightCapacity->cargo_capacity : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Fuel Capacity</div>
                                        <div class="feul_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Curb Weight</div>
                                        <div class="curb_weight">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Towing Capacity</div>
                                        <div class="towing_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">GVWR</div>
                                        <div class="gvwr">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Payload Capacity</div>
                                        <div class="payload_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Headroom</div>
                                        <div class="front_headroom">
                                            {{-- {{$interior->front_headroom != null ? $interior->front_headroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Headroom</div>
                                        <div class="rear_headroom">
                                            {{-- {{$interior->rear_headroom != null ? $interior->rear_headroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Legroom</div>
                                        <div class="front_legroom">
                                            {{-- {{$interior->front_legroom != null ? $interior->front_legroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Legroom</div>
                                        <div class="rear_legroom">
                                            {{-- {{$interior->rear_legroom != null ? $interior->rear_legroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Shoulder Room</div>
                                        <div class="front_shoulder_room">
                                            {{-- {{$interior->front_shoulder_room != null ? $interior->front_shoulder_room : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Shoulder Room</div>
                                        <div class="rear_shoulder_room">
                                            {{-- {{$interior->rear_shoulder_room != null ? $interior->rear_shoulder_room : 'N/A'}} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------------------- Start Column 2 -------------------------- --}}
                            <div class="DS3K24 specs2">
                                <div class="F4HWd">
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Length</div>
                                        <div class="length">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Width</div>
                                        <div class="width">
                                            {{-- {{$exterior->width != null ? $exterior->width : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Height</div>
                                        <div class="height">
                                            {{-- {{$exterior->height != null ? $exterior->height : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Wheelbase</div>
                                        <div class="wheelbase">
                                            {{-- {{$exterior->wheelbase != null ? $exterior->wheelbase : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Cargo Capacity</div>
                                        <div class="cargo_capacity">
                                            {{-- {{$weightCapacity->cargo_capacity != null ? $weightCapacity->cargo_capacity : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Fuel Capacity</div>
                                        <div class="feul_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Curb Weight</div>
                                        <div class="curb_weight">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Towing Capacity</div>
                                        <div class="towing_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">GVWR</div>
                                        <div class="gvwr">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Payload Capacity</div>
                                        <div class="payload_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Headroom</div>
                                        <div class="front_headroom">
                                            {{-- {{$interior->front_headroom != null ? $interior->front_headroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Headroom</div>
                                        <div class="rear_headroom">
                                            {{-- {{$interior->rear_headroom != null ? $interior->rear_headroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Legroom</div>
                                        <div class="front_legroom">
                                            {{-- {{$interior->front_legroom != null ? $interior->front_legroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Legroom</div>
                                        <div class="rear_legroom">
                                            {{-- {{$interior->rear_legroom != null ? $interior->rear_legroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Shoulder Room</div>
                                        <div class="front_shoulder_room">
                                            {{-- {{$interior->front_shoulder_room != null ? $interior->front_shoulder_room : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Shoulder Room</div>
                                        <div class="rear_shoulder_room">
                                            {{-- {{$interior->rear_shoulder_room != null ? $interior->rear_shoulder_room : 'N/A'}} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------------------- Start Column 3 -------------------------- --}}
                            <div class="DS3K24 specs3">
                                <div class="F4HWd">
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Length</div>
                                        <div class="length">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Width</div>
                                        <div class="width">
                                            {{-- {{$exterior->width != null ? $exterior->width : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Height</div>
                                        <div class="height">
                                            {{-- {{$exterior->height != null ? $exterior->height : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Wheelbase</div>
                                        <div class="wheelbase">
                                            {{-- {{$exterior->wheelbase != null ? $exterior->wheelbase : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Cargo Capacity</div>
                                        <div class="cargo_capacity">
                                            {{-- {{$weightCapacity->cargo_capacity != null ? $weightCapacity->cargo_capacity : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Fuel Capacity</div>
                                        <div class="feul_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Curb Weight</div>
                                        <div class="curb_weight">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Towing Capacity</div>
                                        <div class="towing_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">GVWR</div>
                                        <div class="gvwr">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Payload Capacity</div>
                                        <div class="payload_capacity">

                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Headroom</div>
                                        <div class="front_headroom">
                                            {{-- {{$interior->front_headroom != null ? $interior->front_headroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Headroom</div>
                                        <div class="rear_headroom">
                                            {{-- {{$interior->rear_headroom != null ? $interior->rear_headroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Legroom</div>
                                        <div class="front_legroom">
                                            {{-- {{$interior->front_legroom != null ? $interior->front_legroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Legroom</div>
                                        <div class="rear_legroom">
                                            {{-- {{$interior->rear_legroom != null ? $interior->rear_legroom : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Shoulder Room</div>
                                        <div class="front_shoulder_room">
                                            {{-- {{$interior->front_shoulder_room != null ? $interior->front_shoulder_room : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Shoulder Room</div>
                                        <div class="rear_shoulder_room">
                                            {{-- {{$interior->rear_shoulder_room != null ? $interior->rear_shoulder_room : 'N/A'}} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">Power/MPG</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        <div class="_3JVXT">
                            {{-- -------------------------- Start Column 1 -------------------------- --}}
                            <div class="DS3K24 power_mpg1">
                                <div class="_4fwt3">
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Engine Name</div>
                                        <div class="engine">
                                            {{-- {{$performance->engine != null ? $performance->engine : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Horsepower</div>
                                        <div class="horsepower">
                                            {{-- {{$performance->horsepower != null ? $performance->horsepower : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Torque</div>
                                        <div class="torque">
                                            {{-- {{$performance->torque != null ? $performance->torque : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Transmission</div>
                                        <div class="tranmission">
                                            {{-- {{$performance->tranmission != null ? $performance->tranmission : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Transmission Type</div>
                                        <div class="tranmission_type">
                                            {{-- {{$performance->tranmission_type != null ? $performance->tranmission_type : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Number of Cylinders</div>
                                        <div class="cylinders">
                                            {{-- {{$performance->cylinders != null ? $performance->cylinders : 'N/A'}} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------------------- Start Column 2 -------------------------- --}}
                            <div class="DS3K24 power_mpg2">
                                <div class="_4fwt3">
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Engine Name</div>
                                        <div class="engine">
                                            {{-- {{$performance->engine != null ? $performance->engine : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Horsepower</div>
                                        <div class="horsepower">
                                            {{-- {{$performance->horsepower != null ? $performance->horsepower : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Torque</div>
                                        <div class="torque">
                                            {{-- {{$performance->torque != null ? $performance->torque : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Transmission</div>
                                        <div class="tranmission">
                                            {{-- {{$performance->tranmission != null ? $performance->tranmission : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Transmission Type</div>
                                        <div class="tranmission_type">
                                            {{-- {{$performance->tranmission_type != null ? $performance->tranmission_type : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Number of Cylinders</div>
                                        <div class="cylinders">
                                            {{-- {{$performance->cylinders != null ? $performance->cylinders : 'N/A'}} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- -------------------------- Start Column 3 -------------------------- --}}
                            <div class="DS3K24 power_mpg3">
                                <div class="_4fwt3">
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Engine Name</div>
                                        <div class="engine">
                                            {{-- {{$performance->engine != null ? $performance->engine : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Horsepower</div>
                                        <div class="horsepower">
                                            {{-- {{$performance->horsepower != null ? $performance->horsepower : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Torque</div>
                                        <div class="torque">
                                            {{-- {{$performance->torque != null ? $performance->torque : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Transmission</div>
                                        <div class="tranmission">
                                            {{-- {{$performance->tranmission != null ? $performance->tranmission : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Transmission Type</div>
                                        <div class="tranmission_type">
                                            {{-- {{$performance->tranmission_type != null ? $performance->tranmission_type : 'N/A'}} --}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Number of Cylinders</div>
                                        <div class="cylinders">
                                            {{-- {{$performance->cylinders != null ? $performance->cylinders : 'N/A'}} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">Warranty</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        <div class="_3JVXT">
                            <div class="_3N7xD">
                                <div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Corrosion Warranty Miles</div>
                                        <div class="_3xILm">{{$warranty->corrosion_warranty_miles}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Corrosion Warranty Months</div>
                                        <div class="_3xILm">{{$warranty->corrosion_warranty_months}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Full Warranty Miles</div>
                                        <div class="_3xILm">{{$warranty->full_warranty_miles}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Full Warranty Months</div>
                                        <div class="_3xILm">{{$warranty->full_warranty_month}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Free Maintenance, Miles</div>
                                        <div class="_3xILm">{{$warranty->free_maintenance_miles}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Free Maintenance, Months</div>
                                        <div class="_3xILm">{{$warranty->free_maintenance_months}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Powertrain Warranty Miles</div>
                                        <div class="_3xILm">{{$warranty->powertrain_warranty_miles}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Powertrain Warranty Months</div>
                                        <div class="_3xILm">{{$warranty->powertrain_warranty_months}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Roadside Warranty Miles</div>
                                        <div class="_3xILm">{{$warranty->roadside_warranty_miles}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Roadside Warranty Months</div>
                                        <div class="_3xILm">{{$warranty->roadside_warranty_months}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">Safety</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        <div class="_3JVXT">
                            <div class="_3N7xD">
                                <div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">IIHS Best Pick</div>
                                        <div class="_3xILm">{{$safety->IIHS_best_pick}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">IIHS Front Small Overlap</div>
                                        <div class="_3xILm">
                                            {{$safety->IIHS_front_small_overlap != null ? $safety->IIHS_front_small_overlap : 'N/R'}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">IIHS Rear Crash</div>
                                        <div class="_3xILm">{{$safety->IIHS_rear_crash != null ? $safety->IIHS_rear_crash : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">NHTSA Rating Front Driver</div>
                                        <div class="_3xILm">{{$safety->IIHS_rating_front_driver != null ? $safety->IIHS_rating_front_driver : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">NHTSA Rating Front Side</div>
                                        <div class="_3xILm">{{$safety->IIHS_rating_front_side != null ? $safety->IIHS_rating_front_side : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">NHTSA Rating Rear Side</div>
                                        <div class="_3xILm">{{$safety->IIHS_rating_rear_side != null ? $safety->IIHS_rating_rear_side : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">IIHS Front Moderate Overlap</div>
                                        <div class="_3xILm">{{$safety->IIHS_front_moderate_overlap != null ? $safety->IIHS_front_moderate_overlap : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div clas`s="_2NjGi">IIHS Overall Side Crash</div>
                                        <div class="_3xILm">{{$safety->IIHS_overall_side_crash != null ? $safety->IIHS_overall_side_crash : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">IIHS Roof Strength</div>
                                        <div class="_3xILm">{{$safety->IIHS_roof_strength != null ? $safety->IIHS_roof_strength : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">NHTSA Rating Front Passenger</div>
                                        <div class="_3xILm">{{$safety->NHTSA_rating_front_passenger != null ? $safety->NHTSA_rating_front_passenger : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">NHTSA Rating Overall</div>
                                        <div class="_3xILm">{{$safety->NHTSA_rating_overall != null ? $safety->NHTSA_rating_overall : 'N/R'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">NHTSA Rating Rollover</div>
                                        <div class="_3xILm">{{$safety->NHTSA_rating_rollover != null ? $safety->NHTSA_rating_rollover : 'N/R'}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Helper function to toggle visibility of an element
        function toggleVisibility(element, isVisible, maxHeight = "125rem") {
            element.style.maxHeight = isVisible ? maxHeight : "0";
            element.style.opacity = isVisible ? "1" : "0";
        }

        // Toggle info section
        function toggleInfoSection(button, infoSection) {
            const newDiv = infoSection.querySelector('._3N7xD');
            if (infoSection.classList.contains('_1gEO9')) {
                infoSection.classList.remove('_1gEO9');
                toggleVisibility(infoSection, true);
                newDiv.style.display = 'block';
            } else {
                infoSection.classList.add('_1gEO9');
                toggleVisibility(infoSection, false);
                newDiv.style.display = 'none';
            }
        }

        // Add event listeners for "Pricing, Specs, MT-Score,..." buttons
        function setupButtons() {
            const buttons = document.querySelectorAll('._3D37-');
            const infoSections = document.querySelectorAll('._3RBPn');

            buttons.forEach((button, index) => {
                button.addEventListener('click', () => toggleInfoSection(button, infoSections[index]));
            });
        }

        // Fetch car models based on selected brand make and category
        function fetchCarModels(carMakeSelect, carCategorySelect, carModelSelect) {
            const brandId = carMakeSelect.value;
            const categoryId = carCategorySelect.value;

            fetch(`/api/cars?brandID=${brandId}&categoryID=${categoryId}`)
                .then(response => response.json())
                .then(cars => {
                    carModelSelect.innerHTML = '<option disabled selected>Model</option>';
                    console.log(cars);
                    cars.forEach(car => {
                        const option = document.createElement('option');
                        option.value = car.id;
                        option.textContent = car.name;
                        carModelSelect.appendChild(option);
                    });
                    carModelSelect.removeAttribute('disabled');
                })
                .catch(error => console.error('Error fetching cars:', error));
        }

        // Fetch car details and update UI
        function fetchCarDetailsAndUpdateUI(carId, columnIndex) {
            console.log(`Fetching details for carId: ${carId}`);
            fetch('/api/car', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        id: carId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Car details:', data);
                    let car = data.car;
                    let performance = data.performance;
                    let interior = data.interior;
                    let review = data.review;
                    let exterior = data.exterior;
                    let weightCapacity = data.weightCapacity;
                    let warranty = data.warranty;
                    let safety = data.safety;

                    /////////////////// Pricing Button ///////////////////
                    const msrpElement = document.querySelector(`.msrp${columnIndex}`);
                    const fairMarketPriceElement = document.querySelector(`.fair_market_price${columnIndex}`);

                    msrpElement.textContent = car.msrp == null ? 'N/A' : `$${car.msrp.toLocaleString()}`;
                    fairMarketPriceElement.textContent = car.fair_market_price == null ? 'N/A' : `$${car.fair_market_price.toLocaleString()}`;
                    /////////////////// Pricing Button ///////////////////


                    /////////////////// Column Car Info ///////////////////
                    const infoSection = document.querySelector(`#carDetails${columnIndex}`);
                    infoSection.querySelector('._1YVTl').textContent = car.name;
                    infoSection.querySelector('._1BAwM img').setAttribute('src', `/images/cars/${car.avatar}`);
                    infoSection.querySelector('.F23fs').setAttribute('href', `/car/${car.slug}`);
                    infoSection.querySelector('.F32aF').setAttribute('href', `/car/${car.slug}`);
                    infoSection.querySelector('.DkjGx').setAttribute('href', `/car/${car.slug}`);

                    infoSection.querySelector('._1oPDF span').textContent = car.msrp != 0 ? `$${car.msrp.toLocaleString()}` : 'N/A';

                    // MPG & Horsepower 
                    infoSection.querySelector('._1IHO3').textContent = performance.trim == null ? 'N/A' : performance.trim;
                    infoSection.querySelector('._1oSFG').textContent = performance.standard_mpg == null ? 'N/A' : performance.standard_mpg;
                    // Tách giá trị horsepower và gán vào phần tử
                    if (performance.horsepower) {
                        let horsepowerDetails = performance.horsepower.split('@');
                        infoSection.querySelector('._1r6Hs').textContent = horsepowerDetails[0];
                    } else {
                        infoSection.querySelector('._1r6Hs').textContent = 'N/A';
                    }
                    /////////////////// Column Car Info ///////////////////


                    /////////////////// MT Score Button ///////////////////
                    const infoMTScoreSection = document.querySelector(`.mt_score${columnIndex}`);
                    if (review == null)
                    {
                        infoMTScoreSection.querySelector('.performance').textContent = 'N/A';
                        infoMTScoreSection.querySelector('.efficiency_range').textContent = 'N/A';
                        infoMTScoreSection.querySelector('.tech_innovation').textContent = 'N/A';
                        infoMTScoreSection.querySelector('.value').textContent = 'N/A';
                        infoMTScoreSection.querySelector('.overall_score').textContent = 'N/A';
                        
                    }
                    else{
                        infoMTScoreSection.querySelector('.performance').textContent = review.performance == null ? '0/10' : `${review.performance}/10`;
                        infoMTScoreSection.querySelector('.efficiency_range').textContent = review.efficency_range == null ? '0/10' : `${review.efficency_range}/10`;
                        infoMTScoreSection.querySelector('.tech_innovation').textContent = review.tech_innovation == null ? '0/10' : `${review.tech_innovation}/10`;
                        infoMTScoreSection.querySelector('.value').textContent = review.value == null ? '0/10' : `${review.value}/10`;
                        let overall = (review.performance + review.efficency_range + review.tech_innovation + review.value) / 4; 
                        infoMTScoreSection.querySelector('.overall_score').textContent = `${overall}/10`;
                    }
                    /////////////////// MT Score Button ///////////////////


                    /////////////////// Specs Button ///////////////////
                    const infoSpecsSection = document.querySelector(`.specs${columnIndex}`);
                    if (exterior == null){
                        infoSpecsSection.querySelector('.length').textContent = 'N/A';
                        infoSpecsSection.querySelector('.width').textContent = 'N/A';
                        infoSpecsSection.querySelector('.height').textContent = 'N/A';
                        infoSpecsSection.querySelector('.wheelbase').textContent = 'N/A';
                    }
                    else{
                        infoSpecsSection.querySelector('.length').textContent = isNullOrEmpty(exterior.length) ? 'N/A' : exterior.length;
                        infoSpecsSection.querySelector('.width').textContent = isNullOrEmpty(exterior.width) ? 'N/A' : exterior.width;
                        infoSpecsSection.querySelector('.height').textContent = isNullOrEmpty(exterior.height) ? 'N/A' : exterior.height;
                        infoSpecsSection.querySelector('.wheelbase').textContent = isNullOrEmpty(exterior.wheelbase) ? 'N/A' : exterior.wheelbase;
                    }

                    if (weightCapacity == null){
                        infoSpecsSection.querySelector('.cargo_capacity').textContent = 'N/A';
                        infoSpecsSection.querySelector('.feul_capacity').textContent = 'N/A';
                        infoSpecsSection.querySelector('.curb_weight').textContent = 'N/A';
                        infoSpecsSection.querySelector('.towing_capacity').textContent = 'N/A';
                        infoSpecsSection.querySelector('.gvwr').textContent = 'N/A';
                        infoSpecsSection.querySelector('.payload_capacity').textContent = 'N/A';
                    }
                    else{
                        infoSpecsSection.querySelector('.cargo_capacity').textContent = isNullOrEmpty(weightCapacity.cargo_capacity) ? 'N/A' : weightCapacity.cargo_capacity;
                        infoSpecsSection.querySelector('.feul_capacity').textContent = isNullOrEmpty(weightCapacity.feul_capacity) ? 'N/A' : weightCapacity.feul_capacity;
                        infoSpecsSection.querySelector('.curb_weight').textContent = isNullOrEmpty(weightCapacity.curb_weight) ? 'N/A' : weightCapacity.curb_weight;
                        infoSpecsSection.querySelector('.towing_capacity').textContent = isNullOrEmpty(weightCapacity.towing_capacity) ? 'N/A' : weightCapacity.towing_capacity;
                        infoSpecsSection.querySelector('.gvwr').textContent = isNullOrEmpty(weightCapacity.gvwr) ? 'N/A' : weightCapacity.gvwr;
                        infoSpecsSection.querySelector('.payload_capacity').textContent = isNullOrEmpty(weightCapacity.payload_capacity) ? 'N/A' : weightCapacity.payload_capacity;
                    }

                    if (interior == null)
                    {
                        infoSpecsSection.querySelector('.front_headroom').textContent = 'N/A';
                        infoSpecsSection.querySelector('.rear_headroom').textContent = 'N/A';
                        infoSpecsSection.querySelector('.front_legroom').textContent = 'N/A';
                        infoSpecsSection.querySelector('.rear_legroom').textContent = 'N/A';
                        infoSpecsSection.querySelector('.front_shoulder_room').textContent = 'N/A';
                        infoSpecsSection.querySelector('.rear_shoulder_room').textContent = 'N/A';
                    }
                    else{
                        infoSpecsSection.querySelector('.front_headroom').textContent = isNullOrEmpty(interior.front_headroom) ? 'N/A' : interior.front_headroom;
                        infoSpecsSection.querySelector('.rear_headroom').textContent = isNullOrEmpty(interior.rear_headroom) ? 'N/A' : interior.rear_headroom;
                        infoSpecsSection.querySelector('.front_legroom').textContent = isNullOrEmpty(interior.front_legroom) ? 'N/A' : interior.front_legroom;
                        infoSpecsSection.querySelector('.rear_legroom').textContent = isNullOrEmpty(interior.rear_legroom) ? 'N/A' : interior.rear_legroom;
                        infoSpecsSection.querySelector('.front_shoulder_room').textContent = isNullOrEmpty(interior.front_shoulder_room) ? 'N/A' : interior.front_shoulder_room;
                        infoSpecsSection.querySelector('.rear_shoulder_room').textContent = isNullOrEmpty(interior.rear_shoulder_room) ? 'N/A' : interior.rear_shoulder_room;
                    }
                    /////////////////// Specs Button ///////////////////

                    
                    /////////////////// Power/MPG Button ///////////////////
                    const infoPower_MPGSection = document.querySelector(`.power_mpg${columnIndex}`);
                    if (performance == null){
                        infoPower_MPGSection.querySelector('.engine').textContent = 'N/A';
                        infoPower_MPGSection.querySelector('.horsepower').textContent = 'N/A';
                        infoPower_MPGSection.querySelector('.torque').textContent = 'N/A';
                        infoPower_MPGSection.querySelector('.tranmission').textContent = 'N/A';
                        infoPower_MPGSection.querySelector('.tranmission_type').textContent = 'N/A';
                        infoPower_MPGSection.querySelector('.cylinders').textContent = 'N/A';
                    }
                    else{
                        infoPower_MPGSection.querySelector('.engine').textContent = isNullOrEmpty(performance.engine) ? 'N/A' : performance.engine;
                        infoPower_MPGSection.querySelector('.horsepower').textContent = isNullOrEmpty(performance.horsepower) ? 'N/A' : performance.horsepower;
                        infoPower_MPGSection.querySelector('.torque').textContent = isNullOrEmpty(performance.torque) ? 'N/A' : performance.torque;
                        infoPower_MPGSection.querySelector('.tranmission').textContent = isNullOrEmpty(performance.tranmission) ? 'N/A' : performance.tranmission;
                        infoPower_MPGSection.querySelector('.tranmission_type').textContent = isNullOrEmpty(performance.tranmission_type) ? 'N/A' : performance.tranmission_type;
                        infoPower_MPGSection.querySelector('.cylinders').textContent = isNullOrEmpty(performance.cylinders) ? 'N/A' : performance.cylinders;                    
                    }
                    /////////////////// Power/MPG Button ///////////////////

                })
                .catch(error => console.error('Error fetching car details:', error));
        }

        function isNullOrEmpty(value) {
            return value === null || value === undefined || value === '';
        }

        // Clear form selections and reset form
        function clearFormSelections(formDiv, addButton) {
            const carMakeSelect = formDiv.querySelector('#Car\\ Make');
            const carCategorySelect = formDiv.querySelector('#Car\\ Category');
            const carModelSelect = formDiv.querySelector('#Car\\ Model');

            carMakeSelect.selectedIndex = 0;
            carCategorySelect.selectedIndex = 0;
            carModelSelect.selectedIndex = 0;
            carCategorySelect.setAttribute('disabled', '');
            carModelSelect.setAttribute('disabled', '');
            carModelSelect.innerHTML = '<option disabled selected>Model</option>';
            addButton.classList.remove('button-enable');
        }

        // Add event listeners for "Add Vehicle" buttons
        function setupAddVehicleButtons() {
            const addButtons = document.querySelectorAll('button[aria-label="Add Vehicle"]');
            const infoSections = document.querySelectorAll('._3RBPn');

            addButtons.forEach((addButton, index) => {
                const formDiv = document.querySelectorAll('div._3vbjm')[index];
                const newDiv = document.querySelectorAll('div._3N7xD')[index];

                addButton.addEventListener('click', function() {
                    const carModelSelect = formDiv.querySelector('#Car\\ Model');
                    const carId = carModelSelect.value;

                    if (carId && newDiv && formDiv) {
                        formDiv.style.display = 'none';
                        newDiv.style.display = 'block';

                        const infoSection = infoSections[index];
                        infoSection.classList.remove('_1gEO9');
                        toggleVisibility(infoSection, true);

                        // Fetch car details and update the UI
                        fetchCarDetailsAndUpdateUI(carId, index + 1);
                    }
                });

                const carMakeSelect = formDiv.querySelector('#Car\\ Make');
                const carCategorySelect = formDiv.querySelector('#Car\\ Category');
                const carModelSelect = formDiv.querySelector('#Car\\ Model');
                const clearButton = formDiv.querySelector(
                    'button[aria-label="Clear Add Vehicle Form"]');

                carMakeSelect.addEventListener('change', function() {
                    if (carMakeSelect.value) {
                        carCategorySelect.removeAttribute('disabled');
                    } else {
                        carCategorySelect.setAttribute('disabled', '');
                        carModelSelect.setAttribute('disabled', '');
                        carModelSelect.innerHTML =
                            '<option disabled selected>Model</option>';
                        addButton.classList.remove('button-enable');
                    }
                });

                carCategorySelect.addEventListener('change', function() {
                    if (carCategorySelect.value) {
                        fetchCarModels(carMakeSelect, carCategorySelect, carModelSelect);
                    } else {
                        carModelSelect.setAttribute('disabled', '');
                        carModelSelect.innerHTML =
                            '<option disabled selected>Model</option>';
                        addButton.classList.remove('button-enable');
                    }
                });

                carModelSelect.addEventListener('change', function() {
                    if (carModelSelect.value) {
                        addButton.classList.add('button-enable');
                    } else {
                        addButton.classList.remove('button-enable');
                    }
                });

                clearButton.addEventListener('click', function() {
                    clearFormSelections(formDiv, addButton);
                });
            });
        }

        // Initialize all event listeners
        setupButtons();
        setupAddVehicleButtons();
    });
</script>

@include('client.partials.footer')
