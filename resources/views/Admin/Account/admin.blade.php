@extends('Admin.admin_layout')
@section('admin_content')
<div class="products">
    <div class="container">
        <div class="timkiem">
            <form class="form-inline" method="post" action="{{route('product.find')}}">
                @csrf
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" name="search" placeholder="Tìm kiếm">
                </div>
                <button type="submit" class="btn btn-danger mb-2">Tìm kiếm</button>
            </form>
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tài khoản</th>
                    <th scope="col">Mật khẩu</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $value)
                <tr class="table-light">
                    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->username}}</td>
                    <td>{{$value->password}}</td>
                    <td>
                        <div class="row"><a href="{{route('product.edit',$value)}}" class="btn btn-primary" style="margin-right: 10px;">Sửa</a>
                        <form action="{{route('product.destroy',$value)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Xóa</button>
                        </form></div>
                    </td>
                </tr>
                @endforeach
                <div class="d-flex justify-content-center">
                    {!! $data->links() !!}
                </div>
            </tbody>
        </table>

    </div>
</div>
@endsection