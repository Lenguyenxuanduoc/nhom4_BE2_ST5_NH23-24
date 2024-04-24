@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

<!------- Start banner ------->
<section class="banner" style="background-image: url('images/banners/banner_news_page.jpg');">
    <div class="banner-content">
        <h1>News</h1>
        <p>Breaking News, In-Depth Articles, Reviews And Press Releases Covering All You Need To Know In The World Of
            Supercar News</p>
    </div>
</section>
<!------- End banner ------->


<!------- Start posts ------->
<div class="posts-container">
    @if (!empty($posts))
        @php
            $countPosts = 0;
        @endphp
        @foreach ($posts as $post)
            @php
                $countPosts++;
                $images = json_decode($post->images);
            @endphp
            <a href="news/posts/{{ $post->slug }}">
                <div class="posts-box">
                    <div class="posts-img">
                        <img src="{{ asset('images/posts/' . $images[0]) }}"
                            alt="">
                    </div>

                    <div class="posts-text">
                        <span>{{ date('d F Y', strtotime($post->posting_date)) }} / {{ $post->author }}</span>
                        <a href="news/posts/{{ $post->slug }}" class="posts-title">{{ $post->title }}</a>
                        <p>{{ \Str::limit($post->content1, 60) }}</p>
                        <a href="news/posts/{{ $post->slug }}">READ MORE</a>
                    </div>
                </div>
            </a>
        @endforeach
    @endif
</div>
<!------- End posts ------->

@include('client.partials.footer')
