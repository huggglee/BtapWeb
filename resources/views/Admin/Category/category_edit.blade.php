@extends('Admin.admin_layout')
@section('admin_content')
    <div class="container">
        <h1>Cập nhật danh mục</h1>
        <form action="{{ route('category.update', $category) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : ''}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </div>
        </form>
    </div>
@endsection
