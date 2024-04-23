<!------- Start login pop up ------->
<div class="login-popup-overlay" id="login-popup">
    <div class="login-popup">
        <div class="btn-close-popup">
            <button onclick="closePopup('login-popup')"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="center">
            <h1>Login</h1>
            <form action="" method="post">
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
                <div class="pass">Forgot password?</div>
                <input type="submit" value="Login">
                <div class="signup-link">
                    Not a member? <a href="">Signup</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!------- End login pop up ------->