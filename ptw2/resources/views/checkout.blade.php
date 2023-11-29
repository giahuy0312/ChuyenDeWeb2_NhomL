@extends('layout.main')

@include('layout.header')

<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{ asset('images/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2>Checkout</h2>
            <ul>
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a href="products.html">Shop</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Page Content -->
<main class="page-content">

    <!-- Checkout Area -->
    <div class="tm-section tm-checkout-area bg-white tm-padding-section">
        <div class="container">
            <form action="{{ route('order.payment') }}" class="tm-form tm-checkout-form needs-validation" method="GET"
                novalidate>
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="small-title">BILLING INFORMATION</h4>

                        <!-- Billing Form -->
                        <div class="tm-checkout-billingform">
                            <div class="tm-form-inner">
                                <div class="tm-form-field">
                                    <label for="billingform-usernamename">User name</label>
                                    <input class="form-control" type="text" id="billingform-username"
                                        value="{{ $user->username }}" maxlength="50" name="username" required>
                                    <div class="invalid-feedback">
                                        Please enter user name
                                    </div>
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-companyname">Name</label>
                                    <input class="form-control" type="text" id="billingform-companyname"
                                        value="{{ $user->name }}" maxlength="50" name="name">
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-email">Email address</label>
                                    <input class="form-control" type="email" id="billingform-email"
                                        value="{{ $user->email }}" name="email" readonly>
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-phone">Phone (Optional)</label>
                                    <input class="form-control" maxlength="10" type="text" id="billingform-phone"
                                        value="{{ $user->phone }}" name="phone">
                                    <div class="invalid-feedback">
                                        Please enter phone number
                                    </div>
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-address">Address</label>
                                    <input class="form-control" type="text" id="billingform-address"
                                        placeholder="Enter Address" value="{{ $user->address }}" maxlength="100" name="address"
                                        required>
                                    <div class="invalid-feedback">
                                        Please enter address
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Billing Form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="tm-checkout-orderinfo">
                            <div class="table-responsive">
                                <table class="table table-borderless tm-checkout-ordertable">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $subtotal = 0;
                                    $total = 0;
                                    ?>
                                    <tbody>
                                        @foreach ($products as $product)
                                            @foreach ($orderDetails as $orderDetail)
                                                @if ($orderDetail->product_id == $product->id)
                                                    <?php $price = $orderDetail->quality * $product->price; ?>
                                                    <tr>
                                                        <td>{{ $product->name }} * {{ $orderDetail->quality }}</td>
                                                        <td>{{ number_format($price, 2, ',', '.') }} ₫</td>
                                                    </tr>
                                                    <?php $subtotal += $price; ?>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="tm-checkout-subtotal">
                                            <td>Cart Subtotal</td>
                                            <td>{{ number_format($subtotal, 2, ',', '.') }} ₫</td>
                                        </tr>
                                        <tr class="tm-checkout-shipping">
                                            <td>(-) Promotion</td>
                                            @if ($promotion == 'null')
                                                <?php $promotion = 0; ?>
                                            @else
                                                <?php $promotion = $promotion[0]->amount; ?>
                                            @endif
                                            <td>{{ $promotion }} ₫</td>
                                        </tr>
                                        <tr class="tm-checkout-total">
                                            <td>Total</td>
                                            <?php $total = $subtotal - $promotion; ?>
                                            <td>{{ number_format($total, 2, ',', '.') }} ₫</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="tm-checkout-submit">
                                <p>Your personal data will be used to process your order, support your
                                    experience throughout this website, and for other purposes described in our
                                    privacy policy.</p>
                                <div class="tm-form-inner">
                                    <div class="tm-form-field">
                                        <input class="form-check-input" type="checkbox" name="checkout_read_terms"
                                            id="checkout_read_terms" required>
                                        <label class="form-check-label" for="checkout_read_terms">I have read and agree
                                            to the website
                                            terms and conditions</label>
                                        <div class="invalid-feedback">
                                            You have to check to read terms
                                        </div>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button ml-auto" id="place_order">Place
                                            Order</button>
                                    </div>
                                    <script>
                                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                                        (function() {
                                            'use strict'

                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.querySelectorAll('.needs-validation')

                                            // Loop over them and prevent submission
                                            Array.prototype.slice.call(forms)
                                                .forEach(function(form) {
                                                    form.addEventListener('submit', function(event) {
                                                        if (!form.checkValidity()) {
                                                            event.preventDefault()
                                                            event.stopPropagation()
                                                        }

                                                        form.classList.add('was-validated')
                                                    }, false)
                                                })
                                        })()
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--// Checkout Area -->

</main>
<!--// Page Content -->

@include('layout.footer')
