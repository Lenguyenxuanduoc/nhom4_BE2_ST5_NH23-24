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
                {{---------------------------- Column 1 ----------------------------}}
                <div class="_3N7xD">
                    <div class="nezKb">
                        <div class="_1nUqL">
                            <!-- Car name, slug -->
                            <div>
                                {{-- <h3 class="_1YVTl" href="" data-c="link">{{ $car->name }}</h3> --}}
                            </div>
                            <div class="_3-Ngj"><span></span><span></span><span></span></div>
                        </div>
                        <!-- Car image, slug -->
                        <div>
                            <a href="" data-c="link">
                                <div class="_1BAwM">
                                    <img src="" alt=""
                                        width="875" height="220" class="_3sDNq">
                                </div>
                            </a>
                            <div class="_3q3BO">
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>MSRP</h3>
                                    </div>
                                    <div class="_1oPDF">
                                        <span>
                                            {{-- @if ($car->msrp != 0)
                                                ${{ number_format($car->msrp, 0, ',', '.') }}
                                            @else
                                                Coming soon
                                            @endif --}}
                                        </span>
                                    </div>
                                </div>
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>TRIM</h3>
                                    </div>
                                    {{-- <div class="_1oPDF">{{ $performance->trim }}</div> --}}
                                </div>

                                <!-- MPG & Horsepower -->
                                <div class="_3qbtt">
                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>MPG</h3>
                                        </div>
                                        {{-- <div class="_1oPDF">{{ $performance->standard_mpg }}</div> --}}
                                    </div>

                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>HORSEPOWER</h3>
                                        </div>
                                        <div class="_1oPDF">
                                            {{-- @php
                                                $horsepower = explode('@', $performance->horsepower);
                                            @endphp
                                            {{ $horsepower[0] }} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><a class="DkjGx" href="" data-c="link">See Full</a>
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
                                    @if (!empty($cars))
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}">{{ $car->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_2US6W">
                            <button type="button" class="A8zWh" aria-label="Clear Add Vehicle Form">Clear</button>
                            <button type="button" class="_1_ts0 _3QU5r" aria-label="Add Vehicle">Add</button>
                        </div>
                    </form>
                </div>
                {{---------------------------- End Column 1 ----------------------------}}



                {{---------------------------- Start Column 2 ----------------------------}}
                <div class="_3N7xD">
                    <div class="nezKb">
                        <div class="_1nUqL">
                            <!-- Car name, slug -->
                            <div>
                                {{-- <h3 class="_1YVTl" href="" data-c="link">{{ $car->name }}</h3> --}}
                            </div>
                            <div class="_3-Ngj"><span></span><span></span><span></span></div>
                        </div>
                        <!-- Car image, slug -->
                        <div>
                            <a href="" data-c="link">
                                <div class="_1BAwM">
                                    <img src="" alt=""
                                        width="875" height="220" class="_3sDNq">
                                </div>
                            </a>
                            <div class="_3q3BO">
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>MSRP</h3>
                                    </div>
                                    <div class="_1oPDF">
                                        <span>
                                            {{-- @if ($car->msrp != 0)
                                                ${{ number_format($car->msrp, 0, ',', '.') }}
                                            @else
                                                Coming soon
                                            @endif --}}
                                        </span>
                                    </div>
                                </div>
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>TRIM</h3>
                                    </div>
                                    {{-- <div class="_1oPDF">{{ $performance->trim }}</div> --}}
                                </div>

                                <!-- MPG & Horsepower -->
                                <div class="_3qbtt">
                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>MPG</h3>
                                        </div>
                                        {{-- <div class="_1oPDF">{{ $performance->standard_mpg }}</div> --}}
                                    </div>

                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>HORSEPOWER</h3>
                                        </div>
                                        <div class="_1oPDF">
                                            {{-- @php
                                                $horsepower = explode('@', $performance->horsepower);
                                            @endphp
                                            {{ $horsepower[0] }} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><a class="DkjGx" href="" data-c="link">See Full</a>
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
                                    @if (!empty($cars))
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}">{{ $car->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_2US6W">
                            <button type="button" class="A8zWh" aria-label="Clear Add Vehicle Form">Clear</button>
                            <button type="button" class="_1_ts0 _3QU5r" aria-label="Add Vehicle">Add</button>
                        </div>
                    </form>
                </div>
                {{---------------------------- End Column 2 ----------------------------}}



                {{---------------------------- Start Column 3 ----------------------------}}
                <div class="_3N7xD">
                    <div class="nezKb">
                        <div class="_1nUqL">
                            <!-- Car name, slug -->
                            <div>
                                {{-- <h3 class="_1YVTl" href="" data-c="link">{{ $car->name }}</h3> --}}
                            </div>
                            <div class="_3-Ngj"><span></span><span></span><span></span></div>
                        </div>
                        <!-- Car image, slug -->
                        <div>
                            <a href="" data-c="link">
                                <div class="_1BAwM">
                                    <img src="" alt=""
                                        width="875" height="220" class="_3sDNq">
                                </div>
                            </a>
                            <div class="_3q3BO">
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>MSRP</h3>
                                    </div>
                                    <div class="_1oPDF">
                                        <span>
                                            {{-- @if ($car->msrp != 0)
                                                ${{ number_format($car->msrp, 0, ',', '.') }}
                                            @else
                                                Coming soon
                                            @endif --}}
                                        </span>
                                    </div>
                                </div>
                                <div class="_3M7NT">
                                    <div class="_6rtCZ">
                                        <h3>TRIM</h3>
                                    </div>
                                    {{-- <div class="_1oPDF">{{ $performance->trim }}</div> --}}
                                </div>

                                <!-- MPG & Horsepower -->
                                <div class="_3qbtt">
                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>MPG</h3>
                                        </div>
                                        {{-- <div class="_1oPDF">{{ $performance->standard_mpg }}</div> --}}
                                    </div>

                                    <div class="_1_83q">
                                        <div class="_6rtCZ">
                                            <h3>HORSEPOWER</h3>
                                        </div>
                                        <div class="_1oPDF">
                                            {{-- @php
                                                $horsepower = explode('@', $performance->horsepower);
                                            @endphp
                                            {{ $horsepower[0] }} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><a class="DkjGx" href="" data-c="link">See Full</a>
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
                                    @if (!empty($cars))
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}">{{ $car->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>

                        <div class="_2US6W">
                            <button type="button" class="A8zWh" aria-label="Clear Add Vehicle Form">Clear</button>
                            <button type="button" class="_1_ts0 _3QU5r" aria-label="Add Vehicle">Add</button>
                        </div>
                    </form>
                </div>
                {{---------------------------- End Column 3 ----------------------------}}
            </div>

            <div>
                <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">Pricing</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        <div class="_3JVXT">
                            <div class="_3N7xD">
                                <div class="_3aAxO">
                                    <div class="RPY4b">
                                        <div class="GvFPg">MSRP:</div>
                                        <div class="Dsgfa">
                                            {{-- @if ($car->msrp != 0)
                                                ${{ number_format($car->msrp, 0, ',', '.') }}
                                            @else
                                                Coming soon
                                            @endif --}}
                                        </div>
                                    </div>
                                    <div class="RPY4b">
                                        <div class="GvFPg">Fair Market Price:</div>
                                        <div class="Dsgfa">
                                            {{-- @if ($car->msrp != 0)
                                                ${{ number_format($car->fair_market_price, 0, ',', '.') }}
                                            @else
                                                Coming soon
                                            @endif --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="_3N7xD">
                                <div class="_3aAxO">
                                    <div class="RPY4b">
                                        <div class="GvFPg">MSRP:</div>
                                        <div class="Dsgfa">
                                            {{-- @if ($car->msrp != 0)
                                                ${{ number_format($car->msrp, 0, ',', '.') }}
                                            @else
                                                Coming soon
                                            @endif --}}
                                        </div>
                                    </div>
                                    <div class="RPY4b">
                                        <div class="GvFPg">Fair Market Price:</div>
                                        <div class="Dsgfa">
                                            {{-- @if ($car->msrp != 0)
                                                ${{ number_format($car->fair_market_price, 0, ',', '.') }}
                                            @else
                                                Coming soon
                                            @endif --}}
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
                            <div class="_3N7xD">
                                <div class="_2_q4f">
                                    <div class="UScrH">
                                        <div>MT Score</div>
                                    </div>
                                    <div class="_2Jhuh">
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Performance</div>
                                            <div class="Dsgfa">
                                                {{-- {{$review == null ? 0 : $review->performance}}/10 --}}
                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Efficiency/Range</div>
                                            <div class="Dsgfa">
                                                {{-- {{$review == null ? 0 : $review->efficency_range}}/10 --}}
                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Tech/Innovation</div>
                                            <div class="Dsgfa">
                                                {{-- {{$review == null ? 0 : $review->tech_innovation}}/10 --}}
                                            </div>
                                        </div>
                                        <div class="_3_zbb">
                                            <div class="_2l3_8">Value</div>
                                            <div class="Dsgfa">
                                                {{-- {{$review == null ? 0 : $review->value}}/10 --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2LbeO">
                                        <div>Overall Score:</div>
                                        {{-- <div>{{$mt_score}}/10</div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">Photos</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        <div class="_3JVXT">
                            <div class="_3sqPa">
                                <div class="Huq7H">
                                    {{-- Chuyển images từ json sang array --}}
                                    {{-- @php
                                        $images = json_decode($car->images);
                                    @endphp
                                    <button type="button" class="_2xZs_"><img src="{{asset('images/cars/'.$images[0])}}" class="_3ajq0"
                                            alt="Car Compare Image" width="875" height="220">
                                        <div class="_1uB6h">
                                            <div class="_33qTB">{{count($images)}} Photos</div>
                                        </div>
                                    </button> --}}
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
                            <div class="_3N7xD">
                                <div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Length</div>
                                        {{-- <div class="_3xILm">{{$exterior->length != null ? $exterior->length : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Width</div>
                                        {{-- <div class="_3xILm">{{$exterior->width != null ? $exterior->width : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Height</div>
                                        {{-- <div class="_3xILm">{{$exterior->height != null ? $exterior->height : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Wheelbase</div>
                                        {{-- <div class="_3xILm">{{$exterior->wheelbase != null ? $exterior->wheelbase : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Cargo Capacity</div>
                                        {{-- <div class="_3xILm">{{$weightCapacity->cargo_capacity != null ? $weightCapacity->cargo_capacity : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Headroom</div>
                                        {{-- <div class="_3xILm">{{$interior->front_headroom != null ? $interior->front_headroom : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Headroom</div>
                                        {{-- <div class="_3xILm">{{$interior->rear_headroom != null ? $interior->rear_headroom : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Legroom</div>
                                        {{-- <div class="_3xILm">{{$interior->front_legroom != null ? $interior->front_legroom : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Legroom</div>
                                        {{-- <div class="_3xILm">{{$interior->rear_legroom != null ? $interior->rear_legroom : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Front Shoulder Room</div>
                                        {{-- <div class="_3xILm">{{$interior->front_shoulder_room != null ? $interior->front_shoulder_room : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Rear Shoulder Room</div>
                                        {{-- <div class="_3xILm">{{$interior->rear_shoulder_room != null ? $interior->rear_shoulder_room : 'N/A'}}</div> --}}
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Curb Weight</div>
                                        {{-- <div class="_3xILm">{{$weightCapacity->curb_weight != null ? $weightCapacity->curb_weight : 'N/A'}}</div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div>
                    <button type="button" class="_3D37-">
                        <div class="_1htPG">Power/MPG</div>
                        <div class="_2Cq6o R_W5y"></div>
                    </button>
                    <hr>
                    <div class="_3RBPn _1gEO9">
                        <div class="_3JVXT">
                            <div class="_3N7xD">
                                <div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Engine Name</div>
                                        <div class="_3xILm">
                                            {{$performance->engine != null ? $performance->engine : 'N/A'}}
                                        </div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Horsepower</div>
                                        <div class="_3xILm">{{$performance->horsepower != null ? $performance->horsepower : 'N/A'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Torque</div>
                                        <div class="_3xILm">{{$performance->torque != null ? $performance->torque : 'N/A'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Transmission</div>
                                        <div class="_3xILm">{{$performance->tranmission != null ? $performance->tranmission : 'N/A'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Transmission Type</div>
                                        <div class="_3xILm">{{$performance->tranmission_type != null ? $performance->tranmission_type : 'N/A'}}</div>
                                    </div>
                                    <div class="_1dguk">
                                        <div class="_2NjGi">Number of Cylinders</div>
                                        <div class="_3xILm">{{$performance->cylinders != null ? $performance->cylinders : 'N/A'}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
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
                                        <div class="_2NjGi">IIHS Overall Side Crash</div>
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
        const buttons = document.querySelectorAll('._3D37-'); // Chọn tất cả các nút
        const infoSections = document.querySelectorAll('._3RBPn'); // Chọn tất cả các phần tử chứa thông tin

        buttons.forEach((button, index) => {
            button.addEventListener('click', function() {
                const info = infoSections[index]; // Lấy phần tử thông tin tương ứng với nút
                if (info.classList.contains('_1gEO9')) {
                    // Nếu có, loại bỏ lớp _1gEO9 để hiển thị thông tin
                    info.classList.remove('_1gEO9');
                    info.style.maxHeight = "125rem"; // Hiển thị phần tử
                    info.style.opacity = "1"; // Hiển thị phần tử
                } else {
                    // Nếu không, thêm lớp _1gEO9 để ẩn đi thông tin
                    info.classList.add('_1gEO9');
                    info.style.maxHeight = "0"; // Ẩn đi phần tử
                    info.style.opacity = "0"; // Ẩn đi phần tử
                }
            });
        });
    });


//     document.addEventListener("DOMContentLoaded", function() {
//     const buttons = document.querySelectorAll('._3D37-'); // Chọn tất cả các nút
//     const infoSections = document.querySelectorAll('._3RBPn'); // Chọn tất cả các phần tử chứa thông tin

//     buttons.forEach((button, index) => {
//         button.addEventListener('click', function() {
//             const info = infoSections[index]; // Lấy phần tử thông tin tương ứng với nút
//             if (info.classList.contains('_1gEO9')) {
//                 // Nếu có, loại bỏ lớp _1gEO9 để hiển thị thông tin
//                 info.classList.remove('_1gEO9');
//                 info.style.maxHeight = "125rem"; // Hiển thị phần tử
//                 info.style.opacity = "1"; // Hiển thị phần tử
//             } else {
//                 // Nếu không, thêm lớp _1gEO9 để ẩn đi thông tin
//                 info.classList.add('_1gEO9');
//                 info.style.maxHeight = "0"; // Ẩn đi phần tử
//                 info.style.opacity = "0"; // Ẩn đi phần tử
//             }
//         });
//     });
// });


    document.addEventListener("DOMContentLoaded", function() {
        // Logic cho nút "Pricing"
        const buttons = document.querySelectorAll('._3D37-'); // Chọn tất cả các nút Pricing
        const infoSections = document.querySelectorAll('._3RBPn'); // Chọn tất cả các phần tử chứa thông tin

        buttons.forEach((button, index) => {
            button.addEventListener('click', function() {
                const info = infoSections[index]; // Lấy phần tử thông tin tương ứng với nút
                const newDiv = info.querySelector('._3N7xD'); // Lấy phần tử _3N7xD bên trong infoSections
                if (info.classList.contains('_1gEO9')) {
                    info.classList.remove('_1gEO9');
                    info.style.maxHeight = "125rem";
                    info.style.opacity = "1";
                    newDiv.style.display = 'block'; // Hiển thị _3N7xD
                } else {
                    info.classList.add('_1gEO9');
                    info.style.maxHeight = "0";
                    info.style.opacity = "0";
                    newDiv.style.display = 'none'; // Ẩn _3N7xD
                }
            });
        });

        // Logic cho nút "Add Vehicle"
        const addButtons = document.querySelectorAll('button[aria-label="Add Vehicle"]');
        addButtons.forEach((addButton, index) => {
            const formDiv = document.querySelectorAll('div._3vbjm')[index];
            const newDiv = document.querySelectorAll('div._3N7xD')[index];

            addButton.addEventListener('click', function() {
                if (newDiv && formDiv) {
                    formDiv.style.display = 'none';
                    newDiv.style.display = 'block';

                    // Hiển thị phần tử thông tin tương ứng
                    const infoSection = infoSections[index];
                    infoSection.classList.remove('_1gEO9');
                    infoSection.style.maxHeight = "125rem";
                    infoSection.style.opacity = "1";
                }
            });

            // Lấy các phần tử liên quan trong form hiện tại
            const carMakeSelect = formDiv.querySelector('#Car\\ Make');
            const carCategorySelect = formDiv.querySelector('#Car\\ Category');
            const carModelSelect = formDiv.querySelector('#Car\\ Model');
            const clearButton = formDiv.querySelector('button[aria-label="Clear Add Vehicle Form"]');

            carMakeSelect.addEventListener('change', function() {
                if (carMakeSelect.value) {
                    carCategorySelect.removeAttribute('disabled');
                } else {
                    carCategorySelect.setAttribute('disabled', '');
                    carModelSelect.setAttribute('disabled', '');
                    carModelSelect.innerHTML = '<option disabled selected>Model</option>';
                    addButton.classList.remove('button-enable');
                }
            });

            carCategorySelect.addEventListener('change', function() {
                if (carCategorySelect.value) {
                    const brandId = carMakeSelect.value;
                    const categoryId = carCategorySelect.value;

                    fetch(`/api/cars?brandID=${brandId}&categoryID=${categoryId}`)
                        .then(response => response.json())
                        .then(cars => {
                            carModelSelect.innerHTML = '<option disabled selected>Model</option>';
                            cars.forEach(car => {
                                const option = document.createElement('option');
                                option.value = car.id;
                                option.textContent = car.name;
                                carModelSelect.appendChild(option);
                            });
                            carModelSelect.removeAttribute('disabled');
                        })
                        .catch(error => console.error('Error fetching cars:', error));
                } else {
                    carModelSelect.setAttribute('disabled', '');
                    carModelSelect.innerHTML = '<option disabled selected>Model</option>';
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
                carMakeSelect.selectedIndex = 0;
                carCategorySelect.selectedIndex = 0;
                carModelSelect.selectedIndex = 0;
                carCategorySelect.setAttribute('disabled', '');
                carModelSelect.setAttribute('disabled', '');
                carModelSelect.innerHTML = '<option disabled selected>Model</option>';
                addButton.classList.remove('button-enable');
            });
        });
    });

    
</script>

@include('client.partials.footer')