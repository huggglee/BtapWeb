<!-- header -->
<div class="header">
    <div class="container">
        <div class="content-header">
            <div class="row align-items-center" style="justify-content: space-between;">
                <div class="header-logo">
                    <a href="">
                        <img src="https://pos.nvncdn.com/26be7c-108267/store/20211001_drDdKcUKHoG0paeW6h9xKvP7.png"
                            alt="">
                    </a>
                </div>
                <div class="header-search">
                    <form action="" method="get" class="header-form">
                        <input type="text" placeholder="Tìm kiếm sản phẩm bạn muốn mua tại đây">
                        <button type="button" class="btn btn-danger"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="header-shop">
                    <ul class="d-flex align-items-center m-0">
                        <li class="box-user d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-user"></i>
                            <ul>
                                @if (Auth::check())
                                    <li><a href="" class="font-weight-bold">Xin chào {{ Auth::user()->name }}</a>
                                    </li>
                                    <li><a href="{{ route('user.logout') }}">Đăng xuất</a></li>
                                @else
                                    <li><a href="{{ route('user.register') }}">Đăng ký / </a>
                                        <a href="{{ route('user.login') }}">Đăng nhập</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        <li class="box-user d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <ul>
                                <li><a href="" class="font-weight-bold">Giỏ hàng</a></li>
                                <li><a href="">Vận chuyển toàn quốc</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end header -->
<!-- section-1 -->
<div class="section-1">
    <div class="container" style="padding: 0;">
        <div class="row" style="border: 1px solid #eb1c24;">
            <div class="cate-title">
                <p class="m-0 pt-2 pb-2 d-none d-lg-block">
                    <i class="fa-solid fa-bars"></i>
                    <span class="ml-1 text-uppercase">Danh mục sản phẩm</span>
                </p>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Tin tức</a></li>
                    <li><a href="">Tra cứu đơn hàng</a></li>
                    <li><a href="">Tuyển dụng</a></li>
                </ul>
            </div>
        </div>
        <div class="tab">
            <div class="wrap-tab row">
                <div class="tab-menu">
                    <ul>
                        @foreach ($categories as $category)
                        <li>
                            <a href="{{route('show.product',$category->id)}}">{{$category->name}}<i class="fa-solid fa-computer-mouse"></i></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="img-menu">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('public/Frontend//image/bia-3.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('public/Frontend//image/bia-2.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('public/Frontend//image/bia-1.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end section-1 -->
