@extends('website.master')
@section('content')
<section>
<div class="logo">
    <img src="{{asset('assets/theme/img/logo-sm-white.svg') }}" class="tst-logo" alt="Tastyc">
</div>
    <div class="container">
        <div class="signup">
        <form action="{{route('user.postlogin')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2>Đăng Nhập Tài Khoản</h2>
            <div class="inputBox">
                <input type="text" name="email" >
                <label>Email hoặc số điện thoại</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" >
                <label>Mật khẩu</label>
            </div> 
            <div class="inputBox">
                <input class="gmail" type="submit" value="Login with Gmail">
                <input class="facebook" type="submit" value="Login with Facebook">
            </div>
            <div class="box">
                <div class="left">
                    <input class="login" type="submit" value="Đăng Nhập">
                </div>
                <div class="right">
                    <h6>Bạn chưa có tài khoản?</h6>
                        <a href="#">Đăng Ký</a>
                    <a href="#">Quên Mật Khẩu</a>
                </div>
            </div>
        </form> 
    </div>
</div>
</section>
@endsection