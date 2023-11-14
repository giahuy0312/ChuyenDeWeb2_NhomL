<div class="container">
    <!-- Indexing -->
    <div class="col-9" style="padding-top: 50px;">
        <div class="title"><a href="">Trang Chủ </a> <span class="px-3"> > <span class="px-3 fs-3"> Thông tin tài
                    khoản</span></span></div>
        <!-- infoUser basic -->

        <div class="infoUser row">
            <div class="col">
                <h3 class="pt-4"><img src="/../images/user.png" alt=""> <span> {{ $user->name }} </h3></span>
            </div>
            <div class="col">
                <h3 style="padding-top:50px;">Mã khách hàng: {{ $user->id }}</h3>
            </div>

            <!-- form info detail -->
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row ps-3 pt-4">
                    <div class="col info">
                        <label for="username">Username</label> <br>
                        <input type="text" name="username" size="30" maxlength="50" required
                            style="background-image: url(/images/user.png);  background-size:35px 25px;background-position: left center 5px; background-repeat: no-repeat;padding-left:40px"
                            class="border border-dark rounded-pill" value="{{ $user->username }}"> <br> <br>
                        <label for="name">Họ tên</label> <br>
                        <input type="fullname" name="name" size="30" maxlength="50" required
                            style="background-image: url(/images/user.png);  background-size:35px 25px;background-position: left center 5px; background-repeat: no-repeat;padding-left:40px"
                            class="border border-dark rounded-pill" value="{{ $user->name }}"><br> <br>
                        <label for="phone">Số điện thoại</label> <br>
                        <input type="tel" name="phone" size="30" pattern="\d{10}" required
                            style="background-image: url(/images/phone.png); background-size:45px 25px; background-position: left center 3px; background-repeat: no-repeat;padding-left:40px"
                            class="border border-dark rounded-pill" value="{{ $user->phone }}"> <br> <br>
                        <label for="address">Địa chỉ</label> <br>
                        <input type="text" name="address" size="30"
                            style="background-image: url(/images/address.png); background-size:35px 20px; background-position: left 5px; background-repeat: no-repeat;padding-left:40px"
                            class="border border-dark rounded-pill" value="{{ $user->address }}">
                    </div>

                    <div class="col info">
                        <label for="password">Password</label> <br>
                        <input type="password" name="password" size="30" maxlength="20" required
                            style="background-image: url(/images/pass.png); background-size:25px 25px; background-position: left center 5px; background-repeat: no-repeat;padding-left:40px"
                            class="border border-dark rounded-pill" value="{{ $user->password }}"> <br> <br>
                        <label for="email">Email</label> <br>
                        <input type="email" name="email" size="30" maxlength="50" required
                            style="background-image: url(/images/email.png); background-size:20px 25px; background-position: left center 5px; background-repeat: no-repeat;padding-left:40px"
                            class="border border-dark rounded-pill" value="{{ $user->email }}"> <br> <br>
                        <label for="DOB">Ngày sinh</label> <br>
                        <input type="date" name="DOB" style="width: 317px; height:28px"
                            class="border border-dark rounded-pill" value="{{ $user->DOB }}"> <br> <br>
                        <label for="gender">Giới tính</label> <br>
                        <select name="gender" style="width: 317px; height:28px" class="border border-dark rounded-pill">
                            <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">