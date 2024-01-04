@extends('User.index')
@section('content')
<link rel="stylesheet" href="{{asset('public/Frontend//css/spct.css')}}">

<div class="sanpham">
    <div class="container">
        <div class="title-iteam" style="padding: 25px 0;">
            <ul class="row">
                <li><span>Trang chủ</span></li>
                <li><i class="fa-solid fa-circle"></i>
                    <span>Linh kiện</span></li>
                <li>
                    <i class="fa-solid fa-circle"></i>
                    <a href="">Bàn phím</a></li>
            </ul>
        </div>
        <div class="sp">
            <div class="row">
                <div class="col-7">
                    <div class="anh">
                        <img src="{{asset('public/storage//images/bp-1.jpeg')}}" alt="" style="height: 500px;">
                    </div>
                </div>
                <div class="col-5" style="padding-top: 50px;">
                    <h1 class="title-sp">
                        Bàn phím
                    </h1>
                    <div class="gia-sp">
                        250000
                    </div>
                    <ul class="row ship-sp" style="margin-left: 3px;">
                        <li style="margin-right: 15px;"><i class="fa-solid fa-truck-fast"></i></li>
                        <li>Miễn phí giao hàng từ 500k ( vận chuyển 3 - 5 ngày )</li>
                    </ul>

                    <form method="post">

                        <input type="hidden" name="id" value="">
                        <div class="sl-sanpham" style=" padding: 30px 0px;">
                            <div id="quantity-container">
                                <a onclick="decreaseQuantity('quantity1')"
                                    style="    border: 1px solid black;
                        width: 25px;
                        display: inline-block;
                        text-align: center;
                        font-size: 17px;
                        font-weight: bold;
                        margin-right: -5px;
                       cursor: pointer">-</a>
                                <input min="0" type="number" id="quantity1" value="1"
                                    style="padding:0;    padding: 0;
                            width: 50px;
                            text-align: center;">
                                <a onclick="increaseQuantity('quantity1')"
                                    style="    border: 1px solid black;
                        width: 25px;
                        display: inline-block;
                        text-align: center;
                        font-size: 17px;
                        font-weight: bold;
                        margin-left: -6px;
border-left: none; cursor: pointer">+</a>
                            </div>
                        </div>
                        <button type="submit" class="themgh">Thêm Vào Giỏ Hàng</button>
                    </form>
                    <div style="padding: 38px 0;">
                        <div class="ngan" style="border: 1px solid #00000026;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mota">
            <h2 class="title text-uppercase font-weight-bold d-inline-block">Mô tả</h2>
            <ul>
                <li>
                    Chịu trách nhiệm sản phẩm: Công Ty TNHH Dịch vụ và Thương mại Anna Việt Nam
                </li>
                <li>
                    Chịu trách nhiệm sản phẩm: Công Ty TNHH Dịch vụ và Thương mại Anna Việt Nam
                </li>
            </ul>
        </div>
    </div>
   
</div>
<script src="{{asset('public/Frontend//js/spct.js')}}"></script>

@endsection