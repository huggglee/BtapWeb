@extends('User.index')
@section('content')
<link rel="stylesheet" href="{{asset('public/Frontend//css/style.css')}}">

<!-- menu-content  -->
<div class="content-menu">
    <div class="container">
        <div class="row">
            <!-- index -->
            <div class="breadcrumb-lock col-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}">Trang chủ /</a>
                    </li>
                    <li>
                        <a href="#">/ Tin tức</a>
                    </li>
                </ul>            
            </div>
        </div>
    </div>
</div>
<!-- end menu-content -->
<!-- conten-new -->
<div class="content-new">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 tab-list-news">
                <!-- conten-new-1 -->
                <div class="container text-new">
                <h3>Tất cả bài viết</h3>         
                  <div class="container ">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://i1-sohoa.vnecdn.net/2023/12/28/409770354403593105358389545501-3358-4094-1703735513.jpg?w=240&h=144&q=100&dpr=1&fit=crop&s=kg1oeVotPTQ6Ca2pxiOpKw" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Loạt camera an ninh giảm giá đến 50% tại Tech Awards 2023</h4></a>
                        <p>Ngoài những phần quà check-in, người tham dự Tech Awards còn có thể nhận ưu đãi giảm giá 40-50% cho một số mẫu camera an ninh gia đình. </p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/29/avatar1703821134074-1703821134561562651437.jpg" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>10 báu vật phi thường được khai quật trong năm 2023</h4></a>
                        <p>Kho tiền vàng, bạc, những đồ trang sức được thiết kế phức tạp… là những kho báu quý hiếm được phát hiện năm 2023.Kho tiền vàng, bạc, những đồ trang sức được thiết kế phức tạp… là những kho báu quý hiếm được phát hiện năm 2023.</p>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://genk.mediacdn.vn/thumb_w/640/139269124445442048/2023/12/30/tecno-spark-20-pro-plus-design-1703931466227-1703931467241571980961.jpg" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Điện thoại này có mặt lưng giống realme, màn hình "Dynamic Island" giống iPhone</h4></a>
                        <p>Tecno Spark 20 Pro+ có thiết kế ngoại hình khá cao cấp, phần cứng ổn nhưng chưa rõ giá bán.</p>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/29/avatar1703843168360-1703843168734469070435.jpg" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Tìm ra loại kháng sinh mới đầu tiên sau hơn 60 năm nhờ AI</h4></a>
                        <p>Một loại kháng sinh mới chống lại vi khuẩn Staphylococcus Aureus (MRSA) có khả năng kháng thuốc đã được tìm ra nhờ sử dụng các mô hình AI.</p>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/29/avatar1703843058319-1703843058598988622425.png" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Cách nhận biết các phần mềm giả mạo</h4></a>
                        <p>Các phần mềm giả mạo dùng đủ các chiêu trò để dụ dỗ người dùng cài lên máy, từ đó dẫn đến nhiều rủi ro về tấn công mạng, đánh cắp thông tin, tài khoản.</p>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/29/rtx4090d-1200x624-17038471686281459841293-0-112-624-1110-crop-1703847173614948822385.jpg" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Bị Mỹ cấm cản, NVIDIA "vượt rào" ra mắt card màn hình dành riêng cho người Trung Quốc: Có điểm gì khác biệt?</h4></a>
                        <p>Tecno Spark 20 Pro+ có thiết kế ngoại hình khá cao cấp, phần cứng ổn nhưng chưa rõ giá bán.</p>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://channel.mediacdn.vn/428462621602512896/2023/12/28/photo1703735469100-17037354692631105352134.png" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Lựa chọn laptop cho Gen Z chưa bao giờ đơn giản đến thế</h4></a>
                        <p>Vẻ ngoài mỏng nhẹ để đem đi mọi nơi, cấu hình mạnh và pin dùng cả ngày, tất cả liệu có đạt được trong chỉ 1 sản phẩm?</p>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/30/untitled-17038178008271977653653-1703899046337-1703899046470786816319-66-0-816-1200-crop-17038998924341825174441.jpg" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Trái Đất nhận tín hiệu sốc: "Zombie kép" đang bắn ra vàng</h4></a>
                        <p>Nguồn gốc và bản chất gây sốc của một tín hiệu ''dội bom" từ nơi cách xa Trái Đất tới 130 triệu năm ánh sáng vừa được các nhà khoa học giải mã thành công.</pclass=>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://channel.mediacdn.vn/428462621602512896/2023/12/29/photo1703851628709-1703851629215778456689.jpg" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Đây là lý do màn hình máy tính cong vẫn được ưa chuộng dù TV màn hình cong đã hết trend</h4></a>
                        <p >Mang đến trải nghiệm đắm chìm và thuận mắt, màn hình máy tính cong vẫn là lựa chọn được nhiều người dùng ưu tiên nhờ khả năng xử lý đa nhiệm từ làm việc tới giải trí.</p>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <a href=""><img class="new-1" src="https://kenh14cdn.com/zoom/280_175/pr/2023/photo1698050800568-16980508048062035610573-63833677001631.jpg" alt="by website">
                      </div>
                      <div class="col-md-6">
                        <h4>Vinmec Dương Đông - Điểm sáng y tế mới tại đảo Phú Quốc</h4></a>
                        <p>Phòng khám Đa khoa Quốc tế Vinmec Dương Đông của Tập đoàn Vingroup vừa chính thức khai trương tại Phú Quốc.</p>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
            <!-- content-new-2 -->
            <div class="col-12 col-md-4 tab-most-view">
                <div class="container">
                    <h3>Bài viết mới</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href=""><img class="new-2" src="https://channel.mediacdn.vn/428462621602512896/2023/12/28/photo1703759524757-1703759524866788868614.jpg" alt="by website">
                        </div>
                        <div class="col-md-6">
                            <p>ShopeeFood khép lại 2023 với nhiều cột mốc tăng trưởng ấn tượng </p></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href=" https://genk.vn/nhung-cot-moc-lich-su-khong-gian-an-tuong-nam-2023-20231228183855771.chn"><img class="new-2" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/28/avatar1703763347252-1703763348561737029513.png" alt="by website">
                        </div>
                        <div class="col-md-6">
                            <p>Những cột mốc lịch sử không gian ấn tượng năm 2023</p></a>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href=""><img class="new-2" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/29/avatar1703838960859-17038389618851957332958.jpg" alt="by website">
                        </div>
                        <div class="col-md-6">
                            <p>Xu hướng sử dụng xe đạp điện chở hàng tại châu Âu </p></a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="container">
                    <h3>Bài viết xem nhiều</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href=""><img class="new-2" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/30/avatar1703905932784-1703905934813332869291.jpg" alt="by website">
                        </div>
                        <div class="col-md-6">
                            <p>Việt Nam đạt độ phủ sóng 4G tới 99,8% </p></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href=""><img class="new-2" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/29/avatar1703843058319-1703843058598988622425.png" alt="by website">
                        </div>
                        <div class="col-md-6">
                            <p>Cách nhận biết các phần mềm giả mạo</p></a>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href=""><img class="new-2" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/12/29/avatar1703838960859-17038389618851957332958.jpg" alt="by website">
                        </div>
                        <div class="col-md-6">
                            <p>Xu hướng sử dụng xe đạp điện chở hàng tại châu Âu </p></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end conten-new-2 -->
        </div>
    </div>
</div>
<!-- end content-new -->

@endsection