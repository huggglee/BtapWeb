@extends('Admin.admin_layout')
@section('admin_content')
    <div class="container">
        <h1 class="text-center mt-5"> Thêm Mới Sản Phẩm</h1>
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name') ?old('name') : "" }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="category" class="form-label">Loại sản phẩm</label>
                <select class="form-select" id="category" name="category_id" required>
                    @foreach ($category as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="price" class="form-label">Giá Sản Phẩm</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price') ?old('price') : "" }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="image" class="form-label">Ảnh Mô Tả</label>
                <input class="form-control" type="file" id="image" name="image" multiple>
            </div>
            <div class="mb-3 form-group">
                <label for="description" class="form-label">Mô Tả</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </div>
        </form>
    </div>
@endsection
@section('custom-js')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
