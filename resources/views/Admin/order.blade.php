@extends('Admin.admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend//admin/css/order.css')}}">
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
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Trạng thái</th>
                    </tr>
                </thead>
                <tbody style="background: #fff;">
                    <tr>
                        <td scope="row">1</td>
                        <td class="row" style="padding-left: 25px;"><p style="width: 30%;overflow-wrap: break-word;">bnbnb ansnansn asnnasnans asnans </p>
                            <img style="width: 140px;height: 100px;" src="https://cdn.tgdd.vn/Products/Images/4547/273015/khong-day-dareu-ek807g-thumb2-600x600.jpeg" alt="">
                        </td>
                        <td>Aó</td>
                        <td>23</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>


    <!--end order-->
@endsection