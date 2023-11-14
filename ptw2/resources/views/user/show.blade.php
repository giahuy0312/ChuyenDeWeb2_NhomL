@extends('layout.main')

@section('content')

@include('layout.header')
<div class="mainUser">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-3">
                <div class="titleLogo"><a href="">
                <img src="{{ asset('images/logo.png') }}" alt="" style="width: 150px; height: 170px;">
                    </a>
                </div>
                <!-- Menu User -->
                <div class="menuUser">
                    <p><br></p>
                    <p><a href=""> Thông tin tài khoản </a></p>
                    <p><a href=""> Mã giảm giá </a></p>
                    <p><a href=""> Lịch sử mua hàng </a></p>
                    <p> <img src="{{ asset('images/logout.png') }}" alt=""><a href="" style="color:red"> Đăng xuất </a></p>
                </div>
            </div>
            <!-- Indexing -->
            <div class="col-9" style="padding-top: 50px;">
                <div class="title"><a href="{{ url('index')}}">Trang Chủ </a> <span class="px-3 fs-3"> <span class="p-2">></span> Thông
                        tin tài khoản</span></div>
                <!-- infoUser basic -->

                <div class="infoUser row">
                    <div class="col">
                        <h3 class="pt-4"><img src="{{ asset('images/user.png') }}" alt=""> <span class="ps-4"> {{ $user->name }} </h3></span>
                    </div>
                    <div class="col">
                        <h3 style="padding-left:80px; padding-top:50px;margin-left:-55px">Mã khách hàng: {{ $user->id }}
                        </h3>
                    </div>

                    <!-- form info detail -->

                    <div class="row ps-3 pt-4">
                        <div class="col info">
                            <label for="username">Username</label> <br>
                            <p class="border border-dark rounded-pill"><i
                                    class="fa-light fa-user fa-xl"></i>{{ $user->username }} </p>
                            <label for="name">Họ tên</label> <br>
                            <p class="border border-dark rounded-pill"><i
                                    class="fa-light fa-user fa-xl"></i>{{ $user->name }}</p>
                            <label for="phone">Số điện thoại</label> <br>
                            <p class="border border-dark rounded-pill"><i
                                    class="fa-light fa-phone-volume fa-lg"></i>{{ $user->phone }} </p>
                            <label for="address">Địa chỉ</label> <br>
                            <p class="border border-dark rounded-pill"><i
                                    class="fa-sharp fa-light fa-location-dot fa-xl"></i> {{ $user->address }}</p>
                        </div>

                        <div class="col info">
                            <label for="password">Password</label> <br>
                            <input type="password" name="password" class="border border-dark rounded-pill"   
                                style="background-image: url({{ asset('images/pass.png') }});" size="20" maxlength="50" value=" {{ ($user->password) }}" disabled> <br>
                            <label for="email" style="padding-top:15px">Email</label> <br>
                            <p class="border border-dark rounded-pill"><i
                                    class="fa-light fa-envelope fa-xl"></i></i>{{ $user->email }} </p>
                            <label for="DOB">Ngày sinh</label> <br>
                            <p class="border border-dark rounded-pill"><i
                                    class="fa-light fa-calendar-days fa-xl"></i>{{ $user->DOB }} </p>
                            <label for="gender">Giới tính</label> <br>
                            <p class="border border-dark rounded-pill"><i
                                    class="fa-light fa-venus-mars fa-lg"></i></i>{{ $user->gender }} </p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col text-center">
                            <a href="{{ url('user/edit/1') }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
    href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">

