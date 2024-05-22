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

<div class="cart-container">
    <table>
        <tr>
            <th>Car</th>
            <th>MSRP</th>
            <th>Fair Market Price</th>
            <th>Price</th>
        </tr>
        @if (!empty($userCarts))
            @php
               $subtotal = 0; 
            @endphp
            @foreach ($userCarts as $carInCart)
                <tr>
                    <td>
                        <div class="cart-info">
                            <a href="{{route('car.detail', $carInCart->car->slug)}}">
                                <img src="{{ asset('images/cars/' . $carInCart->car->avatar) }}"
                                alt="{{ $carInCart->car->name }}">
                            </a>
                            <div>
                                <a href="{{route('car.detail', $carInCart->car->slug)}}">
                                    <p style="font-size: 20px; color: rgb(62, 49, 49);"><b>{{ $carInCart->car->name }}</b></p>
                                </a>
                                <small class="Fwfwe3">MSRP: {{ $carInCart->car->msrp }}</small>
                                <br>
                                <a href="{{route('remove.from.cart', $carInCart->car->id)}}">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        @if ($carInCart->car->msrp != 0)
                            ${{ number_format($carInCart->car->msrp, 0, ',', '.') }}
                        @else
                            Coming soon
                        @endif
                    </td>
                    <td>
                        @if ($carInCart->car->fair_market_price != 0)
                            ${{ number_format($carInCart->car->fair_market_price, 0, ',', '.') }}
                        @else
                            Coming soon
                        @endif
                    </td>
                    <td>
                        @php
                            $price = ($carInCart->car->msrp + $carInCart->car->fair_market_price) / 2;
                            $subtotal += $price;
                        @endphp
                        ${{ number_format($price, 0, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        @endif

    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>${{ number_format($subtotal, 0, ',', '.') }}</td>
            </tr>

            <tr>
                @php
                    $taxRate = 0.5; // 50%
                    $tax = $subtotal * $taxRate;
                @endphp
                <td>Tax (50%)</td>
                <td>${{ number_format($tax, 0, ',', '.') }}</td>
            </tr>

            <tr>
                <td>Total</td>
                <td>${{ number_format($tax + $subtotal, 0, ',', '.') }}</td>
            </tr>
        </table>
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
