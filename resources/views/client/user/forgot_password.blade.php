@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')

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

<div style="padding: 100px 0px">
    <div class="reset-password-container">
        <h2>Password Reset</h2>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" placeholder="Email" required>
            </div>
            <div class="signup-link">
                Not a member? <a href="{{route('register')}}">Register now</a>
            </div>
            <button type="submit">Send Email</button>
        </form>
    </div>
</div>

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
                }, 2500); // Hide after 2.5 seconds
            }
        }

        // Show the popups if they exist
        showPopup('errorPopup');
        showPopup('successPopup');
    });
</script>
@include('client.partials.footer') 
