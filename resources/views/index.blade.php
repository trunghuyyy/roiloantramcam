@extends('layouts.app')

@section('content')
<div id="banner">
    <img src="public/image/banner.png" class="img-banner" alt="">
</div>
<!-- end banner -->

<div id="quick-survey">
    <div class="box-quick container-custom">
        <div class="img-suv-quick">
            <img src="public/image/survey_bg.jpg" alt="">
        </div>
        <div class="container-quick-survey container-custom">
            <div class="detail-title-quick">
                <h2 class="header-title">KHẢO SÁT NHANH</h2>
                <h2 class="header-title-lg">
                    BẠN CÓ BIẾT <span class="header-text-title">TRẦM CẢM</span>
                    LÀ<br> KẺ ÂM THẦM RÚT CẠN <br> SỨC KHỎE VÀ TINH THẦN?
                </h2>
                <p>Nhận biết được các dấu hiệu sớm sẽ giúp bạn và người thân có được hướng điều trị hiệu
                    quả
                    nhất
                </p>
            </div>
            <div class="details-quick">
                <h3 class="text-quick-survey">Trước khi bắt đầu</h3>
                <p>Chỉ với bài khảo sát ngắn này, chúng tôi phần nào sẽ giúp bạn trả lời được câu hỏi
                    rằng
                    trẻ em xung quanh bạn đang thật sự tràn đầy năng lượng trong mọi hoạt động hằng ngày
                    hay
                    đó đơn giản hơn là những biểu hiện của triệu chứng tăng động ADHD thường thấy ở trẻ
                    em.</p>

                <p>Thời gian khảo sát: Ước tính 8 phút </p>
                <p>Số lượng câu hỏi: 10 câu </p> <br>

                <button type="submit" class="btn-start-quick"> Bắt Đầu</button>
                <button type="submit" class="btn-pass-quick">Bỏ qua khảo sát</button>
            </div>
        </div>
    </div>
</div>
<!-- end khao sat nhanh -->

<div id="disorders">
    <div class="wr-disorders container-custom">
        <div class="box-left">
            <h2 class="header-title">RỐI LOẠN TRẦM CẢM</h2>
            <h2 class="title-disorders">Rối loạn trầm <br> cảm là gì?</h2>
            <p style="width: inherit;">Rối loạn trầm cảm là một bệnh lý cảm xúc, thể hiện sự ức chế ở
                tất cả
                các mặt hoạt động tâm
                thần
                (ức chế cảm xúc, ức chế tư duy, ức chế về vận động). Sự ức chế này dẫn tới làm giảm sút
                các
                mặt
                hoạt động tâm thần và trực tiếp ảnh hưởng đến khả năng sinh hoạt, hiệu suất lao động và
                học
                tập
                của người bệnh.
            </p>
        </div>

        <div class="box-right">
            <img src="public/image/picture3_1.png" alt="">
        </div>
    </div>
</div>
<!-- end rối loạn -->

