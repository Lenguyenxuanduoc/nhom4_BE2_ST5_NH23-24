<!------- Start login pop up ------->
<div class="login-popup-overlay" id="login-popup">
    <div class="login-popup">
        <div class="btn-close-popup">
            <button onclick="closePopup('login-popup')"><i class="fa-solid fa-xmark"></i></button>
        </div>
        @include('client.partials.alert')
        <div class="center">
            <h1>Login</h1>
            <form action="/login" method="post">
                <div class="text-field">
                    <input type="text" name="username" id="" required>
                    <span></span>
                    <label for="username">Username</label>
                </div>

                <div class="text-field">
                    <input type="password" name="password" id="" required>
                    <span></span>
                    <label for="password">Password</label>
                </div>

                <div style="margin: 0 0 15px 5px; color: #666666;">
                    <input type="checkbox" name="remember" id="">
                    <span></span>
                    <label for="remember">Remember me</label>
                </div>

                <div class="pass">Forgot password?</div>
                <input type="submit" value="Login">
                <div class="signup-link">
                    Not a member? <a href="">Signup</a>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>
<!------- End login pop up ------->