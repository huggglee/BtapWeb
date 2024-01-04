@extends('Admin.admin_layout')
@section('admin_content')
    <div class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="box-1 a" style="background: #ef6a6f;">
                        <div class="title">Số đơn hàng đã thực hiện</div>
                        <div class="content" style="font-size: 50px">{{ $totalOrder }}</div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-1 b" style=" background:#00d18b;">
                        <div class="title">Số sản phẩm đã bán được</div>
                        <div class="content" style="font-size: 50px">{{ $totalQuantity }}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box-1 c">
                        <div class="title">Doanh thu đạt được</div>
                        <div class="content" style="font-size: 35px">{{ number_format($totalPrice) }}đ</div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-1 d" style="background: rgba(0,123,255,.5)">
                        <div class="title">Sản phẩm bán chạy nhất</div>
                        <div class="content">{{ $bestSellingProductInfo->name }} </div>
                        <div class="content">Số lượng bán ra:{{ $best_quan }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
