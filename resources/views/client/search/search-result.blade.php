@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start search results ------->
<section class="search-results-container">
    <div class="label-search-results">
        <h1>Search for "{{strtoupper($keyword)}}"</h1>
        <ul class="search-filter">
            <li><a href="" class="active">ALL</a></li>
            <li><a href="">NEWS</a></li>
            <li><a href="">CARS</a></li>
        </ul>
        <hr>
    </div>

    <div class="search-results-content">
        @if (!empty($posts))
            @foreach ($posts as $post)
            @php
                $images = json_decode($post->images);
            @endphp
                <div class="search-results-content-box">
                    <div class="search-results-img">
                        <a href="{{ route('posts.detail', $post->slug) }}">
                            <img src="{{ asset('images/posts/' . $images[0]) }}" alt="">
                        </a>
                    </div>
                    <div class="search-results-author">
                        <span>{{$post->author}}</span>
                    </div>
                    <div class="search-results-title">
                        <a href="{{ route('posts.detail', $post->slug) }}">
                            <h2>{{$post->title}}</h2>
                        </a>
                    </div>
                    <div class="search-results-description">
                        <p>{{ \Str::limit($post->content, 60) }}</p>
                    </div>
                    <div class="search-results-readmore">
                        <a href="{{ route('posts.detail', $post->slug) }}"><span>READ MORE</span></a>
                    </div>
                </div>
            @endforeach
        @endif

        @if (!empty($cars))
            @foreach ($cars as $car)
            @php
                $images = json_decode($car->images);
            @endphp
                <div class="search-results-content-box">
                    <div class="search-results-img">
                        <a href="{{ route('car.detail', $car->slug) }}">
                            <img src="{{ asset('images/cars/' . $images[0]) }}" alt="">
                        </a>
                    </div>
                    <div class="search-results-author">
                        <a href="{{route ('brand.detail', $car->brand->slug)}}">
                            <span>{{$car->brand->name}}</span>
                        </a>
                    </div>
                    <div class="search-results-title">
                        <a href="{{ route('car.detail', $car->slug) }}">
                            <h2>{{$car->name}}</h2>
                        </a>
                    </div>
                    <div class="search-results-description">
                        <p>${{ number_format($car->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="search-results-readmore">
                        <a href="{{ route('car.detail', $car->slug) }}"><span>READ MORE</span></a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>
<!------- End search results ------->

@include('client.partials.footer')
