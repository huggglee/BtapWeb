@extends('User.index')
@section('content')
<link rel="stylesheet" href="{{asset('public/Frontend//css/style.css')}}">

<div class="content">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-lock col-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('index')}}">Trang chủ /</a></li>
                    <li><a href="#">/ Tra cứu</a></li>
                </ul>            
            <h3 class="text-center m-0">Tìm kiếm đơn hàng</h3>
            </div>
                <!-- menu-tc -->
            <div class="col-12 col-lg-3 col-md-3 col-sm-4 pl-lg-0">
                <div class="sidebar">
                    <div class="box-heading">
                        <p><i class="fa fa-bars" aria-hidden="true"></i>Quản lý tài khoản</p>
                    </div>
                    <div class="box-content">
                        <ul id="profileMenu">
                            <li><a rel="nofollow" href=""><i class="fa fa-fw fa-user" aria-hidden="true"></i> Trang cá nhân</a></li>
                            <li><a rel="nofollow" href=""><i class="fa fa-fw fa-wrench" aria-hidden="true"></i> Quản lý mật khẩu</a></li>
                            <li><a href=""><i class="fa fa-fw fa-envelope" aria-hidden="true"></i> Quản lý đơn hàng</a></li>
                            <li><a href=""><i class="fas fa-search-plus"></i> Tìm kiếm đơn hàng</a></li>
                            <li><a rel="nofollow" href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9 col-md-9 col-sm-8 profileRight pr-lg-0" style="margin-top: 30px;">
                <div id="pfView" class="orderView">
                    <form class="form-inline" id="frmIndexOrder" action="">
                        <div class="form-groups txtFill">
                            <input type="text" name="name" placeholder="Nhập mã số điện thoại hoặc email">
                        </div>
                        <div class="form-groups">
                            <button type="submit" class="btn-danger tp_button">Kiểm tra</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection