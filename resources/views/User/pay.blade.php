@extends('User.index')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/Frontend//css/giohang.css') }}">
    <div class="form-tt" style="padding: 40px 0;">
        <div class="container">
          <div class="row">
            <div class="col-8">
                <form action="{{route('cart.paid')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="hovaten">Họ và tên</label>
                            <input type="text" name="name" class="form-control" id="hovaten">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sdt">Số điện thoại</label>
                            <input type="phone" name="phone" class="form-control" id="sdt">
                        </div>
                    </div>                 
                    <div class="form-group">
                        <label for="diachi">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" id="diachi">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Thông tin bổ sung</label>
                        <textarea class="form-control" name="add_infor" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"
                        style="padding: 12px;
                color: white;
                background-color: #ef6a6f;
                border: none;
                font-weight: 600;
                width: 180px;">Đặt
                        hàng</button>
                </form>
            </div>
            <div class="col-4">
                <div class="thanhtoan" style="width:100%">
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
                        <div class="the">
                            <h3 style="padding-bottom: 5px;font-weight:bold">Chúng tôi chấp nhận thanh toán</h3>
                            <img src="{{ asset('public/Frontend//image/payment_2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>









    
@endsection
