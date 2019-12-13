<?php 
    session_start();
    include "../Models/Reviews.php";
    include "../Controllers/connectDB.php";
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link href="review_css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./w3.css">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a class="nav-item nav-link" id="nav-profile-tab" href="search.php" role="tab"
                        aria-controls="nav-profile" aria-selected="true" target="_self"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Search</p>
                    </a>
                    <a class="nav-item nav-link active" id="nav-contact-tab" href="review.php" role="tab"
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
                    <a class="nav-item nav-link" id="nav-profile-tab" href="search.php" role="tab"
                        aria-controls="nav-profile" aria-selected="true"
                        style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Search</p>
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
        <!-------------------------------------------------------------->
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
    <!--**********************************************************-->

    <!--Body-->
    <div class="group-content" style="position: relative;">
        <div class="group-content-header">
            Review mới nhất
        </div>
        <div class="content-container fd-clearbox ng-scope" ng-if="Items.length>0 &amp;&amp; Type!=6">
            <?php 
                $sql = "SELECT * FROM reviews INNER JOIN restaurant ON reviews.ResID = restaurant.ResID";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $newReview = new Reviews(
                        $row['ID'],
                        $row['Title'],
                        $row['Name'],
                        $row['AddressOfReviewPlace'],
                        $row['ReviewerName'],
                        $row['ReviewContent'],
                        $row['ReviewPoint'],
                        $row['ReviewerAvatar'],
                        $row['ReviewPicture'],
                        $row['ReviewComment']
                    );
            ?>
                <!-- Begin Items -->
                <div class="content-item ng-scope" ng-repeat="item in Items">
                    <?php 
                        if (isset($_SESSION['level'])){
                            if ($_SESSION['level'] == 1){
                                echo "<a href='#'>Edit</a>";
                            }
                        }
                    ?>
                    <div class="avatar">
                        <a href="View detail food/ViewDetailFood.php" ng-href="/lam-dong/gout-coffee-pastry"
                            target="_blank"
                            ng-init="ImpressionGa(item,'O_DAU_', $index, DistrictId, '#slDistrictPlace option:selected')">
                            <img 
                                src="<?php echo $row['PictureRes'] ?>"
                                ng-src="<?php echo $row['PictureRes'] ?>">
                        </a>
                        <!-- ngIf: item.IsBooking || item.IsDelivery -->
                        <!-- ngIf: item.IsBooking || item.IsDelivery -->
                        <!-- ngIf: item.HasVideo -->
                    </div>
                    <div class="items-content hide-points">
                        <div class="review-points green"
                            ng-class="{'green':item.AvgRating>=6,'grey':item.AvgRating==0 || item.AvgRating==null} ">
                            <span class="ng-binding">
                                <?php echo $newReview->getReviewPoint(); ?>
                            </span>
                        </div>
                        <div class="title fd-text-ellip">
                            <a href="View detail food/ViewDetailFood.php" ng-bind="item.Name" target="_blank"
                                ng-click="ClickGA(item,'O_DAU_', $index, DistrictId, '#slDistrictPlace option:selected')"
                                class="ng-binding">
                                <?php echo $newReview->getReviewPlaceName(); ?>
                            </a>
                        </div>
                        <div class="desc fd-text-ellip ng-binding" ng-bind="item.Address"> 
                            <?php echo $row['Address'] ?>
                        </div>
                    </div>
                    <!-- ngIf: item.LstReview.length<1 -->
                    <!-- ngRepeat: rv in item.LstReview | limitTo:1 -->
                    <div class="items-review ng-scope" ng-repeat="rv in item.LstReview | limitTo:1">
                        <div class="avatar">
                            <a href="/thanh-vien/huyendk" ng-href="/thanh-vien/huyendk" target="_blank">
                                <img ng-src="https://images.foody.vn/usr/g13/129812/avt/c100x100/beauty-upload-api-foody-avatar-194a3607-4349-4720-acb5-a345194f12a6-191019143129.jpg"
                                    src="<?php echo $newReview->getReviewerAvatar() ?>">
                            </a>
                        </div>
                        <div class="users-content block-with-text" ng-class="{'not-align':rv.ShortReview}">
                            <a ng-href="/thanh-vien/huyendk" target="_blank" href="/thanh-vien/huyendk">
                                <b ng-bind="rv.reviewUserDisplayName" class="ng-binding">
                                    <?php echo $newReview->getReviewerName(); ?>
                                </b>
                            </a>
                            <a ng-href="/lam-dong/gout-coffee-pastry/binh-luan-2667132" ng-bind-html="rv.Comment"
                                target="_blank" class="ng-binding"
                                href="/lam-dong/gout-coffee-pastry/binh-luan-2667132">
                                <?php //echo $newReview->getReviewContent() 
                                    if ($newReview->getReviewPoint() < 5){
                                        echo "đã đến và cảm thấy tệ";
                                    }
                                    elseif ($newReview->getReviewPoint() < 8){
                                        echo "đã đến và cảm thấy bình thường";
                                    }
                                    elseif ($newReview->getReviewPoint() < 9){
                                        echo "đã đến và cảm thấy khá ổn";
                                    }
                                    else{
                                        echo "đã đến và cảm thấy tuyệt";
                                    }
                                ?>
                            </a>

                        </div>
                    </div><!-- end ngRepeat: rv in item.LstReview | limitTo:1 -->

                    <div class="items-count">
                        <a ng-click="ShowPopupReviews(item.Id)"><i class="fa fa-comment"></i> <span
                                ng-bind="item.TotalReviews|formatNK:1" class="ng-binding">59</span></a>
                        <a ng-click="ShowPopupGallery(item.Id)"><i class="fa fa-camera"></i> <span
                                ng-bind="item.TotalPictures|formatNK:1" class="ng-binding">368</span></a>

                        <a href="javascript:void(0)" class="item-save tool-custom-list-add"
                            ng-class="{'saved':item.IsSaved}" data-id="121593">

                        </a>
                    </div>
                </div>
                <!-- End Items -->
            <?php
                }
            ?>
            
        </div><!-- End -->
    </div>
    <!--***************************************************************-->

    <div class="group-content">
        <div class="group-content-header">
            Review hay nhất
        </div>
        <div class="content-container fd-clearbox ng-scope" ng-if="Items.length>0 &amp;&amp; Type!=6">
            <?php 
                $sql = "SELECT * FROM reviews INNER JOIN restaurant ON reviews.ResID = restaurant.ResID ORDER BY reviews.ReviewPoint DESC";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $newReview = new Reviews(
                        $row['ID'],
                        $row['Title'],
                        $row['Name'],
                        $row['AddressOfReviewPlace'],
                        $row['ReviewerName'],
                        $row['ReviewContent'],
                        $row['ReviewPoint'],
                        $row['ReviewerAvatar'],
                        $row['ReviewPicture'],
                        $row['ReviewComment']
                    );
            ?>
                <!-- Begin Items -->
                <div class="content-item ng-scope" ng-repeat="item in Items">
                    <?php 
                        if (isset($_SESSION['level'])){
                            if ($_SESSION['level'] == 1){
                                echo "<a href='#'>Edit</a>";
                            }
                        }
                    ?>
                    <div class="avatar">
                        <a href="View detail food/ViewDetailFood.php" ng-href="/lam-dong/gout-coffee-pastry"
                            target="_blank"
                            ng-init="ImpressionGa(item,'O_DAU_', $index, DistrictId, '#slDistrictPlace option:selected')">
                            <img 
                                src="<?php echo $row['PictureRes'] ?>"
                                ng-src="<?php echo $row['PictureRes'] ?>">
                        </a>
                        <!-- ngIf: item.IsBooking || item.IsDelivery -->
                        <!-- ngIf: item.IsBooking || item.IsDelivery -->
                        <!-- ngIf: item.HasVideo -->
                    </div>
                    <div class="items-content hide-points">
                        <div class="review-points green"
                            ng-class="{'green':item.AvgRating>=6,'grey':item.AvgRating==0 || item.AvgRating==null} ">
                            <span class="ng-binding">
                                <?php echo $newReview->getReviewPoint(); ?>
                            </span>
                        </div>
                        <div class="title fd-text-ellip">
                            <a href="View detail food/ViewDetailFood.php" ng-bind="item.Name" target="_blank"
                                ng-click="ClickGA(item,'O_DAU_', $index, DistrictId, '#slDistrictPlace option:selected')"
                                class="ng-binding">
                                <?php echo $newReview->getReviewPlaceName(); ?>
                            </a>
                        </div>
                        <div class="desc fd-text-ellip ng-binding" ng-bind="item.Address"> 
                            <?php echo $row['Address'] ?>
                        </div>
                    </div>
                    <!-- ngIf: item.LstReview.length<1 -->
                    <!-- ngRepeat: rv in item.LstReview | limitTo:1 -->
                    <div class="items-review ng-scope" ng-repeat="rv in item.LstReview | limitTo:1">
                        <div class="avatar">
                            <a href="/thanh-vien/huyendk" ng-href="/thanh-vien/huyendk" target="_blank">
                                <img ng-src="https://images.foody.vn/usr/g13/129812/avt/c100x100/beauty-upload-api-foody-avatar-194a3607-4349-4720-acb5-a345194f12a6-191019143129.jpg"
                                    src="<?php echo $newReview->getReviewerAvatar() ?>">
                            </a>
                        </div>
                        <div class="users-content block-with-text" ng-class="{'not-align':rv.ShortReview}">
                            <a ng-href="/thanh-vien/huyendk" target="_blank" href="/thanh-vien/huyendk">
                                <b ng-bind="rv.reviewUserDisplayName" class="ng-binding">
                                    <?php echo $newReview->getReviewerName(); ?>
                                </b>
                            </a>
                            <a ng-href="/lam-dong/gout-coffee-pastry/binh-luan-2667132" ng-bind-html="rv.Comment"
                                target="_blank" class="ng-binding"
                                href="/lam-dong/gout-coffee-pastry/binh-luan-2667132">
                                <?php //echo $newReview->getReviewContent() 
                                    if ($newReview->getReviewPoint() < 5){
                                        echo "đã đến và cảm thấy tệ";
                                    }
                                    elseif ($newReview->getReviewPoint() < 8){
                                        echo "đã đến và cảm thấy bình thường";
                                    }
                                    elseif ($newReview->getReviewPoint() < 9){
                                        echo "đã đến và cảm thấy khá ổn";
                                    }
                                    else{
                                        echo "đã đến và cảm thấy tuyệt";
                                    }
                                ?>
                            </a>

                        </div>
                    </div><!-- end ngRepeat: rv in item.LstReview | limitTo:1 -->

                    <div class="items-count">
                        <a ng-click="ShowPopupReviews(item.Id)"><i class="fa fa-comment"></i> <span
                                ng-bind="item.TotalReviews|formatNK:1" class="ng-binding">59</span></a>
                        <a ng-click="ShowPopupGallery(item.Id)"><i class="fa fa-camera"></i> <span
                                ng-bind="item.TotalPictures|formatNK:1" class="ng-binding">368</span></a>

                        <a href="javascript:void(0)" class="item-save tool-custom-list-add"
                            ng-class="{'saved':item.IsSaved}" data-id="121593">

                        </a>
                    </div>
                </div>
                <!-- End Items -->
            <?php
                }
            ?>
            
        </div><!-- End -->
    </div>

    <!--******************************************************************-->
    <!--Footer-->
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

    <!--JQuery-->
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