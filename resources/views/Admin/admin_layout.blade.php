<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('public/backend/admin/css/style.css') }}">
    <title>Admin</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row wrap">
                <div class="title-admin">
                    <a href="{{ route('admin.dashboard') }}">Admin</a>
                </div>
                <div class="row">
                    <div class="menu">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa-solid fa-gauge"></i>
                            <div>Trang chủ</div>
                        </a>
                    </div>
                    <div class="menu">
                        <a href="{{ route('account.index') }}">
                            <i class="fa-solid fa-user"></i>
                            <div class="menu1">Quản lý tài khoản</div>
                            <div>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('account.index') }}">Quản lý admin</a></li>
                                    <li><a href="">Quản lý người dùng</a></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="menu">
                        <a href="{{ route('category.index') }}">
                            <i class="fa-solid fa-list"></i>
                            <div>Quản lý danh mục</div>
                        </a>
                    </div>
                    <div class="menu">
                        <a href="{{ route('product.index') }}">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <div class="menu1">Quản lý sản phẩm
                            </div>
                        </a>
                    </div>
                    <div class="menu">
                        <div class="logout" style="font-size: 25px;">
                            <i class="fa-solid fa-user-tie" style="color: #fff;"></i>
                            <a href="" style="margin-right:8px;">
                                <?php
                                $name = Session()->get('admin_username');
                                echo $name;
                                ?>
                            </a>
                            <a href="{{ route('admin.logout') }}"><i class="fa-solid fa-right-from-bracket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    @yield('admin_content')
    <!-- end content -->

    <footer>
        <div class="content">
            <div>Design by:HQHT</div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    @yield('custom-js')
</body>

</html>
