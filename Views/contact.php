<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type"; content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tổng Hợp Địa Điểm Ăn Uống Tại TPHCM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./w3.css">
    <link href="./style.css" type="text/css" rel="stylesheet">
</head>

<body style="margin: 0 auto;">
    <div id="home-page">
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
                        <a class="nav-item nav-link" id="nav-profile-tab" href="hot.php" role="tab"
                            aria-controls="nav-profile" aria-selected="true" target="_self"
                            style="border-top-left-radius: 0;border-top-right-radius: 0;">
                            <p>Hot</p>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" href="review.php" role="tab"
                            aria-controls="nav-contact" aria-selected="false" target="_self"
                            style="border-top-left-radius: 0;border-top-right-radius: 0;">
                            <p>Review</p>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                            aria-controls="nav-contact" aria-selected="true" target="_self"
                            style="border-top-left-radius: 0;border-top-right-radius: 0;">
                            <p>Đặt bàn</p>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                            aria-controls="nav-contact" aria-selected="false" target="_self"
                            style="border-top-left-radius: 0;border-top-right-radius: 0;">
                            <p>Thảo luận</p>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                            aria-controls="nav-contact" aria-selected="false" target="_self"
                            style="border-top-left-radius: 0;border-top-right-radius: 0;">
                            <p>Giảm giá</p>
                        </a>
                        <a class="nav-item nav-link active" id="nav-contact-tab" href="contact.php" role="tab"
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
                        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                            aria-controls="nav-contact" aria-selected="true"
                            style="border-top-left-radius: 0;border-top-right-radius: 0;">
                            <p>Đặt Hàng</p>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                            aria-controls="nav-contact" aria-selected="false"
                            style="border-top-left-radius: 0;border-top-right-radius: 0;">
                            <p>Thảo Luận</p>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                            aria-controls="nav-contact" aria-selected="false"
                            style="border-top-left-radius: 0;border-top-right-radius: 0;">
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
            <!-------------------------------------------------------------->
        </div>
        <!------------------------------------------------------------------>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light headnav-1" style="height: 60px;">
            <div class="container-fluid">
                <a class="CaFo-brand" href="#" style="margin-right: 15px;"><img src="./img/logo.jpg" style="width: 40px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-top: 16px;">
                    <div class="navbar-nav" style="margin: auto;">
                        <div class="dropdown" style="margin-right: 10px; height: 40px;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tỉnh Thành
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <form class="form-inline md-form form-sm mt-0" style="margin-left: 10px;">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input class="form-control form-control-sm ml-3 w-75" type="text"
                                        placeholder="Tìm tỉnh thành" aria-label="Tìm tỉnh thành">
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
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <input type="text" class="form-control" placeholder="Địa điểm, món ăn,..."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="dropdown" style="margin-right: 10px; height: 40px;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <button type="navbar-btn" class="btn btn-outline-dark"
                            style="height: 38px;margin-right: 10px;">App</button>
                        <span style="width: 310px; height: 38px;margin-right: 10px;margin-top: 7px;margin-left: 10px;">
                            <a href="#">Đăng Nhập</a>
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
                    </div>
                </div>
            </div>
        </nav>
        <!------------------------------------------------------------------>

        <!------------------------------------------------------------------>

        <!------------------------------------------------------------------>
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
        <!------------------------------------------------------------------>
        <div class="main" style="background: white; width: auto;">
            <div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Giới thiệu</a></li>
                    <li class="list-group-item"><a href="#">Nhà Đầu tư</a></li>
                    <li class="list-group-item"><a href="#">Trợ giúp</a></li>
                    <li class="list-group-item"><a href="#">Góp ý</a></li>
                    <li class="list-group-item"><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="info">
                <h1>Liên hệ chúng tôi</h1>
                <!-- su dung object Models Agency (Location, Address, Phone, Email, Website, WorkTime) -->
                <?php 
                    include '../Models/Agency.php';
                    include '../Controllers/connectDB.php';
                    $sql = "SELECT * FROM Agency";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $newAgency = new Agency($row);
                ?>
                    <div class="info-group">
                        <h3 style="color: rgba(255, 0, 0, 0.671);font-weight: bold;margin-bottom: 3px;">
                            <?php echo $newAgency->getLocation(); ?>
                        </h3>
                        <p style="color: gray;font-weight: lighter;font-size: 14px;margin-bottom: inherit;">
                            <?php echo $newAgency->getAddress(); ?>
                        </p>
                        <div>
                            <p class="cont-info">Điện thoại: </p>
                            <p class="add-info">
                                <?php echo $newAgency->getPhone(); ?>
                            </p>
                        </div>
                        <div>
                            <p class="cont-info">Email: </p>
                            <p class="add-info">
                                <?php echo $newAgency->getEmail(); ?>
                            </p>
                        </div>
                        <div>
                            <p class="cont-info">Website: </p>
                            <p class="add-info">
                                <?php echo $newAgency->getWebsite(); ?>
                            </p>
                        </div>
                        <div>
                            <p class="cont-info">Giờ làm việc: </p>
                            <p class="add-info">
                                <?php echo $newAgency->getWorkTime(); ?>
                            </p>
                        </div>
                    </div>
                <?php
                    }
                    include '../Controllers/disconnectDB.php';
                ?>
                    <div class="info-group">
                        <h3 style="color: rgba(255, 0, 0, 0.671);font-weight: bold;margin-bottom: 3px;">Phòng Quảng Cáo</h3>
                        <p style="color: gray;font-weight: lighter;font-size: 14px;margin-bottom: inherit;">Tầng 6, 152
                            Hoàng Văn Thụ, Hồng Bàng, Hải Phòng</p>
                        <div>
                            <p class="cont-info">Điện thoại: </p>
                            <p class="add-info">1900 6510</p>
                        </div>
                        <div>
                            <p class="cont-info">Email: </p>
                            <p class="add-info">info@CaFo.vn</p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="complain" style="background: white; width: auto;">
            <div></div>
            <div>
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Họ tên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Họ tên">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Địa chỉ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Điện thoại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Điện thoại">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nội Dung</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Nội dung"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Gửi thông tin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!------------------------------------------------------------------>
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