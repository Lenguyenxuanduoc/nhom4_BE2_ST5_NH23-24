@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<body style="margin-top: 100px; background: white;">
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            User Info
        </h4>
        <div class="col-md-12">
            @if (session('error'))
                <div id="errorAlert" class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div id="successAlert" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light mb-5">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Wishlist</a>
                        {{-- <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notifications</a> --}}
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <form action="{{ route('user.update', $user->id) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control mb-1" name="username"
                                            value="{{ $user->username }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" class="form-control mb-1" name="email"
                                            value="{{ $user->email }}">
                                        {{-- <div class="alert alert-warning mt-3">
                                            Your email is not confirmed. Please check your inbox.<br>
                                            <a href="javascript:void(0)">Resend confirmation</a>
                                        </div> --}}
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ $user->address }}">
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary"
                                            style="padding: 10px; border-radius:5px; background: #007bff; color: white; border: none;">
                                            Save Changes
                                        </button>&nbsp;
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <form action="{{ route('user.change_password', $user->id) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" name="current_password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" name="new_password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" name="repeat_password" class="form-control">
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary"
                                            style="padding: 10px; border-radius:5px; background: #007bff; color: white; border: none;">
                                            Change Password
                                        </button>&nbsp;
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="account-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <!-- Placeholder for Wishlist Items -->
                                            @if ($wishlistCars)
                                                @foreach ($wishlistCars as $car)
                                                    <div class="col-md-4 my-4">
                                                        <div class="card">
                                                            <a href="{{ route('car.detail', $car->slug) }}"><img
                                                                    src="{{ asset('images/cars/' . $car->avatar) }}"
                                                                    class="card-img-top" alt="{{ $car->name }}"
                                                                    style="max-height: 170px; padding: 20px;">
                                                            </a>
                                                            <div class="card-body">
                                                                <a href="{{ route('car.detail', $car->slug) }}" style="color: black; text-decoration: none">
                                                                    <h5 class="card-title">{{ $car->name }}</h5>
                                                                </a>
                                                                <p class="card-text"><b>MSRP:</b>
                                                                    @if ($car->msrp != 0)
                                                                        ${{ number_format($car->msrp, 0, ',', '.') }}
                                                                    @else
                                                                        Coming soon
                                                                    @endif
                                                                </p>
                                                                <a href="{{ route('remove.to.wishlist', $car->id) }}"
                                                                    class="btn btn-primary align-self-center py-1">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <!-- End Placeholder -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>

    @include('client.partials.footer')
    <script>
        setTimeout(function() {
            $('#errorAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);
    </script>
