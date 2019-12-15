<?php
include("connectDB.php");
include("../Models/Restaurant.php");
include("../Models/Reviews.php");
$response_str = "";
if (isset($_GET["key"])) {
    $queryString = 'SELECT * FROM restaurant WHERE Name REGEXP "'.$_GET["key"] .'"';
    $result = mysqli_query($conn, $queryString);
    $count = 0;
    while ($row = mysqli_fetch_array($result)) {
        $count++;
        $r = new Restaurant(
            $row["ResID"],
            $row["Address"],
            $row["Name"],
            $row["Rating"],
            $row["WorkTime"],
            $row["PictureRes"]
        );

        $response_str .= '
        <div class="mt-3">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="left-info">
                        <div class="item-searched">
                            <div class="row">
                                <img src="' . $r->getPicture() . '" alt="" class="img-fluid rounded res-photo">
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
                            <div class="point">' . $r->getRating() . '</div>
                            <div class="resname ml-2">
                                <a href="View detail food/ViewDetailFoodOverall.php?key='.$r->getResID().'" class="name-item"><b>' . $r->getName() . '</b></a>
                                <div class="address">
                                    <p><b>' . $r->getAddress() . '</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" style="border: 0.7px solid green">
                    <div class="res-cmt my-1">
                        <div class="comment-block">
        ';
        $queryString = "SELECT * FROM reviews WHERE ResID=" . $r->getResID();
        $cmts = mysqli_query($conn, $queryString);
        while ($row = mysqli_fetch_array($cmts)) {
            $c = new Reviews(
                $row["ID"],
                $row["Title"],
                $r->getName(),
                $r->getAddress(),
                $row["ReviewerName"],
                $row["ReviewContent"],
                $row["ReviewPoint"],
                $row["ReviewerAvatar"],
                $row["ReviewPicture"],
                $row["ReviewComment"]
            );
            $response_str .= '                                                                    
                            <div class="row">
                                <div class="media ml-3">
                                    <img class="d-flex mr-3 rounded-circle avatar" src="' . $c->getReviewerAvatar() . '" alt="">
                                    <div class="media-body ml-3">
                                        <div class="row">
                                            <a href="#" class="name-reviewer">' . $c->getReviewerName() . '&nbsp;</a>
                                            <p>' . $c->getReviewContent() . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
            ';
        };
        $response_str .= '
                        </div>
                    </div>                                                                                    
                </div>
            </div>
        </div>
        ';
    }
    if ($count == 0){
        $response_str .= "<h4>Không tìm thấy địa điểm nào</h4>";
    }
}
echo $response_str;
?>