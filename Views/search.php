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

    function showData() {
        key = gup('key', location.url);
        var xmlhttp = loadXMLDoc();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4)
                if (xmlhttp.status == 200) {
                    document.getElementById("search-result").innerHTML = xmlhttp.responseText;
                    num = document.getElementsByClassName("item-searched").length;
                    document.getElementById("number-of-find").innerHTML = num + " kết quả";
                    document.getElementById("key-search").innerHTML = '"' + key + '"';
                }
            else alert("Status is " + xmlhttp.status);
        }
        var para = "?key=" + key;
        xmlhttp.open("GET", "../Controllers/handleSearch.php" + para, true);
        xmlhttp.send();
    }
    </script>
</head>

<body>
    <div class="container mt-50">
        <div class="row">
            <!--Header-->
            <?php include "./header.php" ?>
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
                            <li
                                style="text-align: center; padding: 0px 10px;border: 1px solid lightgray; background-color:rgba(0,0,0,.03)">
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
                            <p style="display: inline; margin-left: 10px;" id="number-of-find"> 0 </p>
                            <p style="color: red; display: inline;" id="key-search">0</p>
                        </div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-success btn-xs mt-3 mr-3">Coffee sữa</button>
                        <button type="button" class="btn btn-success btn-xs mt-3 mr-3">Coffee đá</button>
                        <button type="button" class="btn btn-success btn-xs mt-3 mr-3">Coffee rum</button>
                    </div>
                    <div id="search-result">
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
                    <p style="text-align: center;padding-top: 20px;font-size: 30px;color: #10bfb7;">Tìm địa điểm trên
                        đường
                        đi? Tải app Foody!</p>
                    <div class="app-grid">
                        <div id="thong-ke">
                            <div id="tk-text"
                                style="margin: 20px 40px 20px 40px;text-align: center;border-radius: 5px;padding: 5px;">
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
                            <div id="tk-text"
                                style="margin: 20px 65px 20px 65px;text-align: center;border-radius: 10px;padding: 3px;">
                                iOS
                            </div>
                            <a href="#"><img src="./img/ios-footer.png" alt="ios-app"></a>
                        </div>
                        <div id="Android">
                            <div id="tk-text"
                                style="margin: 20px 65px 20px 65px;text-align: center;border-radius: 10px;padding: 3px;">
                                Android
                            </div>
                            <a href="#"><img src="./img/android-footer.png" alt="ios-app"></a>
                        </div>
                        <div id="Win">
                            <div id="tk-text"
                                style="margin: 20px 65px 2px 65px;text-align: center;border-radius: 10px;padding: 3px;">
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
    showData();
    </script>
</body>

</html>