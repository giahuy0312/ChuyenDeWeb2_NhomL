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
@if (!isset($_SESSION))
    <?php session_start(); ?>
@endif


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
                        <?php
                        $total = 0;
                        $subtotal = 0;
                        $quality = 0;
                        $id_order = 0;
                        $promotion_amount = 0;
                        ?>
                        @if (isset($_SESSION['order_id']))
                            <form action="{{ url('/order/' . $_SESSION['order_id']) }}" method="POST"
                                class="d-inline-block" id="update-cart" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @foreach ($orders as $order)
                                    @if ($order->user_id == $_SESSION['user_id'])
                                        @if ($order->order_status == 0)
                                            @foreach ($order->products as $product)
                                                <?php $price = $product->price; ?>
                                                <?php $id_order = $order->id; ?>
                                                @foreach ($orderDetails as $orderdetail)
                                                    @if ($orderdetail->product_id == $product->id && $orderdetail->order_id == $order->id)
                                                        <?php $quality = $orderdetail->quality; ?>
                                                        <?php $subtotal = $price * $quality; ?>
                                                        <?php $total += $subtotal; ?>
                                                    @endif
                                                @endforeach
                                                <tr>
                                                    <td>
                                                        <a href="{{-- {{ route('products.show', $product->id) }} --}}#" class="tm-cart-productimage">
                                                            <img src="{{ asset('images/image-products') }}/{{ $product->image }}"
                                                                alt="{{ $product->image }}">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{-- {{ route('products.show', $product->id) }} --}}#"
                                                            class="tm-cart-productname">{{ $product->name }}</a>
                                                    </td>
                                                    <td class="tm-cart-price">
                                                        {{ number_format($product->price, 2, ',', '.') }}
                                                        ₫</td>
                                                    <td>
                                                        <div class="tm-quantitybox">
                                                            <input type="text" value="{{ $quality }}"
                                                                id="{{ $product->id }}"
                                                                name="id_{{ $product->id }}">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="tm-cart-totalprice">{{ number_format($subtotal, 2, ',', '.') }}
                                                            ₫</span>
                                                    </td>
                                                    <td>
                                                        <a onclick="return confirm('Bạn có muốn xóa hay không?')"
                                                            href="{{ url('/order/' . $order->id . '/product/' . $product->id . '/token=' . csrf_token()) }}"
                                                            class="tm-cart-removeproduct"
                                                            style="padding: 0 30px; color: inherit;"><i
                                                                class="ion-close"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @endif
                                @endforeach
                            </form>
                        @endif
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
                            <button type="submit" form="update-cart" class="tm-button">Update Cart</button>
                        </div>
                        <form action="{{ route('promotion.search') }}" class="tm-cart-coupon">
                            <label for="coupon-field">Have a coupon code?</label>
                            <input type="text" id="coupon-field" placeholder="Enter coupon code" required="required"
                                maxlength="6" name="keyword" id="keyword">
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
                                            <td>{{ number_format($total, 2, ',', '.') }} ₫</td>
                                        </tr>
                                        <tr class="tm-cart-pricebox-shipping">
                                            <td>(-) Promotion</td>
                                            @if (url()->current() == 'http://127.0.0.1:8000/order')
                                                <td>{{ $promotion_amount }} ₫</td>
                                            @else
                                                @if ($promotion != '[]')
                                                    @foreach ($promotion as $item)
                                                        <?php $promotion_amount = $item->amount; ?>
                                                        <td>{{ number_format($item->amount, 2, ',', '.') }} ₫</td>
                                                    @endforeach
                                                @else
                                                    <td>{{ $promotion_amount }} ₫</td>
                                                @endif
                                            @endif
                                        </tr>
                                        <tr class="tm-cart-pricebox-total">
                                            <td>Total</td>
                                            <td>{{ number_format($total - $promotion_amount, 2, ',', '.') }} ₫</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('order.create') }}" class="tm-button">Proceed To Checkout</a>
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
