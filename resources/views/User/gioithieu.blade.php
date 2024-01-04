@extends('User.index')
@section('content')

<!-- menu-content  -->
<div class="content-menu">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-lock col-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('index')}}">Trang chủ / </a>
                    </li>
                    <li>
                        <a href="gioithieu.html">Giới thiệu</a>
                    </li>
                </ul>            
            </div>
        </div>
    </div>
</div>
<!-- end menu-content -->
<div class="col-12">
    <div class="container">
        <h3 class="title-news-view">GIỚI THIỆU VỀ MELANI</h3>
            <div class="news-detail">
                <!-- content-1 -->
                <div class="content-1">
                    <h2 >1. Nguyên nhân có sự xuất hiện của MELANI</h2>
                        <p><span>Công nghệ ngày càng phát triển, nhu cầu sử dụng các sản phẩm công nghệ của người tiêu dùng cũng ngày càng tăng cao. Tuy nhiên, việc tìm mua các sản phẩm công nghệ chính hãng, chất lượng với giá cả hợp lý không phải lúc nào cũng dễ dàng. Do đó, MELANI bán hàng công nghệ ra đời để đáp ứng được nhu cầu mua sắm của người tiêu dùng.</span></p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p><span><img class="qc-gt-1" alt="" src="{{asset('public/Frontend//image/QC1.jpg')}}"></span></p>
                            </div>
                            <div class="col-md-6">
                                <p><span><img class="qc-gt-1" alt="" src="{{asset('public/Frontend//image/QC2.jpg')}}"></span></p>
                            </div>
                        </div>
                    </div>
                        <p><span>Đây là cửa hàng bán hàng công nghệ - công cụ giúp mọi người có thể dễ dàng tiếp cận với công nghệ và mua chúng theo từng mục đích sử dụng. Luôn cố gắng chú trọng vào việc cập nhật các công nghệ cải tiến mới nhất để mang lại trải nghiệm tốt nhất cho khách hàng.</span></p>
                        <p><span><img alt="" src="{{asset('public/Frontend//image/QC3.jpg')}}" style="width:auto;height:auto;"></span></p>
                </div>
            <!-- end content-1 -->
            <!-- content-2 -->
                <div class="content-2">
                    <h2>2. Giá trị tạo ra của MELANI</h2>
                        <p>Chúng tôi không chỉ bán 1 sản phẩm, chúng tôi mang đến cho bạn 1 giải pháp hoàn hảo. Chúng tôi không chỉ cung cấp sản phẩm tốt, chúng tôi mang đến cho bạn sự hiệu quả.</p>
                    <h3>2.1. Sự đa dạng về sản phẩm:</h3>
                        <p>Các trang web bán hàng công nghệ cung cấp đa dạng các sản phẩm công nghệ từ các thương hiệu nổi tiếng trên thế giới, đáp ứng mọi nhu cầu của người tiêu dùng.</p>
                        <p><img alt="" src="{{asset('public/Frontend//image/QC5.jpg')}}" style="width:auto ; height:600px;"></p>
                    <h3>2.2. Trải nghiệm mua sắm tiện lợi:</h3>
                        <p>Mang đến cho quý khách hàng sản phẩm chính hãng, mới 100%. Đúng xuất xứ và tiêu chuẩn của nhà sản xuất, giá tốt nhất thị trường. Cùng giải pháp hoàn hảo nhất cho hiệu quả cao khi sử dụng.</p>
                    <h3>2.3. Thông tin sản phẩm đầy đủ</h3>
                        <p>Chắc chắn, khi tìm kiếm sản phẩm công nghệ, khách hàng luôn muốn tìm kiếm các đầy đủ thông tin có trong cửa hàng. Vì vậy MELANI sẽ cung cấp thông tin sản phẩm đầy đủ, giúp khách hàng dễ dàng lựa chọn sản phẩm phù hợp.</p>
                    <h3>2.4. Trải nghiệm của khách hàng</h3>
                        <p>Trải nghiệm của khách hàng trên website bán hàng công nghệ được đánh giá là rất tốt. Website được thiết kế thân thiện, dễ sử dụng, giúp khách hàng dễ dàng tìm kiếm sản phẩm và mua hàng. Ngoài ra, website cũng cung cấp nhiều thông tin hữu ích về sản phẩm, giúp khách hàng có được quyết định mua sắm đúng đắn.</p>
                        <p>Một số yếu tố quan trọng giúp tạo nên trải nghiệm tốt cho khách hàng trên website bán hàng công nghệ là:</p>
                        <p>Thiết kế website: Website cần được thiết kế thân thiện, dễ sử dụng, với bố cục rõ ràng, mạch lạc. <br>
                            <li><b>Thông tin sản phẩm:</b> Thông tin sản phẩm cần được cung cấp đầy đủ, chính xác, bao gồm hình ảnh, video, thông số kỹ thuật, giá cả,... <br></li>
                            <li><b>Chức năng mua hàng:</b> Chức năng mua hàng cần được thiết kế thuận tiện, dễ dàng cho khách hàng sử dụng. <br></li>
                            <li><b>Hỗ trợ khách hàng:</b> Doanh nghiệp cần cung cấp dịch vụ hỗ trợ khách hàng chu đáo, tận tình.</li>
                        </p>
                        <p><img alt="" src="{{asset('public/Frontend//image/QC4.jpg')}}" style="width:auto;height:auto;"></p>
                        <p>Qua bài viết trên mong sẽ giúp các bạn hiểu hơn về MELANI .</p>
                </div>
<!-- end content-2 -->
<!-- content-3 -->
                <div class="content-3">
                    <h4>Bài viết cùng chuyên mục</h4>
                        <ul>
                            <li><a class="dp-inline-block" href="" title="news">SẢN PHẨM CÔNG NGHỆ</a></li>
                            <li><a class="dp-inline-block" href="" title="news">TUYỂN DỤNG</a></li>
                            <li><a class="dp-inline-block" href="" title="news">GIỚI THIỆU VỀ MELANI</a></li>
                            <li><a class="dp-inline-block" href="" title="news">TÍCH ĐIỂM ĐỔI QUÀ</a></li>
                        </ul>
                </div>
<!-- end content-3 -->
        </div>
    </div>
</div>

@endsection