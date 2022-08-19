@extends('website.master')
@section('content')
<body>
<div class="logo">
    <img src="{{asset('assets/theme/img/logo-sm-white.svg') }}" class="tst-logo" alt="Tastyc">
</div>
    <div class="container">
        <div class="signup">
            <form action="{{route('user.postregister')}}" method="post" enctype="multipart/form-data">
                @csrf
        <h2>Đăng Ký Tài Khoản</h2>
            <div class="inputBox">
                <input type="text" name="fullname" >
                <label>Họ và Tên</label>
            </div>
            <div class="inputBox">
                <input type="text" name="email" >
                <label>Email</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" >
                <label>Mật Khẩu</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password_confirmation" >
                <label>Xác Thực Mật Khẩu</label>
            </div>
            <div class="inputBox">
                <input type="text" name="phone" >
                <label>Số Điện Thoại</label>
            </div> 
            <div class="box">
                <div class="left">
                    <input class="login" type="submit" value="Đăng Ký">
                </div>
                <div class="right">
                    <h6>Bạn đã có tài khoản?</h6>
                        <a href="#">Đăng Nhập</a>
                    <a href="#">Quên Mật Khẩu</a>
                </div>
            </div>
        </form> 
        </div>
    </div>
</section>
@endsection