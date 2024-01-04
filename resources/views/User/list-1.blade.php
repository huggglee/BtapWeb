@extends('User.index')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/Frontend//css/list.css') }}">
    <!-- ban phim -->

    <div class="product">
        <div class="container">
            <div class="banphim">
                <div class="row">
                    <h2 class="title text-uppercase font-weight-bold d-inline-block">{{ $category->name }}</h2>
                </div>
                <div class="list-product">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-3 kc">
                                <div class="anh">
                                    <a href="{{route('spct',$product->id)}}"><img src="{{ asset('public/storage//images/' . $product->img) }}"
                                            alt=""></a>
                                </div>
                                <div class="tensp">
                                    {{ $product->name }}
                                </div>
                                <div class="gia">
                                    {{ number_format($product->price) }}đ
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ban phim -->
@endsection
