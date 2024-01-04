@extends('User.index')
@section('content')
    <!-- section-2 -->
    <div class="section-2">
        <div class="container">
            <div class="row">
                <div class="home-policy">
                    <div class="row">
                        <div class="col-md-4 col-12 item-policy">
                            <p><img alt=""
                                    src="https://pos.nvncdn.com/26be7c-108267/contentKey/20220309_yLVCDg8fDyiU.png"
                                    style="width:100px;height:100px;"></p>
                            <div class="info a-left">
                                <h5>Sản phẩm chính hãng</h5>
                                <p></p>
                                <p><span
                                        style="font-family:Roboto, '-apple-system', BlinkMacSystemFont, Roboto, HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif, 'Segoe UI', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';font-size:14px;">Hoàn
                                        trả giá trị sản phẩm nếu phát hiện hàng giả, hàng nhái</span></p>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 item-policy">
                            <p><img alt=""
                                    src="https://pos.nvncdn.com/26be7c-108267/contentKey/20220309_CfYd6mS7GR49.png"
                                    style="width:100px;height:100px;"></p>
                            <div class="info a-left">
                                <h5>Vận chuyển toàn quốc</h5>
                                <p></p>
                                <p>Sẵn sàng phục vụ vận chuyển trên 63 tỉnh thành của cả nước.</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 item-policy">
                            <p><img alt=""
                                    src="https://pos.nvncdn.com/26be7c-108267/contentKey/20220309_NImfzZlSaXKD.png"
                                    style="width:100px;height:100px;"></p>
                            <div class="info a-left">
                                <h5>Xem hàng trước khi thanh toán</h5>
                                <p></p>
                                <p>Đảm bảo quyền lợi của quý khách với hình thức xem hàng trước , thanh toán sau.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- end-section-2 -->



    <!-- product -->
    <div class="product">
        <div class="container">
            <div class="banphim">
                @foreach ($categories as $category)
                    <div class="row">
                        <h2 class="title text-uppercase font-weight-bold d-inline-block">{{$category->name }}</h2>
                    </div>
                    <div class="list-product">
                        <div class="row">
                            @foreach ($category->products as $product)
                                @if ($loop->iteration <= 4)
                                    <div class="col-md-3">
                                        <a href="{{route('spct',$product->id)}}">
                                            <img class="d-block w-100"
                                                src="{{ asset('public/storage//images/' . $product->img) }}" alt="">
                                            <h3>
                                                {{ $product->name }}
                                            </h3>
                                            <strong class="price">{{ number_format($product->price) }}₫</strong>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="xemthem"><a href="{{route('show.product',$category->id)}}">Xem thêm</a></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
