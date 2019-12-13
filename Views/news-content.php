<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Food Blog</title>

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./w3.css">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <link href="css/blog-style.css" rel="stylesheet">

    <script>
    function gup(name, url) {
        if (!url) url = location.href;
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regexS = "[\\?&]" + name + "=([^&#]*)";
        var regex = new RegExp(regexS);
        var results = regex.exec(url);
        return results == null ? null : results[1];
    }

    function loadXMLDoc() {        
        var xmlhttp;
        if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
        else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        return xmlhttp;
    }

    function showContent() {
        var ID = gup('BlogID', location.url);
        var xmlhttp = loadXMLDoc();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)
                if (xmlhttp.status == 200) {
                    document.getElementById("blog-content").innerHTML = xmlhttp.responseText;
                }
            else alert("Status is " + xmlhttp.status);
        }
        var para = "?BlogID=" + ID;
        xmlhttp.open("GET", "../Controllers/handleNewsContent.php" + para, true);
        xmlhttp.send();
    }

    function showComments() {
        var ID = gup('BlogID', location.url);
        var xmlhttp = loadXMLDoc();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)
                if (xmlhttp.status == 200) {
                    document.getElementById("blog-comment").innerHTML = xmlhttp.responseText;
                }
            else alert("Status is " + xmlhttp.status);
        }
        var para = "?BlogID=" + ID;
        xmlhttp.open("GET", "../Controllers/handleNewsComments.php" + para, true);
        xmlhttp.send();
    }

    function cmt() {        
        var ID = gup('BlogID', location.url);
        var content = document.getElementById("comment-content").value;
        if (content.trim() != "") {
            var xmlhttp = loadXMLDoc();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4){
                    if (xmlhttp.status == 200) {
                        if (xmlhttp.responseText == "true"){
                            showComments();
                            document.getElementById("comment-content").value = "";
                        }
                        else{
                            alert("Chưa đăng nhập");
                        }
                    }
                    else alert("Status is " + xmlhttp.status);
                }                
            }
            var para = "?BlogID=" + ID + "&content=" + content;
            xmlhttp.open("GET", "../Controllers/handlePostComments.php" + para, true);
            xmlhttp.send();
        }
    }
    </script>
</head>

