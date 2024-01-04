@extends('Admin.admin_layout')
@section('admin_content')
    <link rel="stylesheet" href="{{ asset('public/backend//admin/css/order.css') }}">
    <!-- order-->
    <div class="products">

        <div class="container">

            <div class="timkiem">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" placeholder="Timkiem">
                    </div>
                    <button type="submit" class="btn btn-danger mb-2">Tìm kiếm</button>
                </form>
            </div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Người đặt hàng</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Giá</th>
                    </tr>
                </thead>
                <tbody style="background: #fff;">
                    @foreach ($order as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->cus_name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->price }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Tổng:</td>
                        <td>{{number_format($totalPrice)}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>


    <!--end order-->
@endsection