<div id="classify">
    <div class="wr-classify container-custom">
        <div class="box-top-classi">
            <h2 class="header-title">PHÂN LOẠI</h2>
            <h1 style="color: orangered;font-size: 64px;"> CÁC LOẠI TRẦM CẢM THƯỜNG GẶP</h1>
            <p style="margin: 20px auto;text-align: center; width: 90%;justify-content: center;">Lorem
                ipsum dolor sit amet consectetur. Sed magna arcu laoreet facilisis quam senectus
                ataugue.Netus viverra vulputate faucibus tempus congue. At turpis sagittis.
            </p>
        </div>
        <div class="box-1" style="background-image: url('public/image/classify1.png')">
            <div class="box1-left">
                <h2 style="color: white;font-size: 30px;">Trầm cảm nặng</h2>
                <button type="submit" class="btn-custom-details">Khám phá thêm</button>
            </div>
            <img src="public/image/picture4_1.png" class="img-classify" alt="">
        </div>

        <div class="container-box-bottom">
            <div class="box-2" style="background-image: url('public/image/classify2.png')">
                <div class="box2-left">
                    <h2 style="margin-bottom: 55px; color: white;font-size: 30px;">Trầm cảm rối loạn
                    </h2>
                    <button type="submit" class="btn-custom-details">Khám phá thêm</button>
                </div>
                <img src="public/image/picture4_2.png" class="img-classify-box2" alt="">
            </div>

            <div class="box-3" style="background-image: url('public/image/classify2.png')">
                <div class="box3-right">
                    <h2 style="margin-bottom: 55px; color: white;font-size: 30px;">Rối loạn lưỡng cực
                    </h2>
                    <button type="submit" class="btn-custom-details">Khám phá thêm</button>
                </div>
                <img src="public/image/picture4_3.png" class="img-classify-box3" alt="">
            </div>

            <div class="box-4" style="background-image: url('public/image/classify2.png')">
                <div class="box4-left">
                    <h2 style="margin-bottom: 55px; color: white;font-size: 30px;">Trầm cảm sau sinh
                    </h2>
                    <button type="submit" class="btn-custom-details">Khám phá thêm</button>
                </div>

                <img src="public/image/picture4_4.png" class="img-classify-box4" alt="">
            </div>

            <div class="box-5" style="background-image: url('public/image/classify2.png')">
                <div class="box5-right">
                    <h2 style="margin-bottom: 55px; color: white;font-size: 30px;">Rối loạn tâm thần
                        tiền kinh nguyệt</h2>
                    <button type="submit" class="btn-custom-details">Khám phá thêm</button>
                </div>

                <img src="public/image/picture4_5.png" class="img-classify-box5" alt="">
            </div>

            <div class="box-6" style="background-image: url('public/image/classify2.png')">
                <div class="box6-left">
                    <h2 style="margin-bottom: 55px; color: white;font-size: 30px;">Rối loạn tâm lý theo
                        mùa</h2>
                    <button type="submit" class="btn-custom-details">Khám phá thêm</button>
                </div>

                <img src="public/image/picture4_6.png" class="img-classify-box6" alt="">
            </div>
            <div class="box-7" style="background-image: url('public/image/classify2.png')">
                <div class="box7-right">
                    <h2 style="margin-bottom: 55px; color: white;font-size: 30px;">Trầm cảm không điển
                        hình</h2>
                    <button type="submit" class="btn-custom-details">Khám phá thêm</button>
                </div>

                <img src="public/image/picture4_7.png" class="img-classify-box7" alt="">
            </div>
        </div>

    </div>
</div>
<!-- end phân loại -->

<div id="signal">
    <div class="container-custom">
        <div class="box-top-signal">
            <h2 class="header-title">DẤU HIỆU NHẬN BIẾT</h2>
            <h1>CÁCH DẤU HIỆU ĐÁNG CHÚ Ý CỦA BỆNH TRẦM CẢM</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Sed magna arcu laoreet facilisis quam senectus at
                augue.
                Netus viverra vulputate faucibus tempus congue. At turpis sagittis.
            </p>
        </div>

        <div class="box-bottom-sginal">
            <div class="row-signal">
                <div class="left">
                    <div class="row-signal-setting-or">
                        <h4>Cảm thấy chán nản</h4>
                    </div>
                    <div class="row-signal-setting-blue">
                        <h4>Hay suy nghĩ về cái chết</h4>
                    </div>
                    <div class="row-signal-setting-or">
                        <h4>Có thể thèm hoặc chán ăn</h4>
                    </div>
                    <div class="row-signal-setting-blue">
                        <h4>Có năng lượng thấp</h4>
                    </div>
                    <div class="row-signal-setting-or">
                        <h4>Khó tập trung hoặc đưa ra quyết định</h4>
                    </div>
                </div>

                <div class="circle-signal">
                    <img src="public/image/Ellipse 5_1.png" alt="">
                </div>

                <div class="right">
                    <div class="row-signal-setting-blue">
                        <h4>Mất hứng thú với các hoạt động</h4>
                    </div>
                    <div class="row-signal-setting-or">
                        <h4>Có dấu hiệu bất thường về giấc ngủ</h4>
                    </div>
                    <div class="row-signal-setting-blue">
                        <h4>Cảm thấy tự ti</h4>
                    </div>
                    <div class="row-signal-setting-or">
                        <h4>Di chuyển chậm hoặc nhanh hơn</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end dấu hiệu -->

