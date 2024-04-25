@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start banner ------->
@php
    $images = json_decode($posts_detail->images);
@endphp
<section class="banner-posts" style="background-image: url('{{ asset('images/posts/' . $images[0]) }}');">
    <div class="banner-posts-content">
        <p>{{ date('d F Y', strtotime($posts_detail->posting_date)) }}<span> -
            </span><span>{{ $posts_detail->author }}</span></p>
        <h1>{{ $posts_detail->title }}</h1>
    </div>
</section>
<!------- End banner ------->


<!------- Start posts content ------->
<section class="posts-content-container">
    <div class="posts-content">
        <p>{{ $posts_detail->content1 }}</p>
        <img src={{ asset('images/posts/' . $images[0]) }} alt="">
        <p>{{ $posts_detail->content2 }}</p>
        @php
            $countImg = count($images);
        @endphp
        @if ($countImg > 1)
            @for ($i = 0; $i < $countImg; $i++)
                @if ($i != 0)
                    <img src={{ asset('images/posts/' . $images[$i]) }} alt="">
                @endif
            @endfor
        @endif

        <div class="share-buttons">
            <button class="fb-share-btn">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            </button>

            <button class="ins-share-btn">
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </button>

            <button class="twitter-share-btn">
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            </button>
        </div>
    </div>

    <div class="latest-posts">
        @foreach ($latest_posts as $posts)
            @php
                $images_latest_posts = json_decode($posts->images);
            @endphp
            <div class="latest-posts-box">
                <a href="/news/posts/{{ $posts->slug }}">
                    <div class="img-latest-posts">
                        <img src={{ asset('images/posts/' . $images_latest_posts[0]) }} alt="">
                    </div>
                </a>
                <p>{{ date('d F Y', strtotime($posts->posting_date)) }} / {{ $posts->author }}</p>
                <a href="/news/posts/{{ $posts->slug }}">
                    <h3>{{ $posts->title }}</h3>
                </a>
            </div>
        @endforeach
    </div>

</section>
<!------- End posts content ------->

@include('client.partials.footer')
