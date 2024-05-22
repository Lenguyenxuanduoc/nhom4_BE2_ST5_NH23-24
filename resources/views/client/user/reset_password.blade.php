@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')


<div style="padding: 100px 0px">
    <div class="reset-password-container">
        <h2>Password Reset</h2>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Reset Password </button>
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