<div id="causal">
    <div class="container-custom">
        <div class="header-causal">
            <h2 class="header-title"> Nguyên Nhân </h2>
            <h2 style="font-size: 65px;color: orangered;text-transform: uppercase;"> Các đối tượng <br>dễ
                mắc trầm cảm</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis mollitia laborum sunt velit
                aliquam quos error sapiente, suscipit sint autem repellat tempore, et deleniti. Explicabo
                reprehenderit pariatur ipsum. Optio, odio!</p>
        </div>

        <div class="container-causal">
            <div class="box1-causal">
                <img src="public/image/6-1-1.png" class="img-box1-causal" alt="">
                <div class="box1-causal-left">
                    <h3 class="text-title-causal">Người sang chấn tâm lý</h3>
                    <ul class="pd-text-causal">
                        <li>Trải qua biến cố lớn và đột ngột như phá sản, nợ nần hay mất đi người thân như
                            phá sản, nợ nần hay mất đi người thân</li>
                    </ul>
                </div>
            </div>


            <div class="box2-causal">
                <img src="public/image/6-1-2.png" class="img-box2-causal" alt="">
                <div class="box2-causal-right">
                    <h3 class="text-title-causal">Phụ nữ sau sinh</h3>
                    <ul class="pd-text-causal">
                        <li>Đây là giai đoạn nhạy cảm của phụ nữ</li>
                    </ul>

                </div>

            </div>

            <div class="box3-causal">
                <img src="public/image/6-1-3.png" class="img-box3-causal" alt="">
                <div class="box3-causal-left">
                    <h3 class="text-title-causal">Học sinh, sinh viên</h3>
                    <ul class="pd-text-causal">
                        <li>Áp lực học tập</li>
                        <li>Thi cử dồn dập</li>
                        <li>Áp lực từ cha mẹ và thầy cô</li>
                        <li>Sự đánh giá không tốt về kết quả học tập</li>
                    </ul>

                </div>

            </div>

            <div class="box4-causal">
                <img src="public/image/6-1-4.png" class="img-box4-causal" alt="">
                <div class="box4-causal-right">
                    <h3 class="text-title-causal">Tổn thương cơ thể</h3>
                    <ul class="pd-text-causal">
                        <li>Người bị tai nạn phải cắt bỏ một phần cơ thể</li>
                        <li>Chấn thương sọ não hay ung thư</li>
                        <li>Mắc bệnh truyền nhiễm nguy hiểm</li>
                    </ul>

                </div>

            </div>

            <div class="box5-causal">
                <img src="public/image/6-1-5.png" class="img-box5-causal" alt="">
                <div class="box5-causal-left">
                    <h3 class="text-title-causal">Lạm dụng chất kích thích</h>
                        <ul class="pd-text-causal">
                            <li>Sử dụng rượu bia và chất kích thích trong một thời gian dài</li>
                        </ul>

                </div>

            </div>

            <div class="box6-causal">
                <img src="public/image/6-1-6.png" class="img-box6-causal" alt="">
                <div class="box6-causal-right">
                    <h3 class="text-title-causal">Thiếu nguồn lực
                        trong cuộc sống</h3>
                    <ul class="pd-text-causal">
                        <li>Nếu các mối quan hệ hỗ trợ </li>
                        <li> Thiếu sự giao tiếp và tương tác </li>
                        <li>Thiếu cách ứng phó với các khó khăn và áp lực trong cuộc sống</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- end nguyên nhân -->

<div id="affect">
    <div>
        <img src="public/image/Affection.png" class="img-affection" alt="">
    </div>
</div>

<!-- end ảnh hưởng -->
<div id="solution">
    <div class="header-top">
        <h2 class="header-title">Gợi ý giải pháp</h2>
        <h2>Gợi ý giải pháp</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum voluptatibus consectetur
            nemo! Assumenda cupiditate quos possimus corporis quae ullam ratione.</p>
    </div>

    <div class="content-solution">
        <div class="img-bg-solution"><img src="public/image/goiy1.png" alt=""></div>
        <div>
            <button type="button" class="btn-content-left custom-btn-solution"><a href="http://localhost/roiloantramcam/advice/advice">Điều trị tâm lý</a></button>
            <div class="img-vt-left">
                <img src="public/image/Vector1.png" alt="">
            </div>
        </div>
        <div>
            <button type="button" class="btn-content-mid custom-btn-solution">Thuốc điều trị</button>
            <div class="img-vt-mid">
                <img src="public/image/Vector4.png" alt="">
            </div>
        </div>
        <div>
            <button type="button" class="btn-content-right custom-btn-solution">Hiểu rõ bệnh bản
                thân</button>
            <div class="img-vt-right">
                <img src="public/image/Vector 3.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- end giải pháp -->

