@extends('User.index')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/Frontend//css/giohang.css') }}">



    <div class="giohang">
        <div class="container">
            <div class="wrap">


                <div class="sanpham">
                    <div class="title-sanpham">
                        <div class="title">Thông tin sản phẩm</div>
                        <div class="title">Giá</div>
                        <div class="title">Số Lượng</div>
                        <div class="title">Tổng Cộng</div>
                    </div>
                    <div class="tt-sanpham">
                        <div class="hang-sanpham" style="display: flex;align-items: center;">
                            <div class="img-sanpham" style="position: relative">
                                <a href="" style="display: flex; align-items: center;">
                                    <img src="{{ asset('public/storage//images/bp-1.jpeg') }}" alt="">
                                    <div class="tensp">GK - 550CN040</div>
                                </a>
                                <div class="del" style="margin-left:10px ; ">
                                    <a href=""
                                        style="position: absolute; color:darkgray;top: 0;
                                left: 105px;
                                font-size: 20px;"
                                        class="del-x"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                            </div>
                            <div class="gia-sanpham">
                                <p>230.000</p>
                            </div>
                            <div class="sl-sanpham">
                                <div id="quantity-container">
                                    <a onclick="decreaseQuantity()"
                                        style="    border: 1px solid black;
                                width: 25px;
                                display: inline-block;
                                text-align: center;
                                font-size: 17px;
                                font-weight: bold;
                                margin-right: -5px;
                               cursor: pointer">-</a>
                                    <input min="0" type="number" id="quantity" value="1" style="padding:0;">
                                    <a onclick="increaseQuantity()"
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
                                <p>123321</p>
                            </div>
                        </div>
                    </div>
                    <div class="tt-sanpham">
                        <div class="hang-sanpham" style="display: flex;align-items: center;">
                            <div class="img-sanpham">
                                <a href="" style="display: flex; align-items: center;">
                                    <img src="asset/image/banphim/bp-1.jpeg" alt="">
                                    <div class="tensp">GK - 550CN040</div>
                                </a>
                            </div>
                            <div class="gia-sanpham">
                                <p>230.000</p>
                            </div>
                            <div class="sl-sanpham">
                                <div id="quantity-container">
                                    <button onclick="decreaseQuantity()">-</button>
                                    <input type="number" id="quantity" value="1">
                                    <button onclick="increaseQuantity()">+</button>
                                </div>
                            </div>
                            <div class="tong-sanpham">
                                <p>123321</p>
                            </div>
                        </div>
                    </div>
                    <div class="chucnang-sanpham">
                        <button class="tieptuc">
                            <a href="">Tiếp Tục Mua Hàng</a>
                        </button>
                        <button class="capnhat">Cập Nhật Giỏ Hàng</button>
                        <button class="xoa">Xóa Tất Cả Sản Phẩm</button>
                    </div>
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
                                <strong>123</strong>
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
                                <strong>123</strong>
                            </div>
                        </div>
                        <div class="tinhtien">
                            <button>TIến hành thanh toán</button>
                        </div>
                        <div class="the">
                            <h3>Chúng tôi chấp nhận thanh toán</h3>
                            <img src="../asset/image/payment.png" alt="">
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <script src="{{ asset('public/Frontend//js/spct.js') }}"></script>
@endsection
