@extends('Admin.admin_layout')
@section('admin_content')

<div class="products">
    <div class="container">
        {{-- <a href="" class="btn btn-danger mb-2">Thêm mới danh mục</a> --}}
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </div>
        </form>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $value)
                <tr class="table-light">
                    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->name}}</td>
                    <td><div class="row">
                        <a href="{{route('category.edit',$value)}}" class="btn btn-primary">Sửa</a>
                        <form action="{{route('category.destroy',$value)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Xóa</button>
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection