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
    <a href="news/posts/1">
        <div class="posts-box">
            <div class="posts-img">
                <img src={{ asset('images\posts\posts1\posts1_1.jpg') }} alt="">
            </div>

            <div class="posts-text">
                <span>9 April 2024 / Terence W</span>
                <a href="news/posts/1" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam
                    numquam ab iure quibusdam earum cupiditate?</p>
                <a href="news/posts/1">READ MORE</a>
            </div>
        </div>
    </a>

    <a href="news/posts/2">
        <div class="posts-box">
            <div class="posts-img">
                <img src={{ asset('images\posts\posts1\posts1_1.jpg') }} alt="">
            </div>

            <div class="posts-text">
                <span>9 April 2024 / Terence W</span>
                <a href="posts_detail.html" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam
                    numquam ab iure quibusdam earum cupiditate?</p>
                <a href="posts_detail.html">READ MORE</a>
            </div>
        </div>
    </a>

    <a href="posts_detail.html">
        <div class="posts-box">
            <div class="posts-img">
                <img src={{ asset('images\posts\posts1\posts1_1.jpg') }} alt="">
            </div>

            <div class="posts-text">
                <span>9 April 2024 / Terence W</span>
                <a href="posts_detail.html" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam
                    numquam ab iure quibusdam earum cupiditate?</p>
                <a href="posts_detail.html">READ MORE</a>
            </div>
        </div>
    </a>

    <a href="posts_detail.html">
        <div class="posts-box">
            <div class="posts-img">
                <img src={{ asset('images\posts\posts1\posts1_1.jpg') }} alt="">
            </div>

            <div class="posts-text">
                <span>9 April 2024 / Terence W</span>
                <a href="posts_detail.html" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam
                    numquam ab iure quibusdam earum cupiditate?</p>
                <a href="posts_detail.html">READ MORE</a>
            </div>
        </div>
    </a>

    <a href="posts_detail.html">
        <div class="posts-box">
            <div class="posts-img">
                <img src={{ asset('images\posts\posts1\posts1_1.jpg') }} alt="">
            </div>

            <div class="posts-text">
                <span>9 April 2024 / Terence W</span>
                <a href="posts_detail.html" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam
                    numquam ab iure quibusdam earum cupiditate?</p>
                <a href="posts_detail.html">READ MORE</a>
            </div>
        </div>
    </a>

    <a href="posts_detail.html">
        <div class="posts-box">
            <div class="posts-img">
                <img src={{ asset('images\posts\posts1\posts1_1.jpg') }} alt="">
            </div>

            <div class="posts-text">
                <span>9 April 2024 / Terence W</span>
                <a href="posts_detail.html" class="posts-title">Porsche Taycan Turbo GT Unveiled</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae totam voluptates esse quisquam
                    numquam ab iure quibusdam earum cupiditate?</p>
                <a href="posts_detail.html">READ MORE</a>
            </div>
        </div>
    </a>
</div>
<!------- End posts ------->

@include('client.partials.footer')