<div id="useful">
    <div class="container-custom">
        <div class="header-useful">
            <h2 class="header-title">Thông tin hữu ích</h2>
            <h2 style="color: orangered;font-size: 64px; text-transform: uppercase;">Kiến thức & thông tin
                <br><span style="text-transform: uppercase; color: blue;">hữu ích</span>
            </h2>
            <p class="text-header-useful">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                voluptatibus pariatur et
                maiores repudiandae perspiciatis vero molestias maxime esse aliquid, ab illum voluptatum,
                amet incidunt voluptas, expedita id? Laboriosam, doloribus.</p>
        </div>

        <div class="post-thumb">
            <div class="post-new">
                <img src="public/image/post1.jpg" class="img-post-new" alt="">
                <div class="post-content">
                    <a href="url" class="text-title-useful">Kiến thức</a>
                    <div> <a href="" class="text-title-postnew"> Trầm cảm nặng vì làm việc suốt ngày đêm</a>
                    </div>
                    <p>Ông Khiêm giải thích như bệnh nhân trên do công việc căng thẳng, thức khuya dẫn đến
                        stress...</p>
                    <a href="https://thanhnien.vn/chu-tich-bamboo-capital-vao-hdqt-eximbank-185240426130129128.htm" target="_blank" class="text-btn-readnow-useful">Đọc ngay</a>
                    <a href="https://thanhnien.vn/nhieu-cuu-binh-uc-tham-du-le-truy-dieu-liet-si-su-doan-7-o-binh-duong-185240426151738549.htm">
                        <img src="public/image/icon-next.png" alt="">
                    </a>
                </div>
            </div>
            <div class="post-new">
                <img src="public/image/post2.jpg" class="img-post-new" alt="">
                <div class="post-content">
                    <a href="" class="text-title-useful">Kiến thức</a>
                    <div> <a href="" class="text-title-postnew"> Trầm cảm nặng vì làm việc suốt ngày đêm</a>
                    </div>
                    <p>Ông Khiêm giải thích như bệnh nhân trên do công việc căng thẳng, thức khuya dẫn đến
                        stress...</p>
                    <a href="https://thanhnien.vn/chu-tich-bamboo-capital-vao-hdqt-eximbank-185240426130129128.htm" target="_blank" class="text-btn-readnow-useful">Đọc ngay</a>
                    <a href="https://thanhnien.vn/nhieu-cuu-binh-uc-tham-du-le-truy-dieu-liet-si-su-doan-7-o-binh-duong-185240426151738549.htm">
                        <img src="public/image/icon-next.png" alt="">
                    </a>
                </div>
            </div>

            <div class="post-new">
                <img src="public/image/post3.jpg" class="img-post-new" alt="">
                <div class="post-content">
                    <a href="" class="text-title-useful">Kiến thức</a>
                    <div> <a href="" class="text-title-postnew"> Trầm cảm nặng vì làm việc suốt ngày đêm</a>
                    </div>
                    <p>Ông Khiêm giải thích như bệnh nhân trên do công việc căng thẳng, thức khuya dẫn đến
                        stress...</p>
                    <a href="https://thanhnien.vn/chu-tich-bamboo-capital-vao-hdqt-eximbank-185240426130129128.htm" target="_blank" class="text-btn-readnow-useful">Đọc ngay</a>
                    <a href="https://thanhnien.vn/nhieu-cuu-binh-uc-tham-du-le-truy-dieu-liet-si-su-doan-7-o-binh-duong-185240426151738549.htm">
                        <img src="public/image/icon-next.png" alt="">
                    </a>
                </div>
            </div>

            <div class="post-new">
                <img src="public/image/post4.jpg" class="img-post-new" alt="">
                <div class="post-content">
                    <a href="" class="text-title-useful">Kiến thức</a>
                    <div> <a href="" class="text-title-postnew"> Trầm cảm nặng vì làm việc suốt ngày đêm</a>
                    </div>
                    <p>Ông Khiêm giải thích như bệnh nhân trên do công việc căng thẳng, thức khuya dẫn đến
                        stress...</p>
                    <a href="https://thanhnien.vn/chu-tich-bamboo-capital-vao-hdqt-eximbank-185240426130129128.htm" target="_blank" class="text-btn-readnow-useful">Đọc ngay</a>
                    <a href="https://thanhnien.vn/nhieu-cuu-binh-uc-tham-du-le-truy-dieu-liet-si-su-doan-7-o-binh-duong-185240426151738549.htm">
                        <img src="public/image/icon-next.png" alt="">
                    </a>
                </div>
            </div>

            <div class="post-new">
                <img src="public/image/post5.jpg" class="img-post-new" alt="">
                <div class="post-content">
                    <a href="" class="text-title-useful">Kiến thức</a>
                    <div> <a href="" class="text-title-postnew"> Trầm cảm nặng vì làm việc suốt ngày đêm</a>
                    </div>
                    <p>Ông Khiêm giải thích như bệnh nhân trên do công việc căng thẳng, thức khuya dẫn đến
                        stress...</p>
                    <a href="https://thanhnien.vn/chu-tich-bamboo-capital-vao-hdqt-eximbank-185240426130129128.htm" target="_blank" class="text-btn-readnow-useful">Đọc ngay</a>
                    <a href="https://thanhnien.vn/nhieu-cuu-binh-uc-tham-du-le-truy-dieu-liet-si-su-doan-7-o-binh-duong-185240426151738549.htm">
                        <img src="public/image/icon-next.png" alt="">
                    </a>
                </div>
            </div>

            <div class="post-new">
                <img src="public/image/post6.jpg" class="img-post-new" alt="">
                <div class="post-content">
                    <a href="" class="text-title-useful">Kiến thức</a>
                    <div> <a href="" class="text-title-postnew"> Trầm cảm nặng vì làm việc suốt ngày đêm</a>
                    </div>
                    <p>Ông Khiêm giải thích như bệnh nhân trên do công việc căng thẳng, thức khuya dẫn đến
                        stress...</p>
                    <a href="https://thanhnien.vn/chu-tich-bamboo-capital-vao-hdqt-eximbank-185240426130129128.htm" target="_blank" class="text-btn-readnow-useful">Đọc ngay</a>
                    <a href="https://thanhnien.vn/nhieu-cuu-binh-uc-tham-du-le-truy-dieu-liet-si-su-doan-7-o-binh-duong-185240426151738549.htm">
                        <img src="public/image/icon-next.png" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- end thông tin có ích -->

