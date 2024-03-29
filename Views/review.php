<?php
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./w3.css">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script language="javascript" type="text/javascript" src="jquery-1.9.1.min.js"></script>
</head>

<body>
    <!--Header-->
    <?php include "header.php"; ?>
    <script>
        $(document).ready(function(e) {
            $(".nav").find(".active").removeClass("active");
            $("#nav-review-tab").addClass("active");
            //document.location.href = "review.php";
        })
    </script>
    <!--Body-->
    <div class="group-content" style="position: relative;">
        <div class="group-content-header">
            Review mới nhất
        </div>
        <div class="content-container fd-clearbox ng-scope" ng-if="Items.length>0 &amp;&amp; Type!=6">
            <?php
            $sql = "SELECT * FROM reviews INNER JOIN restaurant ON reviews.ResID = restaurant.ResID";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $sql = "SELECT * FROM restaurant WHERE ResID=" . $row["ResID"];
                $result2 = mysqli_query($conn, $sql);
                while ($restaurant = mysqli_fetch_assoc($result2)) {
                    $newReview = new Reviews(
                        $row["ID"],
                        $row["Title"],
                        $restaurant["Name"],
                        $restaurant["Address"],
                        $row["ReviewerName"],
                        $row["ReviewContent"],
                        $row["ReviewPoint"],
                        $row["ReviewerAvatar"],
                        $row["ReviewPicture"],
                        $row["ReviewComment"]
                    );
                }
                ?>
                <!-- Begin Items -->
                <div class="content-item ng-scope" ng-repeat="item in Items">
                    <?php
                        if (isset($_SESSION['level'])) {
                            if ($_SESSION['level'] == 1) {
                                echo "<a href='#'>Edit</a>";
                            }
                        }
                        ?>
                    <div class="avatar">
                        <a href="View detail food/ViewDetailFood2.php" ng-href="/lam-dong/gout-coffee-pastry" target="_blank" ng-init="ImpressionGa(item,'O_DAU_', $index, DistrictId, '#slDistrictPlace option:selected')">
                            <img src="<?php echo $row['PictureRes'] ?>" ng-src="<?php echo $row['PictureRes'] ?>">
                        </a>
                        <!-- ngIf: item.IsBooking || item.IsDelivery -->
                        <!-- ngIf: item.IsBooking || item.IsDelivery -->
                        <!-- ngIf: item.HasVideo -->
                    </div>
                    <div class="items-content hide-points">
                        <div class="review-points green" ng-class="{'green':item.AvgRating>=6,'grey':item.AvgRating==0 || item.AvgRating==null} ">
                            <span class="ng-binding">
                                <?php echo $newReview->getReviewPoint(); ?>
                            </span>
                        </div>
                        <div class="title fd-text-ellip">
                            <a href="View detail food/ViewDetailFood2.php" ng-bind="item.Name" target="_blank" ng-click="ClickGA(item,'O_DAU_', $index, DistrictId, '#slDistrictPlace option:selected')" class="ng-binding">
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
                                <img ng-src="https://images.foody.vn/usr/g13/129812/avt/c100x100/beauty-upload-api-foody-avatar-194a3607-4349-4720-acb5-a345194f12a6-191019143129.jpg" src="<?php echo $newReview->getReviewerAvatar() ?>">
                            </a>
                        </div>
                        <div class="users-content block-with-text" ng-class="{'not-align':rv.ShortReview}">
                            <a ng-href="/thanh-vien/huyendk" target="_blank" href="/thanh-vien/huyendk">
                                <b ng-bind="rv.reviewUserDisplayName" class="ng-binding">
                                    <?php echo $newReview->getReviewerName(); ?>
                                </b>
                            </a>
                            <a ng-href="/lam-dong/gout-coffee-pastry/binh-luan-2667132" ng-bind-html="rv.Comment" target="_blank" class="ng-binding" href="/lam-dong/gout-coffee-pastry/binh-luan-2667132">
                                <?php //echo $newReview->getReviewContent() 
                                    if ($newReview->getReviewPoint() < 5) {
                                        echo "đã đến và cảm thấy tệ";
                                    } elseif ($newReview->getReviewPoint() < 8) {
                                        echo "đã đến và cảm thấy bình thường";
                                    } elseif ($newReview->getReviewPoint() < 9) {
                                        echo "đã đến và cảm thấy khá ổn";
                                    } else {
                                        echo "đã đến và cảm thấy tuyệt";
                                    }
                                    ?>
                            </a>

                        </div>
                    </div><!-- end ngRepeat: rv in item.LstReview | limitTo:1 -->

                    <div class="items-count">
                        <a ng-click="ShowPopupReviews(item.Id)"><i class="fa fa-comment"></i> <span ng-bind="item.TotalReviews|formatNK:1" class="ng-binding">59</span></a>
                        <a ng-click="ShowPopupGallery(item.Id)"><i class="fa fa-camera"></i> <span ng-bind="item.TotalPictures|formatNK:1" class="ng-binding">368</span></a>

                        <a href="javascript:void(0)" class="item-save tool-custom-list-add" ng-class="{'saved':item.IsSaved}" data-id="121593">

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
            while ($row = mysqli_fetch_assoc($result)) {
                $sql = "SELECT * FROM restaurant WHERE ResID=" . $row["ResID"];
                $result2 = mysqli_query($conn, $sql);
                while ($restaurant = mysqli_fetch_assoc($result2)) {
                    $newReview = new Reviews(
                        $row["ID"],
                        $row["Title"],
                        $restaurant["Name"],
                        $restaurant["Address"],
                        $row["ReviewerName"],
                        $row["ReviewContent"],
                        $row["ReviewPoint"],
                        $row["ReviewerAvatar"],
                        $row["ReviewPicture"],
                        $row["ReviewComment"]
                    );
                }
                ?>
                <!-- Begin Items -->
                <div class="content-item ng-scope" ng-repeat="item in Items">
                    <?php
                        if (isset($_SESSION['level'])) {
                            if ($_SESSION['level'] == 1) {
                                echo "<a href='#'>Edit</a>";
                            }
                        }
                        ?>
                    <div class="avatar">
                        <a href="View detail food/ViewDetailFood.php" ng-href="/lam-dong/gout-coffee-pastry" target="_blank" ng-init="ImpressionGa(item,'O_DAU_', $index, DistrictId, '#slDistrictPlace option:selected')">
                            <img src="<?php echo $row['PictureRes'] ?>" ng-src="<?php echo $row['PictureRes'] ?>">
                        </a>
                        <!-- ngIf: item.IsBooking || item.IsDelivery -->
                        <!-- ngIf: item.IsBooking || item.IsDelivery -->
                        <!-- ngIf: item.HasVideo -->
                    </div>
                    <div class="items-content hide-points">
                        <div class="review-points green" ng-class="{'green':item.AvgRating>=6,'grey':item.AvgRating==0 || item.AvgRating==null} ">
                            <span class="ng-binding">
                                <?php echo $newReview->getReviewPoint(); ?>
                            </span>
                        </div>
                        <div class="title fd-text-ellip">
                            <a href="View detail food/ViewDetailFood.php" ng-bind="item.Name" target="_blank" ng-click="ClickGA(item,'O_DAU_', $index, DistrictId, '#slDistrictPlace option:selected')" class="ng-binding">
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
                                <img ng-src="https://images.foody.vn/usr/g13/129812/avt/c100x100/beauty-upload-api-foody-avatar-194a3607-4349-4720-acb5-a345194f12a6-191019143129.jpg" src="<?php echo $newReview->getReviewerAvatar() ?>">
                            </a>
                        </div>
                        <div class="users-content block-with-text" ng-class="{'not-align':rv.ShortReview}">
                            <a ng-href="/thanh-vien/huyendk" target="_blank" href="/thanh-vien/huyendk">
                                <b ng-bind="rv.reviewUserDisplayName" class="ng-binding">
                                    <?php echo $newReview->getReviewerName(); ?>
                                </b>
                            </a>
                            <a ng-href="/lam-dong/gout-coffee-pastry/binh-luan-2667132" ng-bind-html="rv.Comment" target="_blank" class="ng-binding" href="/lam-dong/gout-coffee-pastry/binh-luan-2667132">
                                <?php //echo $newReview->getReviewContent() 
                                    if ($newReview->getReviewPoint() < 5) {
                                        echo "đã đến và cảm thấy tệ";
                                    } elseif ($newReview->getReviewPoint() < 8) {
                                        echo "đã đến và cảm thấy bình thường";
                                    } elseif ($newReview->getReviewPoint() < 9) {
                                        echo "đã đến và cảm thấy khá ổn";
                                    } else {
                                        echo "đã đến và cảm thấy tuyệt";
                                    }
                                    ?>
                            </a>

                        </div>
                    </div><!-- end ngRepeat: rv in item.LstReview | limitTo:1 -->

                    <div class="items-count">
                        <a ng-click="ShowPopupReviews(item.Id)"><i class="fa fa-comment"></i> <span ng-bind="item.TotalReviews|formatNK:1" class="ng-binding">59</span></a>
                        <a ng-click="ShowPopupGallery(item.Id)"><i class="fa fa-camera"></i> <span ng-bind="item.TotalPictures|formatNK:1" class="ng-binding">368</span></a>

                        <a href="javascript:void(0)" class="item-save tool-custom-list-add" ng-class="{'saved':item.IsSaved}" data-id="121593">

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