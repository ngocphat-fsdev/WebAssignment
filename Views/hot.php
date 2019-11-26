<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./w3.css">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="hot-css.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Header-->
    <div id="intro-head">
        <!-------------------------------------------------------------->
        <div class="w3-section head-ad">
            <img class="mySlides w3-animate-fading" src="./img/adv-head1.jpg" style="display: none;">
            <img class="mySlides w3-animate-fading" src="./img/adv-head2.jpg" style="display: block;">
        </div>
        <!-------------------------------------------------------------->
        <div id="header-menu">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height: 40px;">
                    <a class="nav-item nav-link" id="nav-home-tab" href="homepage.php" role="tab"
                        aria-controls="nav-home" aria-selected="false" target="_self"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Trang Chủ</p>
                    </a>
                    <a class="nav-item nav-link active" id="nav-profile-tab" href="hot.php" role="tab"
                        aria-controls="nav-profile" aria-selected="true" target="_self"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Hot</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="review.php" role="tab"
                        aria-controls="nav-contact" aria-selected="false" target="_self"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Review</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
                        aria-selected="true" target="_self"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Đặt bàn</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
                        aria-selected="false" target="_self"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Thảo luận</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
                        aria-selected="false" target="_self"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Giảm giá</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="contact.php" role="tab"
                        aria-controls="nav-contact" aria-selected="false" target="_self"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Liên hệ</p>
                    </a>
                </div>
            </nav>
        </div>
        <!-------------------------------------------------------------->
        <div class="pos-f-t headmenu-sm">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-light p-4">
                    <a class="nav-item nav-link active" id="nav-home-tab" href="homepage.php" role="tab"
                        aria-controls="nav-home" aria-selected="false"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Trang Chủ</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-profile-tab" href="hot.php" role="tab"
                        aria-controls="nav-profile" aria-selected="true"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Hot</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="review.php" role="tab"
                        aria-controls="nav-contact" aria-selected="false"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Review</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
                        aria-selected="true" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Đặt Hàng</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
                        aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Thảo Luận</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
                        aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Giảm Giá</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="contact.php" role="tab"
                        aria-controls="nav-contact" aria-selected="false"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Liên Hệ</p>
                    </a>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <!-------------------------------------------------------------------->
        <nav class="nav justify-content-center login" style="background-color: #f8f9fa; position: relative;">
            <span style="width: 100px; height: 38px;margin-right: 10px;margin-top: 7px;margin-left: 10px;">
                <a href="Login/Login.php">Đăng Nhập</a>
            </span>
            <div class="dropdown" style="margin-right: 10px; height: 40px;">
                <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn btn-primary btn-circle">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class="dropdown" style="margin-right: 10px; height: 40px;">
                <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn btn-warning">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false"
                style="height: 37px;">
                <img src="./img/vn.png" style="width: 25px;vertical-align: 0;">
            </button>
        </nav>
    </div>

    <div class="list-content">
        <ul class="list-news-item">
            <li>
                <a href="news.php">
                    <div class="img-container">
                        <img data-parent="$(this).parent()" data-rescale-on-resize="false" data-align="center"
                            src="images/photo-post-1.jpg" data-is-lazyload="false" data-is-fail="false"
                            style="background: none;">
                    </div>
                    <div class="content">
                        <span class="line-ellipsis">
                            Top 10 Coffee shop cực chất khiến các tín đồ shopping điên đảo
                        </span>
                        <span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">
                            Bạn đã bao giờ tới những quán cafe kết hợp với shop thời trang chưa?
                        </span>
                        <div class="g_child_count">
                            <i class="fa fa-eye"></i>
                            <span>09</span>
                            <i class="fa fa-share"></i>
                            <span>00</span>
                            <i class="fa fa-comments"></i>
                            <span>00</span>
                        </div>
                        <span class="date">hôm nay</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-container">
                        <img data-scale="best-fill" data-parent="$(this).parent()" data-rescale-on-resize="false"
                            data-align="center" src="images/đà-lạt1.jpg" data-is-lazyload="false" data-is-fail="false"
                            style="background: none;">
                    </div>
                    <div class="content">
                        <span class="line-ellipsis">
                            Xuất hiện một Đà Lạt giữa lòng Sài Gòn
                        </span>
                        <span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">
                            Đà Lạt là một thành phố nên thơ vô cùng
                        </span>
                        <div class="g_child_count">
                            <i class="fa fa-eye"></i>
                            <span>24</span>
                            <i class="fa fa-share"></i>
                            <span>00</span>
                            <i class="fa fa-comments"></i>
                            <span>00</span>
                        </div>
                        <span class="date">hôm nay</span>
                    </div>

                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-container">
                        <img data-scale="best-fill" data-parent="$(this).parent()" data-rescale-on-resize="false"
                            data-align="center" src="images/trasua.jpg" data-is-lazyload="false" data-is-fail="false"
                            style="background: none;">
                    </div>
                    <div class="content">
                        <span class="line-ellipsis">Top 5 Quán "Tà Tưa" đáng thử nhất</span>
                        <span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">
                            Đối với đại đa số mọi người, "Tà Tưa" không còn là thức uống quá xa lạ ...
                        </span>
                        <div class="g_child_count">
                            <i class="fa fa-eye"></i>
                            <span>20</span>
                            <i class="fa fa-share"></i>
                            <span>00</span>
                            <i class="fa fa-comments"></i>
                            <span>00</span>
                        </div>
                        <span class="date">hôm nay</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-container">
                        <img data-scale="best-fill" data-parent="$(this).parent()" data-rescale-on-resize="false"
                            data-align="center" src="images/banhbao.jpg" data-is-lazyload="false" data-is-fail="false"
                            style="background: none;">
                    </div>
                    <div class="content">
                        <span class="line-ellipsis">
                            Nóng hôi hổi 1001 HÀNG BÁNH BAO NGON "TUYỆT CÚ MÈO" khắp Hà Nội
                        </span>
                        <span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">Bánh bao là món ăn vặt
                            quen
                            thuộc của bấ</span>
                        <div class="g_child_count">
                            <i class="fa fa-eye"></i>
                            <span>55</span>
                            <i class="fa fa-share"></i>
                            <span>00</span>
                            <i class="fa fa-comments"></i>
                            <span>00</span>
                        </div>
                        <span class="date">3 ngày trước</span>
                    </div>
                </a>
            </li>
            <li>
                <a
                    href="/co-gi-hot/am-thuc/bat-song-ngay-list-quan-an-trong-hem-nho-hoi-sanh-an-ha-noi-khong-nen-bo-qua">
                    <div class="img-container">
                        <img data-scale="best-fill" data-parent="$(this).parent()" data-rescale-on-resize="false"
                            data-align="center" src="images/hanoi.jpg" data-is-lazyload="false" data-is-fail="false"
                            style="background: none;">
                    </div>
                    <div class="content">
                        <span class="line-ellipsis">Bắt sóng ngay list QUÁN ĂN TRONG HẺM NHỎ hội sành ăn Hà Nội không
                            nên bỏ
                            qua</span>
                        <span class="ddd" data-ddd-line="2" style="overflow-wrap: break-word;">Món ngon ở Hà Nội không
                            thiếu, cả ngoài </span>
                        <div class="g_child_count">
                            <i class="fa fa-eye"></i>
                            <span>43</span>
                            <i class="fa fa-share"></i>
                            <span>00</span>
                            <i class="fa fa-comments"></i>
                            <span>00</span>
                        </div>
                        <span class="date">5 ngày trước</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>


    <div id="footer-cont">
        <!-------------------------------------------------------------->
        <div id="link-footer">
            <div>
                <p class="linkfoot-head">Khám phá</p>
                <p>Ứng dụng mobile</p>
                <p>Viết bình luận</p>
                <p>Tạo bộ sưu tập</p>
                <p>Phần thưởng</p>
                <p>Bảo mật thông tin</p>
                <p>Quy định</p>
            </div>
            <div>
                <p class="linkfoot-head">Công ty</p>
                <p>Giới thiệu</p>
                <p>Trợ giúp</p>
                <p>Việc làm</p>
                <p>Nhà đầu tư</p>
                <p>Góp ý</p>
                <p>Liên hệ</p>
            </div>
            <div>
                <p class="linkfoot-head">Tham gia trên</p>
                <p>Facebook</p>
                <p>Instagram</p>
                <p>Youtube</p>
                <p>Google</p>
                <p>TableNow.vn</p>
                <p>Now.vn</p>
                <p>NowPOS</p>
            </div>
            <div id="giayphep">
                <p class="linkfoot-head">Giấy phép</p>
                <p>MXH 363/GP-BTTTT</p>
                <img src="./img/gov_seals.jpg" alt="certification">
            </div>
        </div>
        <!-------------------------------------------------------------->
        <div id="info-footer">

        </div>
        <!-------------------------------------------------------------->
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 9000);
        }
    </script>
</body>

</html>