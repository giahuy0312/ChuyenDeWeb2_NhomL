<script src="https://kit.fontawesome.com/67ff6e11b9.js" crossorigin="anonymous"></script>
<!-- Header -->
<div class="tm-header tm-header-sticky">

    <!-- Header Top Area -->
    <div class="tm-header-toparea bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <ul class="tm-header-info">
                        <li><a href="tel:123456789"><i class="ion-ios-telephone"></i>1900 111 999 </a></li>
                        <li><a href="mailto:contact@example.com"><i class="ion-android-mail"></i>Luxury</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="tm-header-options">
                        <div class="tm-dropdown tm-header-links">
                            <button><i class="fa-regular fa-user"></i></button>
                            <ul>
                                @if (Route::has('login'))
                                @auth
                                @if (!isset($_SESSION))
                                <?php session_start(); ?>
                                <li>{{ $_SESSION['user_id'] }}</li>
                                @endif
                                @if (isset($_SESSION['user_id']))
                                <li><a href="{{ url('user/' . $_SESSION['user_id']) }}">My Account</a></li>
                                @endif
                                <li> <a href="{{ route('logout') }}">
                                        Logout
                                    </a></li>
                                @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endauth
                                @endif
                                <li><a href="{{ url('order') }}">Shopping Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>

                        <div class="tm-dropdown tm-header-currency">
                            <button>USD</button>
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">JPY</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </div>
                        <div class="tm-dropdown tm-header-language">
                            <button><img src="{{ asset('images/flag-english.png') }}" alt="language">English</button>
                            <ul>
                                <li><a href="#"><img src="{{ asset('images/flag-english.png') }}"
                                            alt="language">English</a></li>
                                <li><a href="#"><img src="{{ asset('images/flag-spain.png') }}"
                                            alt="language">Spanish</a></li>
                                <li><a href="#"><img src="{{ asset('images/flag-russian.png') }}"
                                            alt="language">Russian</a></li>
                                <li><a href="#"><img src="{{ asset('images/flag-french.png') }}"
                                            alt="language">French</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Header Top Area -->

    <!-- Header Middle Area -->
    <div class="tm-header-middlearea bg-white">
        <div class="container">
            <div class="tm-mobilenav"></div>
            <div class="row align-items-center">
                <div class="col-lg-3 col-6 order-1 order-lg-1">
                    <a href="{{ url('/home') }}" class="tm-header-logo">
                        <img src="{{ asset('images/logo.png') }}" alt="surose">
                    </a>
                </div>
                <div class="col-lg-6 col-12 order-3 order-lg-2">
                    <form class="tm-header-search" action="{{url('/searchProduct')}}" method="GET">
                        @csrf
                         <input type="text" name="keyword" placeholder="Search product"> 
                        <!-- @error('keyword') 
                         <p style="color: red;">{{$message}}</p>
                        @enderror -->
                        <button><i class="ion-android-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 col-6 order-2 order-lg-3">
                    <ul class="tm-header-icons">
                        <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i><span>0</span></a></li>
                        <li><a href="{{ url('order') }}"><i class="ion-bag"></i><span>0</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Header Middle Area -->

    <!-- Header Bottom Area -->
    <div class="tm-header-bottomarea bg-white">
        <div class="container">
            <nav class="tm-header-nav">
                <ul>
                    <li><a href="{{ url('/home') }}">Trang Chủ</a></li>
                    <li><a href="{{url('/shop') }}">Nhẫn Cưới</a></li>
                    <li><a href="{{url('/shopproducts')}}">Nhẫn Cầu hôn</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--// Header Bottom Area -->

</div>
<!--// Header -->