@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\Brand;
@endphp
<!------- Start navbar ------->
<nav>
    <div class="container nav-container">
        <a href="/home" class="logo">
            <h3>Exotic Cars.</h3>
        </a>
        <ul class="nav-link">
            <li><a href="/home" class="active">Home</a></li>
            <li><a href="/news">News</a></li>
            <li>
                <a href="/brands">Brands <i class="fa-solid fa-caret-down" style="font-size: 15px;"></i></a>
                <div class="nav-dropdown">
                    <ul>
                        @php
                            $brands = Brand::all();
                        @endphp
                        @if (!empty($brands))
                            @foreach ($brands as $brands)
                                <li><a href="/brands/{{$brands->slug}}">{{$brands->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>

            @if (Auth::check() && Auth::user()->permission == 1) 
                <li><a href="/admin">Admin</a></li>
            @endif  

            <li>
                <form action="" class="search">
                    <input type="text" name="tag" placeholder="Search">
                    <button type="submit" style="display:none"></button>
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
