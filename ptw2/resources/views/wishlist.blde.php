@extends('layout.main')

@include('layout.header')

<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{ asset('images') }}/breadcrumb-bg.jpg">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2>Shopping Cart</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Shop</a></li>
                <li>Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->


<!-- Page Content -->
<main class="page-content">

    <!-- Shopping Cart Area -->
    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
        <div class="container">

            <!-- Shopping Cart Table -->
            <div class="tm-cart-table table-responsive">
                <table class="table table-bordered mb-0">
                    @if ($success = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $success }}
                    </div>
                    @endif
                    @if ($error = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                    @endif
                    <thead>
                        <tr>
                            <th class="tm-cart-col-image" scope="col">Image</th>
                            <th class="tm-cart-col-productname" scope="col">Product</th>
                            <th class="tm-cart-col-price" scope="col">Price</th>
                            <th class="tm-cart-col-quantity" scope="col">Quantity</th>
                            <th class="tm-cart-col-total" scope="col">Total</th>
                            <th class="tm-cart-col-remove" scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <!--// Shopping Cart Table -->



        </div>
    </div>
    <!--// Shopping Cart Area -->

</main>
<!--// Page Content -->

@include('layout.footer')