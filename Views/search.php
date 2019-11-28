<!DOCTYPE html>

<html lang="vi">

<head>
    <title>Food Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./w3.css">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <link href="css/search-style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-50">
        <div class="row">
            <!--Header-->
            <div id="intro-head">
                <!-------------------------------------------------------------->
                <div class="w3-section">
                    <img class="mySlides w3-animate-fading" src="./img/adv-head1.jpg" style="display: none; width: 1110px;">
                    <img class="mySlides w3-animate-fading" src="./img/adv-head2.jpg" style="display: block; width: 1110px;">
                </div>
                <!-------------------------------------------------------------->
                <div id="header-menu">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height: 40px;">
                            <a class="nav-item nav-link" id="nav-home-tab" href="homepage.php" role="tab" aria-controls="nav-home" aria-selected="false"
                                target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p>Trang Chủ</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" href="hot.php" role="tab" aria-controls="nav-profile" aria-selected="true"
                                target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p>Hot</p>
                            </a>
                            <a class="nav-item nav-link active" id="nav-contact-tab" href="review.php" role="tab" aria-controls="nav-contact" aria-selected="false"
                                target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p>Review</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="true" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p>Đặt bàn</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="false" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p>Thảo luận</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="false" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p>Giảm giá</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" href="contact.php" role="tab" aria-controls="nav-contact" aria-selected="false"
                                target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p>Liên hệ</p>
                            </a>
                        </div>
                    </nav>
                </div>
                <!-------------------------------------------------------------->
            </div>
            <!--**********************************************************-->
            <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="height: 60px;">
                <div class="container-fluid" style="">
                    <a class="foody-brand" href="#" style="margin-right: 15px;"><img src="./img/foody-vn.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-top: 16px;">
                        <div class="navbar-nav" style="margin: auto;">
                            <div class="dropdown" style="margin-right: 10px; height: 40px;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Tỉnh Thành
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <form class="form-inline md-form form-sm mt-0" style="margin-left: 10px;">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Tìm tỉnh thành" aria-label="Tìm tỉnh thành">
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item" type="button">TP Hồ Chí Minh</button>
                                    <button class="dropdown-item" type="button">Hà Nội</button>
                                    <button class="dropdown-item" type="button">Cần Thơ</button>
                                    <button class="dropdown-item" type="button">Khánh Hòa</button>
                                    <button class="dropdown-item" type="button">Vũng Tàu</button>
                                </div>
                            </div>
                            <div class="dropdown" style="margin-right: 10px; height: 40px;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Ăn Uống
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Ăn uống</button>
                                    <button class="dropdown-item" type="button">Du lịch</button>
                                    <button class="dropdown-item" type="button">Cưới hỏi</button>
                                    <button class="dropdown-item" type="button">Giải trí</button>
                                    <button class="dropdown-item" type="button">Mua sắm</button>
                                    <button class="dropdown-item" type="button">Giáo dục</button>
                                </div>
                            </div>
                            <div class="input-group mb-3" style="margin-right: 10px;">
                                <input type="text" class="form-control" placeholder="Địa điểm, món ăn,..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown" style="margin-right: 10px; height: 40px;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Danh Mục
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Ở đâu</button>
                                    <button class="dropdown-item" type="button">Đặt bàn</button>
                                    <button class="dropdown-item" type="button">Giao hàng</button>
                                    <button class="dropdown-item" type="button">Sưu tập</button>
                                    <button class="dropdown-item" type="button">Coupon</button>
                                    <button class="dropdown-item" type="button">Bình luận</button>
                                </div>
                            </div>
                            <button type="navbar-btn" class="btn btn-outline-dark" style="height: 38px;margin-right: 10px;">App</button>
                            <span style="width: 310px; height: 38px;margin-right: 10px;margin-top: 7px;margin-left: 10px;">
                                <a href="#">Đăng Nhập</a>
                            </span>
                            <div class="dropdown" style="margin-right: 10px; height: 40px;">
                                <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary btn-circle">
                                    <i class="fa fa-bell" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="dropdown" style="margin-right: 10px; height: 40px;">
                                <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-warning">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false" style="height: 37px;">
                                <img src="./img/vn.png" style="width: 25px;vertical-align: 0;">
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div>
                    <div class="left-menu">
                        <a href="#" class="link-right" style="color:red">Địa điểm</a>
                        <hr>
                        <a href="#" class="link-right">Bộ sưu tập</a>
                        <hr>
                        <a href="#" class="link-right">Hình ảnh</a>
                        <hr>
                        <a href="#" class="link-right">Blogs</a>
                        <hr>
                        <a href="#" class="link-right">Thành viên</a>
                        <hr>
                        <a class="link-right">&nbsp;</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="search-sceen mb-4">
                    <div class="row">
                        <ul class="nav nav-tabs menu">
                            <li style="text-align: center; padding: 0px 10px;border: 1px solid lightgray; background-color:rgba(0,0,0,.03)">
                                <a data-toggle="tab" href="#" style="color: black; font-weight: 300">
                                    <b>Đúng nhất</b>
                                </a>
                            </li>
                            <li style="text-align: center; padding: 0px 10px; margin-left: 20px">
                                <a data-toggle="tab" href="#" style="color: black; font-weight: 300">
                                    Gần tôi
                                </a>
                            </li>
                            <li style="text-align: center; padding: 0px 10px; margin-left: 20px">
                                <a data-toggle="tab" href="#" style="color: black; font-weight: 300">
                                    Phổ biến
                                </a>
                            </li>
                            <li style="text-align: center; padding: 0px 10px; margin-left: 20px">
                                <a data-toggle="tab" href="#" style="color: black; font-weight: 300">
                                    Đánh giá tốt nhất
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="result-num">
                            <p style="display: inline; margin-left: 10px;">300 kết quả </p>
                            <p style="color: red; display: inline;">"coffee"</p>
                        </div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-success btn-xs mt-3 mr-3">Coffee sữa</button>
                        <button type="button" class="btn btn-success btn-xs mt-3 mr-3">Coffee đá</button>
                        <button type="button" class="btn btn-success btn-xs mt-3 mr-3">Coffee rum</button>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="left-info">
                                    <div class="item-searched">
                                        <div class="row">
                                            <img src="images/coffee-house.jpg" alt="" class="img-fluid rounded res-photo">
                                        </div>
                                        <div class="opentime-status mt-1">
                                            <div class="row">
                                                <span class="offline"></span>
                                                Chưa mở cửa
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/comment-icon.png" alt="" class="cmt-icon">
                                                            <span>559</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/photo-icon.jpg" alt="" class="cmt-icon">
                                                            <span>443</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/save-icon.jpg" alt="" class="cmt-icon">
                                                            <span>101</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="res-description ml-3">
                                    <div class="row">
                                        <div class="point">8.4</div>
                                        <div class="resname ml-2">
                                            <a href="#" class="name-item"><b>The Coffee House</b></a>
                                            <div class="address">
                                                <p><b>30 Huỳnh Tịnh Của, Quận 3, TP. HCM</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" style="border: 0.7px solid green">
                                <div class="res-cmt my-1">
                                    <div class="comment-block">
                                        <div class="row">
                                            <div class="media ml-3">
                                                <img class="d-flex mr-3 rounded-circle avatar" src="images/dog-avatar.jpg" alt="">
                                                <div class="media-body ml-3">
                                                    <div class="row">
                                                        <a href="#" class="name-reviewer">Minh Phạm &nbsp;</a>
                                                        <p>Tch ở đây rộng rãi. Nhân viên nhiệt tình. Nước ổn, thích ngồi
                                                            ở đây làm
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="media ml-3">
                                                <img class="d-flex mr-3 rounded-circle avatar" src="images/cat-avatar.jpg" alt="">
                                                <div class="media-body ml-3">
                                                    <div class="row">
                                                        <a href="#" class="name-reviewer">Vinh Lê &nbsp;</a>
                                                        <p>The Coffee House thì quá quen thuộc với hầu hết mọi người rồi
                                                            nhưng TCH đang có chương trình khuyến mãi đặc biệt</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="left-info">
                                    <div class="item-searched">
                                        <div class="row">
                                            <img src="images/highland-fruit.jpg" alt="" class="img-fluid rounded res-photo">
                                        </div>
                                        <div class="opentime-status mt-1">
                                            <div class="row">
                                                <span class="offline"></span>
                                                Chưa mở cửa
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/comment-icon.png" alt="" class="cmt-icon">
                                                            <span>559</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/photo-icon.jpg" alt="" class="cmt-icon">
                                                            <span>443</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/save-icon.jpg" alt="" class="cmt-icon">
                                                            <span>101</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="res-description ml-3">
                                    <div class="row">
                                        <div class="point">8.4</div>
                                        <div class="resname ml-2">
                                            <a href="#" class="name-item"><b>Highland Fruits</b></a>
                                            <div class="address">
                                                <p><b>29/24 Nguyễn Gia Trí (Đường D2), P. 25, Quận Bình Thạnh, TP.HCM
                                                    </b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" style="border: 0.7px solid green">
                                <div class="res-cmt my-1">
                                    <div class="comment-block">
                                        <div class="row">
                                            <div class="media ml-3">
                                                <img class="d-flex mr-3 rounded-circle avatar" src="images/3-avatar.jpg" alt="">
                                                <div class="media-body ml-3">
                                                    <div class="row">
                                                        <a href="#" class="name-reviewer">Edra Mode &nbsp;</a>
                                                        <p>Mình có dịp ghé qua quán do người bạn giới thiệu, mình là tín
                                                            đồ của sầu riêng, và thế là như vớ được vàng :)))
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="media ml-3">
                                                <img class="d-flex mr-3 rounded-circle avatar" src="images/4-avatar.jpg" alt="">
                                                <div class="media-body ml-3">
                                                    <div class="row">
                                                        <a href="#" class="name-reviewer">Kiều Kiều &nbsp;</a>
                                                        <p>Mình hay uống nước ép vì nguyên chất và không hề có đường, quán
                                                            có món sinh tố Bơ sầu riêng thì siêu ngon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="left-info">
                                    <div class="item-searched">
                                        <div class="row">
                                            <img src="images/BOONG-coffee.jpg" alt="" class="img-fluid rounded res-photo">
                                        </div>
                                        <div class="opentime-status mt-1">
                                            <div class="row">
                                                <span class="offline"></span>
                                                Chưa mở cửa
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/comment-icon.png" alt="" class="cmt-icon">
                                                            <span>559</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/photo-icon.jpg" alt="" class="cmt-icon">
                                                            <span>443</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        <a href="#">
                                                            <img src="images/save-icon.jpg" alt="" class="cmt-icon">
                                                            <span>101</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="res-description ml-3">
                                    <div class="row">
                                        <div class="point">8.4</div>
                                        <div class="resname ml-2">
                                            <a href="#" class="name-item"><b>BOONG coffee</b></a>
                                            <div class="address">
                                                <p><b>525/33Bis Tô Hiến Thành, P. 14, Quận 10, TP.HCM</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" style="border: 0.7px solid green">
                                <div class="res-cmt my-1">
                                    <div class="comment-block">
                                        <div class="row">
                                            <div class="media ml-3">
                                                <img class="d-flex mr-3 rounded-circle avatar" src="images/5-avatar.jpg" alt="">
                                                <div class="media-body ml-3">
                                                    <div class="row">
                                                        <a href="#" class="name-reviewer">Phat Cat &nbsp;</a>
                                                        <p>Mình thích và ấn tượng ở Boong là có sân vườn rất rộng , có cả
                                                            khu vui chơi cho trẻ em vào cuối tuần , ngồi cà phê thư giãn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="media ml-3">
                                                <img class="d-flex mr-3 rounded-circle avatar" src="images/6-avatar.jpg" alt="">
                                                <div class="media-body ml-3">
                                                    <div class="row">
                                                        <a href="#" class="name-reviewer">Uyên Phạm &nbsp;</a>
                                                        <p>Quán có không gian đẹp, nhiều góc sống ảo. Tối lên đèn vẫn lung
                                                            linh như thường nhé. Menu thì đa dạng phong phú.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Hiển thị thêm kết quả</button>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Footer-->
            <div id="footer-cont">
                <!-------------------------------------------------------------->
                <div id="app-footer">
                    <p style="text-align: center;padding-top: 20px;font-size: 30px;color: #10bfb7;">Tìm địa điểm trên đường
                        đi? Tải app Foody!</p>
                    <div class="app-grid">
                        <div id="thong-ke">
                            <div id="tk-text" style="margin: 20px 40px 20px 40px;text-align: center;border-radius: 5px;padding: 5px;">
                                Thống Kê</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">309,774 Địa điểm</li>
                                <li class="list-group-item">38,630,265 người sử dụng</li>
                                <li class="list-group-item">1,326,148 bình luận</li>
                                <li class="list-group-item">532,603 check-in</li>
                                <li class="list-group-item">9,287,286 hình ảnh</li>
                                <li class="list-group-item">22,827,285 Bộ sưu tập</li>
                            </ul>
                        </div>
                        <div id="tk-brk"></div>
                        <div id="iOS">
                            <div id="tk-text" style="margin: 20px 65px 20px 65px;text-align: center;border-radius: 10px;padding: 3px;">iOS
                            </div>
                            <a href="#"><img src="./img/ios-footer.png" alt="ios-app"></a>
                        </div>
                        <div id="Android">
                            <div id="tk-text" style="margin: 20px 65px 20px 65px;text-align: center;border-radius: 10px;padding: 3px;">
                                Android
                            </div>
                            <a href="#"><img src="./img/android-footer.png" alt="ios-app"></a>
                        </div>
                        <div id="Win">
                            <div id="tk-text" style="margin: 20px 65px 2px 65px;text-align: center;border-radius: 10px;padding: 3px;">
                                Windows
                            </div>
                            <a href="#"><img src="./img/windows-footer.png" alt="ios-app"></a>
                        </div>
                    </div>
                </div>
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
                    </div>
                    <div>
                        <p class="linkfoot-head">Giấy phép</p>
                        <p>MXH 363/GP-BTTTT</p>
                        <img src="./img/gov_seals.jpg" alt="certification" style="width: 150px;margin-left: 30px;">
                    </div>
                    <div>
                        <img src="./img/logo-foody.png" alt="logo foody" style="width: 200px;padding-top: 40px;">
                    </div>
                </div>
                <!-------------------------------------------------------------->
                <div id="info-footer">

                </div>
                <!-------------------------------------------------------------->
            </div>
        </div>
    </div>

    <!--
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">footer</p>
        </div>
    </footer>
    -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>