<body>
    <div class="container" style="background: white;">
        <div class="row">
            <!--Header-->
            <div id="intro-head">
                <!-------------------------------------------------------------->
                <div class="w3-section">
                    <img class="mySlides w3-animate-fading" src="./img/adv-head1.jpg"
                        style="display: none; width: 1110px;">
                    <img class="mySlides w3-animate-fading" src="./img/adv-head2.jpg"
                        style="display: block; width: 1110px;">
                </div>
                <!-------------------------------------------------------------->
                <div id="header-menu">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height: 40px;">
                            <a class="nav-item nav-link" id="nav-home-tab" href="homepage.php" role="tab"
                                aria-controls="nav-home" aria-selected="false" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p class="header-text">Trang Chủ</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" href="hot.php" role="tab"
                                aria-controls="nav-profile" aria-selected="true" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p class="header-text">Hot</p>
                            </a>
                            <a class="nav-item nav-link active" id="nav-contact-tab" href="review.php" role="tab"
                                aria-controls="nav-contact" aria-selected="false" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p class="header-text">Review</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                                aria-controls="nav-contact" aria-selected="true" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p class="header-text">Đặt bàn</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                                aria-controls="nav-contact" aria-selected="false" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p class="header-text">Thảo luận</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab"
                                aria-controls="nav-contact" aria-selected="false" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p class="header-text">Giảm giá</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" href="contact.php" role="tab"
                                aria-controls="nav-contact" aria-selected="false" target="_self"
                                style="border-top-left-radius: 0;border-top-right-radius: 0;">
                                <p class="header-text">Liên hệ</p>
                            </a>
                        </div>
                    </nav>
                </div>
                <!-------------------------------------------------------------->
            </div>
            <div class="row">
                <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="height: 60px;">
                    <div class="container-fluid">
                        <a class="foody-brand" href="#" style="margin-right: 15px;"><img src="./img/logo.jpg"
                                style="width: 40px;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation">
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
                                <span
                                    style="width: 310px; height: 38px;margin-right: 10px;margin-top: 7px;margin-left: 10px;">
                                    <a href="Login/Login.php" class="header-text">Đăng Nhập</a>
                                </span>
                                <div class="dropdown" style="margin-right: 10px; height: 40px;">
                                    <button type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" class="btn btn-primary btn-circle">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                <div class="dropdown" style="margin-right: 10px; height: 40px;">
                                    <button type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" class="btn btn-warning">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" aria-haspopup="true"
                                    aria-expanded="false" style="height: 37px;">
                                    <img src="./img/vn.png" style="width: 25px;vertical-align: 0;">
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div id="blog-content">

                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <img class="button" src="images/like-button.jpg" alt="">
                        <img class="button" src="images/share-button.jpg" alt="">
                    </div>
                    <p style="font-size:15px; float: right">Đánh giá: &nbsp; &nbsp;</p>
                    <span class="fa fa-star rating-star"></span>
                    <span class="fa fa-star rating-star"></span>
                    <span class="fa fa-star rating-star"></span>
                    <span class="fa fa-star rating-star"></span>
                    <span class="fa fa-star rating-star"></span>
                </div>

                <div class="card mb-4 mt-1">
                    <h5 class="card-header">Để lại bình luận:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment-content">
                                </textarea>
                            </div>
                            <button type="button" onclick="cmt()" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <img src="images/like-icon.png" alt="" class="mb-1" width="15">
                <a href="#" style="font-size: 15px">Ngân Lê, IVORY, nm và 34 người khác</a>
                <hr>

                <div id="blog-comment">

                </div>
                <hr>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="mt-9">
                    <img class="img-fluid rounded mt-9 advertise-photo-header" src="images/advertisement.jpg" alt="">
                    <div class="card">
                        <div class="row mt-2 adv-content">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <img class="img-fluid rounded mt-9 advertise-photo" src="images/advertisement-2.jpg"
                                    alt="">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="padding:0">
                                <div class="row">
                                    <h3 style="font-size: 17px;text-decoration: none;font-style: normal;">Tự hào gắn kết
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4" style="padding:0">
                                        <button type="button" class="btn mb-2 btn-warning"
                                            style="color: white; padding: 0; height: 30px; font-size: 10px;">Quảng
                                            cáo
                                        </button>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="padding:0">
                                        <p style="font-size:10px">https://www.highlandscoffee.com.vn/</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-primary btn-block">LEARN MORE</button>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <ul style="margin-top: 20px; visibility: visible;" class="test1 nav nav-tabs">
                        <li
                            style="text-align: center;padding: 0 10px; border: 1px solid lightgray; background-color:rgba(0,0,0,.03)">
                            <a data-toggle="tab" href="#">Mới nhất</a></li>
                        <li style="text-align: center;padding: 0 10px; margin-left: 10px"><a data-toggle="tab"
                                href="#">Xem nhiều nhất
                            </a></li>
                    </ul>
                    <div class="card">
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img class="d-flex mr-3 rounded my-2 blog-post-photo" src="images/blog-post-1.jpg"
                                        alt="">
                                </div>
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                    <a href="#">
                                        <h4 class="mt-2" style="color:black">
                                            Rùng mình với VÙNG ĐẤT BÍ ẨN đầy ma mị tại Helio MÙA LỄ HALLOWEEN NÀY
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img class="d-flex mr-3 rounded my-2 blog-post-photo" src="images/blog-post-2.jpg"
                                        alt="">
                                </div>
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                    <a href="#">
                                        <h4 class="mt-2" style="color:black">
                                            Muốn làm Tiểu thư, Công tử nhất định phải ghé Quán ăn phong cách Dã Sử siêu
                                            đặc biệt này
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img class="d-flex mr-3 rounded my-2 blog-post-photo" src="images/blog-post-3.jpg"
                                        alt="">
                                </div>
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                    <a href="#">
                                        <h4 class="mt-2" style="color:black">
                                            &#40;HCM&#41; Lập kèo chiến hết nồi lẩu bò Hoàng Thu nổi tiếng tại quận 10
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img class="d-flex mr-3 rounded my-2 blog-post-photo" src="images/blog-post-4.jpg"
                                        alt="">
                                </div>
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                    <a href="#">
                                        <h4 class="mt-2" style="color:black">
                                            (HCM) Bỏ túi ổ bánh-mì-cóc-hamburger ngon rẻ khu Gò Vấp
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img class="d-flex mr-3 rounded my-2 blog-post-photo" src="images/blog-post-5.jpg"
                                        alt="">
                                </div>
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                    <a href="#">
                                        <h4 class="mt-2" style="color:black">
                                            (HCM) Căng bụng với bánh mì Hòa Mã 50 năm ở Sài Gòn
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">footer</p>
    </div>
  </footer>-->

    <!--Footer-->
    <div id="footer-cont">

        <!-------------------------------------------------------------->

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
        </div>
        <!-------------------------------------------------------------->
        <div id="info-footer">

        </div>
        <!-------------------------------------------------------------->
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
    showContent();
    showComments();
    </script>
    ?>
</body>

</html>