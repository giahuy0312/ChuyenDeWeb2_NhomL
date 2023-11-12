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

<?php $orderDetails = DB::table('order_product')->get(); ?>

<!-- Page Content -->
<main class="page-content">

    <!-- Shopping Cart Area -->
    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
        <div class="container">

            <!-- Shopping Cart Table -->
            <div class="tm-cart-table table-responsive">
                <table class="table table-bordered mb-0">
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
                        @foreach ($orders as $order)
                            @if ($order->user_id == 1)
                                @if ($order->order_status == 0)
                                    @foreach ($order->products as $product)
                                        <tr>
                                            <td>
                                                <a href="{{-- {{ route('products.show', $product->id) }} --}}#" class="tm-cart-productimage">
                                                    <img src="{{ asset('images/products') }}/{{ $product->image }}"
                                                        alt="{{ $product->image }}">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{-- {{ route('products.show', $product->id) }} --}}#"
                                                    class="tm-cart-productname">{{ $product->name }}</a>
                                            </td>
                                            <td class="tm-cart-price">{{ $product->price }} ₫</td>
                                            <td>
                                                <div class="tm-quantitybox">
                                                    @foreach ($orderDetails as $orderdetail)
                                                        @if ($orderdetail->product_id == $product->id && $orderdetail->order_id == $order->id)
                                                            <input type="text" value="{{ $orderdetail->quality }}"
                                                                id="quality" name="quality">
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td>
                                                <span class="tm-cart-totalprice">{{ $product->price }} ₫</span>
                                                <input type="hidden" value="{{ $product->price }}" id="product_price"
                                                    name="product_price">
                                            </td>
                                            <td>
                                                <form action="{{ url('/order/' . $order->id) }}" method="POST"
                                                    class="d-inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" value="{{ $product->id }}" id="product_id"
                                                        name="product_id">
                                                    <button onclick="return confirm('Bạn có muốn xóa hay không?')"
                                                        type="submit" id="{{ $order->id }}"
                                                        class="tm-cart-removeproduct"><i class="ion-close"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--// Shopping Cart Table -->

            <!-- Shopping Cart Content -->
            <div class="tm-cart-bottomarea">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="tm-buttongroup">
                            <a href="#" class="tm-button">Continue Shopping</a>
                            <a href="#" class="tm-button">Update Cart</a>
                        </div>
                        <form action="#" class="tm-cart-coupon">
                            <label for="coupon-field">Have a coupon code?</label>
                            <input type="text" id="coupon-field" placeholder="Enter coupon code" required="required">
                            <button type="submit" class="tm-button">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-cart-pricebox">
                            <h2>Cart Totals</h2>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="tm-cart-pricebox-subtotal">
                                            <td>Cart Subtotal</td>
                                            <td>$175.00</td>
                                        </tr>
                                        <tr class="tm-cart-pricebox-shipping">
                                            <td>(+) Shipping Charge</td>
                                            <td>$15.00</td>
                                        </tr>
                                        <tr class="tm-cart-pricebox-total">
                                            <td>Total</td>
                                            <td>$190.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="#" class="tm-button">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Shopping Cart Content -->

        </div>
    </div>
    <!--// Shopping Cart Area -->

</main>
<!--// Page Content -->

@include('layout.footer')
