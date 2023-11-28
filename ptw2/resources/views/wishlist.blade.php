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
                            <th class="tm-cart-col-total" scope="col">Add To Cart</th>
                            <th class="tm-cart-col-remove" scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="POST" class="d-inline-block" id="update-cart" enctype="multipart/form-data">
                            @csrf

                            <tr>
                                <td>
                                    <a href="{{-- {{ route('products.show', $product->id) }} --}}#">
                                    </a>
                                    <img src="#" alt="#">
                                </td>
                                <td>
                                    <a href="{{-- {{ route('products.show', $product->id) }} --}}#" class="tm-cart-productname"></a>
                                    <p>sản phẩm</p>
                                </td>
                                <td class="tm-cart-price">
                                    <p>Giá tiền</p>
                                </td>
                                <td>
                                    <div class="tm-quantitybox">
                                        <input type="text" value="{{-- $quality-- }}" id="{{-- $product->id --}}" name="id_{{-- $product->id --}}">
                                    </div>
                                </td>
                                <td>
                                    <div class="tm-buttongroup">
                                        <button type="submit" form="" class="tm-button">Add To Cart</button>
                                    </div>
                                </td>
                                <td>
                                    <a onclick="return confirm('Bạn có muốn xóa hay không?')" href="" class="tm-cart-removeproduct" style="padding: 0 30px; color: inherit;"><i class="ion-close"></i></a>
                                </td>
                            </tr>

                        </form>
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