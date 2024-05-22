@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')
@php
    use Illuminate\Support\Carbon;
    $images = json_decode($posts_detail->images);
@endphp

<!-- Các thẻ meta khác của bạn -->
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $posts_detail->title }}" />
<meta property="og:description" content="{{ $posts_detail->description }}" />
<meta property="og:image" content="{{ $images[0] }}" />

<!------- Start banner ------->

<section class="banner-posts" style="background-image: url('{{ asset('images/posts/' . $images[0]) }}');">
    <div class="banner-posts-content">
        <p>{{ date('d F Y', strtotime($posts_detail->posting_date)) }}<span> -
            </span><span>{{ $posts_detail->author }}</span></p>
        <h1>{{ $posts_detail->title }}</h1>
    </div>
</section>
<!------- End banner ------->

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

<!------- Start posts content ------->
<section class="posts-content-container">
    <div class="posts-content">
        @php
            $contentParts = explode("\n", $posts_detail->content);
            $firstParagraph = isset($contentParts[0]) ? $contentParts[0] : '';
            $secondParagraph = isset($contentParts[1]) ? $contentParts[1] : '';
        @endphp
        <p>{{ $firstParagraph }}</p>
        <img src={{ asset('images/posts/' . $images[0]) }} alt="">
        <p>{{ $secondParagraph }}</p>
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
            <button class="fb-share-btn" onclick="shareOnFacebook(event)">
                <a href="" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
            </button>

            <button class="ins-share-btn">
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </button>

            <button class="twitter-share-btn" onclick="shareOnTwitter(event)">
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            </button>
        </div>

        <div class="comment-box" style="margin-left: 0;">
            <h2>Comments</h2>
            <form class="comment-form" method="post" action="{{ route('store.post.comment') }}">
                @csrf
                <div>
                    <textarea class="comment-message" name="content" rows="4" placeholder="Add a comment..." required></textarea>
                    <input type="hidden" name="posts_id" value="{{ $posts_detail->id }}">
                </div>
                <button type="submit">Send</button>
            </form>

            <div class="comments-section">
                @if (!empty($comments))
                    @foreach ($comments as $comment)
                        <div class="comment">
                            <div class="comment-header">
                                <span class="comment-user">{{ $comment->user->name }}</span>
                                @php
                                    $comment_date = Carbon::parse($comment->comment_date)->format('d/m/Y');
                                @endphp
                                <span class="comment-date">{{ $comment_date }}</span>
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
<script>
    function shareOnFacebook() {
        const postUrl = encodeURIComponent("{{ url()->current() }}");
        const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${postUrl}`;
        window.open(facebookUrl, '_blank');
    }

    // function shareOnInstagram() {
    //     const postUrl = "{{ url()->current() }}";
    //     const tempInput = document.createElement("input");
    //     tempInput.value = postUrl;
    //     document.body.appendChild(tempInput);
    //     tempInput.select();
    //     document.execCommand("copy");
    //     document.body.removeChild(tempInput);
    //     alert("URL copied to clipboard. Open Instagram and paste the URL into your post.");
    // }

    function shareOnTwitter() {
        const postUrl = encodeURIComponent("{{ url()->current() }}");
        const twitterUrl = `https://twitter.com/intent/tweet?url=${postUrl}`;
        window.open(twitterUrl, '_blank');
    }

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
