    @include('client.partials.head')

    @include('client.partials.navbar')

    @include('client.partials.login')

    <!------- Start header selection ------->
    @if (session('error'))
        <div id="errorPopup" class="alert-custom-popup popup-error">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div id="successPopup" class="alert-custom-popup popup-success">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <div class="container header-container">
            <div class="header-left">
                <h1>Car Dealing Experience.</h1>
                <h3>Readfinde!</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, expedita ipsam <br>ea porro
                    rem ut, iste quod a nesciunt natus earum vitae sunt necessitatibus<br> corrupti, error ipsa
                    doloremque
                    quaerat aspernatur!
                </p>
                <a href="{{route('all.brands')}}" class="btn">Explore Cars</a>
            </div>
            <div class="header-right">
                <div class="sq-box">
                    <img src={{ asset('images\banners\banner_home_page.png') }} alt="">
                </div>
            </div>
        </div>
        <div class="sq-box2"></div>
    </header>
    <!------- End header selection ------->

    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Function to show the popup
            function showPopup(popupId) {
                let popupElement = document.getElementById(popupId);
                if (popupElement) {
                    popupElement.style.display = 'block';
                    setTimeout(function() {
                        popupElement.style.display = 'none';
                    }, 1500); // Hide after 1.5 seconds
                }
            }

            // Show the popups if they exist
            showPopup('errorPopup');
            showPopup('successPopup');
        });
    </script>
    @include('client.partials.footer')
