@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')


<div style="padding: 100px 0px">
    <div class="reset-password-container">
        <h2>Password Reset</h2>
        <form action="/reset-password" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="signup-link">
                Not a member? <a href="{{route('register')}}">Register now</a>
            </div>
            {{-- <div class="form-group">
            <label for="confirm_password">Confirm New Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div> --}}
            <button type="submit">Send Email</button>
        </form>
    </div>
</div>


@include('client.partials.footer')