<div id="contact">
    <div class="contact-img">
        <img src="public/image/contact.png">
    </div>
    <div class="contact-title container-custom">
        <p class="contact-title-first">ĐIỀU TRỊ TRẦM CẢM CUỘC CHIẾN KHÔNG THỂ LƠ LÀ</p>
        <p class="contact-title-second">Nếu bạn vẫn cần thêm sự hỗ trợ, vui lòng để lại thông tin để nhận
            được
            sự tư vấn về chứng
            trầm cảm.</p>

        <div class="contact-form">
            <div class="contact-form-top">
                <div class="contact-form-top-input">
                    <label>Họ và Tên</label><br>
                    <input class="contact-form-top-input-input" type="text" placeholder="Vui lòng nhập tên của bạn">
                </div>

                <div class="contact-form-top-input">
                    <label>Số điện thoại</label><br>
                    <input class="contact-form-top-input-input" type="text" placeholder="Vui lòng nhập SĐT">
                </div>
            </div>

            <div class="contact-form-middle">
                <div>
                    <label>Email</label><br>
                    <input class="contact-form-middle-input" type="text" placeholder="Vui lòng nhập địa chỉ email">
                </div>
            </div>

            <div class="contact-form-bot">
                <div>
                    <label>Nội dung cần hỗ trợ</label><br>
                    <textarea class="textare-contact" type="text" placeholder="Vui lòng ghi chú thông tin của bạn tại đây"></textarea>
                </div>

                <div class="contact-form-btn">
                    <button type="submit" class="btn-reload-info">Đặt lại thông tin</button>
                    <button type="submit" class="btn-advice">Nhận tư vấn</button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection