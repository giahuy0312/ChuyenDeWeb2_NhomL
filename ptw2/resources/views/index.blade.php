@extends('layout.main')

@section('content')
<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    @include('layout.header')

    <!-- Heroslider Area -->
    <div class="tm-heroslider-area bg-grey">
        <div class="tm-heroslider-slider">

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="{{ asset('images') }}/heoslider-image-1.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>Woman’s Jewellery Collection</h1>
                                    <p>Jewellery may be made from a wide range of materials. Jewellery has been
                                        made to adorn nearly every body part from hairpins to toe.</p>
                                    <a href="products.html" class="tm-button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Heroslider Item -->

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="{{ asset('images') }}/heoslider-image-2.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>Woman’s Jewellery Collection</h1>
                                    <p>Jewellery may be made from a wide range of materials. Jewellery has been
                                        made to adorn nearly every body part from hairpins to toe.</p>
                                    <a href="products.html" class="tm-button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Heroslider Item -->

        </div>
    </div>
    <!--// Heroslider Area -->

    <!-- Page Content -->
    <main class="page-content">

        <!-- Features Area -->
        <div class="tm-section tm-feature-area bg-grey">
            <div class="container">
                <div class="row mt-30-reverse">

                    <!-- Single Feature -->
                    <div class="col-lg-4 mt-30">
                        <div class="tm-feature">
                            <span class="tm-feature-icon">
                                <img src="{{ asset('images/icons/icon-free-shipping.png') }}" alt="free shipping">
                            </span>
                            <div class="tm-feature-content">
                                <h6>Free Shipping</h6>
                                <p>We provide free shipping for all order over $200.00</p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Feature -->

                    <!-- Single Feature -->
                    <div class="col-lg-4 mt-30">
                        <div class="tm-feature">
                            <span class="tm-feature-icon">
                                <img src="{{ asset('images/icons/icon-fast-delivery.png') }}" alt="fast delivery">
                            </span>
                            <div class="tm-feature-content">
                                <h6>Fast Delivery</h6>
                                <p>We always deliver our customers very quickly.</p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Feature -->

                    <!-- Single Feature -->
                    <div class="col-lg-4 mt-30">
                        <div class="tm-feature">
                            <span class="tm-feature-icon">
                                <img src="{{ asset('images/icons/icon-247-support.png') }}" alt="24/7 Support">
                            </span>
                            <div class="tm-feature-content">
                                <h6>24/7 Support</h6>
                                <p>We provide support to our customers within 24 hours. </p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Feature -->

                </div>
            </div>
        </div>
        <!--// Features Area -->

        <!-- Popular Products Area -->
        <div id="tm-popular-products-area" class="tm-section tm-popular-products-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h3>POPULAR PRODUCTS</h3>
                            <p>Our popular products are so beautyful to see that the shoppers are easily attracted
                                to them.</p>
                        </div>
                    </div>
                </div>
                <div class="row tm-products-slider">

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-1.jpg" alt="product image">
                                    <img src="{{ asset('images/products') }}/product-image-2.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-3.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-4.jpg" alt="product image">
                                    <img src="{{ asset('images/products') }}/product-image-5.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-soldout">Sold out</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-6.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-7.jpg" alt="product image">
                                    <img src="{{ asset('images/products') }}/product-image-8.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-9.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-10.jpg" alt="product image">
                                    <img src="{{ asset('images/products') }}/product-image-1.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-soldout">Sold out</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-12.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                </div>
            </div>
        </div>
        <!--// Popular Products Area -->

        <!-- Banners Area -->
        <div class="tm-section tm-banners-area">
            <div class="container">
                <div class="row mt-30-reverse">

                    <!-- Single Banner -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <a href="#" class="tm-banner tm-scrollanim">
                            <img src="{{ asset('images') }}/banner-image-1.jpg" alt="banner image">
                        </a>
                    </div>
                    <!--// Single Banner -->

                    <!-- Single Banner -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <a href="#" class="tm-banner tm-scrollanim">
                            <img src="{{ asset('images') }}/banner-image-2.jpg" alt="banner image">
                        </a>
                    </div>
                    <!--// Single Banner -->

                    <!-- Single Banner -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <a href="#" class="tm-banner tm-scrollanim">
                            <img src="{{ asset('images') }}/banner-image-3.jpg" alt="banner image">
                        </a>
                    </div>
                    <!--// Single Banner -->

                </div>
            </div>
        </div>
        <!--// Banners Area -->

        <!-- Popular Products Area -->
        <div id="tm-latest-products-area" class="tm-section tm-latest-products-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h3>NEW ARRIVAL PRODUCTS</h3>
                            <p>Our popular products are so beautyful to see that the shoppers are easily attracted
                                to them.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-50-reverse">

                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-4.jpg" alt="product image">
                                    <img src="{{ asset('images/products') }}/product-image-5.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-6.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-7.jpg" alt="product image">
                                    <img src="{{ asset('images/products') }}/product-image-8.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                    <span class="tm-product-badges-soldout">Sold out</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-9.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-10.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-11.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-sale">Sale</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-12.jpg" alt="product image">
                                    <img src="{{ asset('images/products') }}/product-image-1.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                    <!-- Single Product -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                        <div class="tm-product tm-scrollanim">
                            <div class="tm-product-topside">
                                <div class="tm-product-images">
                                    <img src="{{ asset('images/products') }}/product-image-2.jpg" alt="product image">
                                </div>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                class="ion-eye"></i></button></li>
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                </ul>
                                <div class="tm-product-badges">
                                    <span class="tm-product-badges-new">New</span>
                                </div>
                            </div>
                            <div class="tm-product-bottomside">
                                <h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
                                        earring</a></h6>
                                <div class="tm-ratingbox">
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                    <span><i class="ion-android-star-outline"></i></span>
                                </div>
                                <span class="tm-product-price">$29.99</span>
                                <div class="tm-product-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                    <ul class="tm-product-actions">
                                        <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                    class="ion-eye"></i></button></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Product -->

                </div>
                <div class="tm-product-loadmore text-center mt-50">
                    <a href="products.html" class="tm-button">All Products</a>
                </div>
            </div>
        </div>
        <!--// Popular Products Area -->

        <!-- Offer Area -->
        <div class="tm-section tm-offer-area tm-padding-section bg-grey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 order-2 order-lg-1">
                        <div class="tm-offer-content">
                            <h6>Super deal of the Month</h6>
                            <h1>Brand ear ring on <span>$250</span> only</h1>
                            <div class="tm-countdown" data-countdown="2020/10/12"></div>
                            <a href="product-details.html" class="tm-button">Shop now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-1 order-lg-2">
                        <div class="tm-offer-image">
                            <img class="tm-offer" src="{{ asset('images') }}/offer-image-1.png" alt="offer image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Offer Area -->

        <!-- Latest Blogs Area -->
        <div id="tm-news-area" class="tm-section tm-blog-area tm-padding-section bg-pattern-transparent">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h3>LATEST BLOGS</h3>
                            <p>A blog is a discussion or informational website published on the World Wide Web
                                consisting of discrete</p>
                        </div>
                    </div>
                </div>
                <div class="row tm-blog-slider">

                    <!-- Blog Single Item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-blog tm-scrollanim">
                            <div class="tm-blog-topside">
                                <div class="tm-blog-thumb">
                                    <img src="{{ asset('images/blog') }}/blog-image-1.jpg" alt="blog image">
                                </div>
                                <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                            </div>
                            <div class="tm-blog-content">
                                <h6 class="tm-blog-title"><a href="blog-details.html">Woman wearing gold-colore ring
                                        pendant necklaces</a></h6>
                                <ul class="tm-blog-meta">
                                    <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                    <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incdidunt ut labore et dolore magna aliqua [....]</p>
                                <a href="blog-details.html" class="tm-readmore">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!--// Blog Single Item -->

                    <!-- Blog Single Item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-blog tm-scrollanim">
                            <div class="tm-blog-topside">
                                <div class="tm-blog-thumb">
                                    <img src="{{ asset('images/blog') }}/blog-image-2.jpg" alt="blog image">
                                </div>
                                <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                            </div>
                            <div class="tm-blog-content">
                                <h6 class="tm-blog-title"><a href="blog-details.html">Shallow focus photo of person
                                        putting gold-colored ring</a></h6>
                                <ul class="tm-blog-meta">
                                    <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                    <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incdidunt ut labore et dolore magna aliqua [....]</p>
                                <a href="blog-details.html" class="tm-readmore">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!--// Blog Single Item -->

                    <!-- Blog Single Item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-blog tm-scrollanim">
                            <div class="tm-blog-topside">
                                <div class="tm-blog-thumb">
                                    <img src="{{ asset('images/blog') }}/blog-image-3.jpg" alt="blog image">
                                </div>
                                <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                            </div>
                            <div class="tm-blog-content">
                                <h6 class="tm-blog-title"><a href="blog-details.html">Silver-colored tiara rings
                                        with clear
                                        gemstones</a></h6>
                                <ul class="tm-blog-meta">
                                    <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                    <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incdidunt ut labore et dolore magna aliqua [....]</p>
                                <a href="blog-details.html" class="tm-readmore">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!--// Blog Single Item -->

                    <!-- Blog Single Item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-blog tm-scrollanim">
                            <div class="tm-blog-topside">
                                <div class="tm-blog-thumb">
                                    <img src="{{ asset('images/blog') }}/blog-image-4.jpg" alt="blog image">
                                </div>
                                <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                            </div>
                            <div class="tm-blog-content">
                                <h6 class="tm-blog-title"><a href="blog-details.html">Diamond ring is worn on top of
                                        the
                                        engagement band</a></h6>
                                <ul class="tm-blog-meta">
                                    <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                    <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incdidunt ut labore et dolore magna aliqua [....]</p>
                                <a href="blog-details.html" class="tm-readmore">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!--// Blog Single Item -->

                    <!-- Blog Single Item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-blog tm-scrollanim">
                            <div class="tm-blog-topside">
                                <div class="tm-blog-thumb">
                                    <img src="{{ asset('images/blog') }}/blog-image-5.jpg" alt="blog image">
                                </div>
                                <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                            </div>
                            <div class="tm-blog-content">
                                <h6 class="tm-blog-title"><a href="blog-details.html">White gold engagement rings
                                        for
                                        couples</a></h6>
                                <ul class="tm-blog-meta">
                                    <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                    <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incdidunt ut labore et dolore magna aliqua [....]</p>
                                <a href="blog-details.html" class="tm-readmore">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!--// Blog Single Item -->

                </div>
            </div>
        </div>
        <!--// Latest Blogs Area -->

        <!-- Brand Logos -->
        <div class="tm-section tm-brandlogo-area tm-padding-section bg-grey">
            <div class="container">
                <div class="row tm-brandlogo-slider" style="height:100px">

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-1.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-2.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-3.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-4.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-5.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-1.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-2.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-3.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-4.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                    <!-- Brang Logo Single -->
                    <div class="col-12 tm-brandlogo">
                        <a href="#">
                            <img src="{{ asset('images/brandlogo-5.png') }}" alt="brand-logo">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->

                </div>
            </div>
        </div>
        <!--// Brand Logos -->

    </main>
    <!--// Page Content -->

    @include('layout.footer')

    <!-- Product Quickview -->
    <div class="tm-product-quickview" id="tm-product-quickview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-12">
                    <div class="tm-product-quickview-inner">

                        <!-- Product Details -->
                        <div class="tm-prodetails">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-10 col-12">
                                    <div class="tm-prodetails-images">
                                        <div class="tm-prodetails-largeimages">
                                            <div class="tm-prodetails-largeimage">
                                                <img src="{{ asset('images/products') }}/product-image-1.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="{{ asset('images/products') }}/product-image-2.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="{{ asset('images/products') }}/product-image-3.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="{{ asset('images/products') }}/product-image-4.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="{{ asset('images/products') }}/product-image-6.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-largeimage">
                                                <img src="{{ asset('images/products') }}/product-image-6.jpg"
                                                    alt="product image">
                                            </div>
                                        </div>
                                        <div class="tm-prodetails-thumbnails">
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="{{ asset('images/products') }}/product-image-1-thumb.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="{{ asset('images/products') }}/product-image-2-thumb.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="{{ asset('images/products') }}/product-image-3-thumb.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="{{ asset('images/products') }}/product-image-4-thumb.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="{{ asset('images/products') }}/product-image-5-thumb.jpg"
                                                    alt="product image">
                                            </div>
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="{{ asset('images/products') }}/product-image-6-thumb.jpg"
                                                    alt="product image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="tm-prodetails-content">
                                        <h4 class="tm-prodetails-title">Stylist daimond ring</h4>
                                        <span class="tm-prodetails-price"><del>$75.99</del> $59.99</span>
                                        <div class="tm-ratingbox">
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span><i class="ion-android-star-outline"></i></span>
                                        </div>
                                        <div class="tm-prodetails-infos">
                                            <div class="tm-prodetails-singleinfo">
                                                <b>Product ID : </b>010
                                            </div>
                                            <div class="tm-prodetails-singleinfo">
                                                <b>Category : </b><a href="#">Ring</a>
                                            </div>
                                            <div class="tm-prodetails-singleinfo tm-prodetails-tags">
                                                <b>Tags : </b>
                                                <ul>
                                                    <li><a href="#">bracelets</a></li>
                                                    <li><a href="#">diamond</a></li>
                                                    <li><a href="#">ring</a></li>
                                                    <li><a href="#">necklaces</a></li>
                                                </ul>
                                            </div>
                                            <div class="tm-prodetails-singleinfo">
                                                <b>Available : </b>
                                                <span class="color-theme">In Stock</span>
                                            </div>
                                            <div class="tm-prodetails-singleinfo tm-prodetails-share">
                                                <b>Share : </b>
                                                <ul>
                                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-social-skype-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-social-pinterest-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis quemi
                                            dolor, malesuada id metus a, mattis eleifend elit. Nullam pharetra
                                            consequat ex in dapibus. Vestibulum ante ipsum primis in faucibus
                                            orciluctus curae.</p>
                                        <div class="tm-prodetails-quantitycart">
                                            <h6>Quantity :</h6>
                                            <div class="tm-quantitybox">
                                                <input type="text" value="1">
                                            </div>
                                            <a href="#" class="tm-button tm-button-dark">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Product Details -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Product Quickview -->

    <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

</div>
<!--// Wrapper -->
@endsection