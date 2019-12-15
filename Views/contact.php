<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" ; content="text/html" ; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tổng Hợp Địa Điểm Ăn Uống Tại TPHCM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./w3.css">
    <link href="./style.css" type="text/css" rel="stylesheet">
</head>

<body style="margin: 0 auto;">
    <div id="home-page">
        <?php include "header.php"; ?>
        <script>
            $(document).ready(function(e) {
                $(".nav").find(".active").removeClass("active");
                $("#nav-contact-tab").addClass("active");
                //document.location.href = "review.php";
            })
        </script>
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
                while ($row = mysqli_fetch_assoc($result)) {
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 9000);
        }
    </script>
</body>

</html>