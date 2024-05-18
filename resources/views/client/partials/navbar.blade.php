@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\Brand;
@endphp
<!------- Start navbar ------->
<nav>
    <div class="container nav-container">
        <a href="{{route('home')}}" class="logo">
            <h3>Exotic Cars.</h3>
        </a>
        <ul class="nav-link">
            <li><a href="{{route('home')}}" class="active">Home</a></li>
            <li><a href="{{route('news')}}">News</a></li>
            <li>
                <a href="{{route('all.brands')}}">Brands <i class="fa-solid fa-caret-down" style="font-size: 15px;"></i></a>
                <div class="nav-dropdown">
                    <ul>
                        @php
                            $brands = Brand::all();
                        @endphp
                        @if (!empty($brands))
                            @foreach ($brands as $brand)
                                <li><a href="{{route('brand.detail', $brand->slug)}}">{{$brand->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="{{route('car.compare')}}">Compare</a></li>

            @if (Auth::check() && Auth::user()->permission == 1) 
                <li><a href="/admin">Admin</a></li>
            @endif  

            <li>
                <form action="{{route('search')}}" method="GET" class="search">
                    <input type="text" name="keyword" placeholder="Search">
                    <button type="submit" style="display: none;">Search</button>
                </form>
            </li>
            
            <div class="login-register">
                @if (Auth::check())
                    <li>
                        <form action="/logout" method="post" id="logout-form">
                            @csrf
                            <button type="submit" class="login-btn">Log out</button>
                        </form>
                    </li>
                @else
                    <li><button class="login-btn" onclick="openPopup('login-popup')">Log in</button></li>
                @endif
            </div>
        </ul>
        <ul class="social-link">
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
        </ul>
    </div>
</nav>
<!------- End navbar ------->
