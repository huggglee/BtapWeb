@extends('User.index')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/Frontend//css/giohang.css') }}">
    <div class="giohang">
        <div class="container">
            <div class="wrap">
                @if (session('cart'))
                    <div class="sanpham">
                        <form action="{{ route('cart.update') }}" method="post">
                            @csrf
                            <div class="title-sanpham">
                                <div class="title">Thông tin sản phẩm</div>
                                <div class="title">Giá</div>
                                <div class="title">Số Lượng</div>
                                <div class="title">Tổng Cộng</div>
                            </div>
                            @foreach ($cart->list() as $value)
                                <div class="tt-sanpham">
                                    <div class="hang-sanpham" style="display: flex;align-items: center;">
                                        <div class="img-sanpham" style="position: relative">
                                            <a href="{{ route('spct', $value['productID']) }}"
                                                style="display: flex; align-items: center;">
                                                <img src="{{ asset('public/storage//images/' . $value['img']) }}"
                                                    alt="">
                                                <div class="tensp">{{ $value['name'] }}</div>
                                            </a>
                                            <div class="del" style="margin-left:10px ; ">
                                                <a href="{{ route('cart.delete', $value['productID']) }}"
                                                    style="position: absolute; color:darkgray;top: 0;
                                        left: 105px;
                                        font-size: 20px;"
                                                    class="del-x"><i class="fa-solid fa-xmark"></i></a>
                                            </div>
                                        </div>
                                        <div class="gia-sanpham">
                                            <p>{{ number_format($value['price']) }}</p>
                                        </div>
                                        <div class="sl-sanpham">
                                            <div id="quantity-container">
                                                <a onclick="decreaseQuantity({{ $value['productID'] }})"
                                                    style="    border: 1px solid black;
                                    width: 25px;
                                    display: inline-block;
                                    text-align: center;
                                    font-size: 17px;
                                    font-weight: bold;
                                    margin-right: -5px;
                                    cursor: pointer">-</a>
                                                <input min="0" type="number"
                                                    name="product[{{ $value['productID'] }}]" id="{{ $value['productID'] }}"
                                                    value="{{ $value['quantity'] }}"
                                                    style="padding:0;    padding: 0;
                                        width: 50px;
                                        text-align: center;">
                                                <a onclick="increaseQuantity('{{ $value['productID'] }}')"
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
                                        <div class="tong-sanpham">
                                            <p>{{ number_format($value['quantity'] * $value['price']) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="chucnang-sanpham">
                                <a href="{{ route('index') }}" class="tieptuc"
                                    style="padding: 12px;
                                    color: white;
                                    background-color: #81C8C2;
                                    border: none;
                                    font-weight: 600;">Tiếp
                                    Tục Mua Hàng</a>
                                <button class="capnhat" style="background-color: #81C8C2">Cập Nhật Giỏ Hàng</button>
                                <a href="{{ route('cart.deleteAll') }}"
                                    style="padding: 12px;
                                    color: white;
                                    background-color: red;
                                    border: none;
                                    font-weight: 600;">Xóa
                                    tất cả sản phẩm</a>
                            </div>
                        </form>
                    </div>
                    <div class="thanhtoan">
                        <div class="tt-thanhtoan">
                            <div class="tieude">
                                <h3>Thông Tin Thanh Toán</h3>
                            </div>
                            <div class="tamtinh"
                                style="display: flex;
                            align-items: center;
                            justify-content: space-between;">
                                <h3>
                                    Tạm Tính
                                </h3>
                                <div class="gia">
                                    <strong>{{ number_format($cart->totalPrice()) }}</strong>
                                </div>
                            </div>
                            <div class="tong"
                                style="display: flex;
                            align-items: center;
                            justify-content: space-between;">
                                <h3>
                                    Tổng
                                </h3>
                                <div class="gia">
                                    <strong>{{ number_format($cart->totalPrice()) }}</strong>
                                </div>
                            </div>
                            <div class="tinhtien">
                                <button><a href="{{ route('cart.pay') }}">Tiến hành thanh toán</a></button>
                            </div>
                            <div class="the">
                                <h3>Chúng tôi chấp nhận thanh toán</h3>
                                <img src="{{ asset('public/Frontend//image/payment_2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                @else
                    <h2>Chưa có sản phẩm nào trong giỏ hàng</h2>
                @endif
            </div>
        </div>
    </div>


    <script src="{{ asset('public/Frontend//js/spct.js') }}"></script>
@endsection
