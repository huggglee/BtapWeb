@extends('User.index')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/Frontend//css/spct.css') }}">

    <div class="sanpham">
        <div class="container">
            <div class="title-iteam" style="padding: 25px 0;">
                <ul class="row">
                    <li><a href="{{ route('index') }}"><span>Trang chủ</span></a></li>
                    <li><i class="fa-solid fa-circle"></i>
                        <a href="#"><span>Linh kiện</span></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle"></i>
                        <a href="{{ route('show.product', $product->category_id) }}">{{ $product->category->name }}</a>
                    </li>
                </ul>
            </div>
            <div class="sp">
                <div class="row">
                    <div class="col-7">
                        <div class="anh">
                            <img src="{{ asset('public/storage//images/' . $product->img) }}" alt=""
                                style="height: 500px;">
                        </div>
                    </div>
                    <div class="col-5" style="padding-top: 50px;">
                        <h1 class="title-sp">
                            {{ $product->name }}
                        </h1>
                        <div class="gia-sp">
                            {{ number_format($product->price) }}đ
                        </div>
                        <ul class="row ship-sp" style="margin-left: 3px;">
                            <li style="margin-right: 15px;"><i class="fa-solid fa-truck-fast"></i></li>
                            <li>Miễn phí giao hàng từ 500k ( vận chuyển 3 - 5 ngày )</li>
                        </ul>

                        <form action="{{ route('cart.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <div class="sl-sanpham" style=" padding: 30px 0px;">
                                <div id="quantity-container">
                                    <a onclick="decreaseQuantity({{$product->id}})"
                                        style="    border: 1px solid black;
                        width: 25px;
                        display: inline-block;
                        text-align: center;
                        font-size: 16px;
                        font-weight: bold;
                        margin-right: -5px;
                       cursor: pointer">-</a>
                                    <input min="0" type="number" name="quantity" id="{{$product->id}}" value="1"
                                        style="padding:0;border:1px solid;
                            width: 50px;
                            text-align: center;">
                                    <a onclick="increaseQuantity({{$product->id}})"
                                        style="    border: 1px solid black;
                        width: 25px;
                        display: inline-block;
                        text-align: center;
                        font-size: 16px;
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
                {!! $product->description !!}
            </div>
        </div>

    </div>
    <script src="{{ asset('public/Frontend//js/spct.js') }}"></script>
@endsection
