@extends('User.index')
@section('content')






<div class="form-tt" style="padding: 40px 0;">
    <div class="container">
        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="hovaten">Họ và tên</label>
                <input type="text" class="form-control" id="hovaten">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="sdt">Số điện thoại</label>
                  <input type="number" class="form-control" id="sdt">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Địa chỉ Email của bạn</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div> 
            <div class="form-group">
              <label for="diachi">Địa chỉ</label>
              <input type="text" class="form-control" id="diachi" placeholder="1234 Quang Tri">
            </div>              
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Thông tin bổ sung</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <button type="submit" class="btn btn-primary" style="padding: 12px;
            color: white;
            background-color: #ef6a6f;
            border: none;
            font-weight: 600;
            width: 180px;">Đặt hàng</button>
          </form>
    </div>
</div>


   
@endsection
