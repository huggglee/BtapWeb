@extends('Admin.admin_layout')
@section('admin_content')
    <div class="products">
        <div class="container">
            <div class="timkiem">
                <form class="form-inline" method="post" action="{{route('product.find')}}">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" name="search" placeholder="Tìm kiếm sản phẩm"
                            value="{{$search}}">
                    </div>
                    <button type="submit" class="btn btn-danger mb-2">Tìm kiếm</button>
                </form>
            </div>
            <a href="{{ route('product.create') }}" class="btn btn-danger mb-2">Thêm mới sản phẩm</a>

            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $value)
                        <tr class="table-light">
                            <th scope="row">{{ $value->id }}</th>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->category->name }}</td>
                            <td>{{ $value->price }}</td>
                            <td>
                                <img src="{{ asset('public/storage/images/' . $value->img) }}" alt=""
                                    width="150px">
                            </td>
                            <td>
                                <div class="row"><a href="{{ route('product.edit', $value) }}"
                                        class="btn btn-primary">Sửa</a>
                                    <form action="{{ route('product.destroy', $value) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Xóa</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {!! $product->links() !!}
                    </div>
                </tbody>
            </table>

        </div>
    </div>
@endsection
