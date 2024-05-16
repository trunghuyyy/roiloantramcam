<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <title>Result</title>
</head>

<body>
    <div class="result-form">
            <div class="wr-result-form">
                <div class="title-result">
                    <h2 class="header-title">Kết quả khảo sát</h2>
                    <p>Trước khi nhận kết quả khảo sát, vui lòng cho chúng tôi biết rõ hơn về bạn để chúng tôi có thể
                        cung cấp những giải pháp cá nhân hóa cũng như tối ưu nhất</p>
                </div>
                <div class="form-write-ip">
                    <form action="">
                        <label for="username">Tên đăng nhập</label> <br>
                        <input class="form-control" type="text" name="username" placeholder="Tên đăng nhập" value=""
                            id="username"> <br>
                        <label for="number">Mật khẩu</label><br>
                        <input class="form-control" type="number" name="phonenumber" placeholder="Nhập số điện thoại"
                            id="number"> <br>
                        <label for="email">Email</label> <br>
                        <input class="form-control" type="text" name="email" placeholder="Nhập Email" value=""
                            id="email"> <br>
                    </form>
                </div>
                <div>
                    <button type="button" class="btn-pass-result">KẾT QUẢ KHẢO SÁT</button>
                </div>
            </div>


            <div class="detail-total">
                <h3> Quy cách tính điểm</h3>
                <div class="detail-score-row">
                    <span class="detail-row-name">Không bao giờ</span>
                    <span class="detail-score-value">0 điểm</span>
                </div>
                <div class="detail-score-row">
                    <span class="detail-row-name">Đôi lúc</span>
                    <span class="detail-score-value">1 điểm</span>
                </div>
                <div class="detail-score-row">
                    <span class="detail-row-name">Hầu hết thời gian</span>
                    <span class="detail-score-value">2 điểm</span>
                </div>
                <div class="detail-score-row">
                    <span class="detail-row-name">Luôn luôn</span>
                    <span class="detail-score-value">3 điểm</span>
                </div>

            </div>

    </div>
</body>

</html>