<?php
$user_name = "";
session_start(); ?>
<?php include("../Controllers/handleHomePage.php");
if (isset($_POST) && sizeof($_POST) > 0) header('Location: Login/logout.php');
?>
<!------------------------------------------------------------------>
<div id="home-page">
    <script language="javascript" type="text/javascript" src="jquery-1.9.1.min.js"></script>
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
                    <a class="nav-item nav-link active" id="nav-home-tab" href="homepage.php" role="tab" aria-controls="nav-home" aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Trang Chủ</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-hot-tab" href="hot.php" role="tab" aria-controls="nav-profile" aria-selected="true" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Hot</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-review-tab" href="review.php" role="tab" aria-controls="nav-contact" aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Review</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-order-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="true" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Đặt bàn</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-chat-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Thảo luận</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-discount-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Giảm giá</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="contact.php" role="tab" aria-controls="nav-contact" aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Liên hệ</p>
                    </a>
                </div>

            </nav>
        </div>
        <!-------------------------------------------------------------->
        <div class="pos-f-t headmenu-sm">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-light p-4" id="switch-tab">
                    <a class="nav-item nav-link" id="nav-home-tab" href="homepage.php" role="tab" aria-controls="nav-home" aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Trang Chủ</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-profile-tab" href="hot.php" role="tab" aria-controls="nav-profile" aria-selected="true" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Hot</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="review.php" role="tab" aria-controls="nav-contact" aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Review</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="true" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Đặt Hàng</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Thảo Luận</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Giảm Giá</p>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" href="contact.php" role="tab" aria-controls="nav-contact" aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
                        <p>Liên Hệ</p>
                    </a>
                </div>

            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <!-------------------------------------------------------------->
    </div>
    <!------------------------------------------------------------------>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light headnav-1" style="height: 60px;">
        <div class="container-fluid">
            <a class="foody-brand" href="#" style="margin-right: 15px;"><img src="./img/logo.jpg" style="width: 40px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-top: 16px;">
                <div class="navbar-nav" style="margin: auto;">
                    <div class="dropdown" style="margin-right: 10px; height: 40px;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <input type="text" class="form-control" id="searchbox" placeholder="Địa điểm, món ăn,..." value="" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="searchfunc()">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            <script>
                                function searchfunc() {
                                    key = document.getElementById("searchbox").value;
                                    window.location = './search.php?key=' + key;
                                }
                            </script>
                        </div>
                    </div>
                    <div class="dropdown" style="margin-right: 10px; height: 40px;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a href="Login/Login.php" id="btn_login">Đăng Nhập</a>

                        <form action="homepage.php" method="post" id="form_logout">
                            <input type="text" value="<?php echo $user_name ?>" name="username" hidden>
                            <a href="" id="username"><?php echo $user_name ?></a>
                        </form>
                    </span>
                    <button type="submit" id="btn_logout" form="form_logout" value="Log out" class="btn btn-danger" style="height:35px; margin-right:10px;"> <i class="fa fa-sign-out"></i> </button>
                    <?php include("../Controllers/handleHomePage.php"); ?>

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
    <!------------------------------------------------------------------>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light headnav-2" style="height: 60px;">
        <div class="container-fluid"></div>
        <a class="foody-brand" href="#" style="margin-right: 15px;"><img src="./img/foody-vn.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-top: 16px;">
            <div class="navbar-nav" style="margin: auto;">
                <div class="dropdown" style="margin-right: 10px; height: 40px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            </div>
        </div>
</div>
</nav>
<!------------------------------------------------------------------>
<nav class="navbar navbar-expand-lg navbar-light bg-light headnav-3">
    <a class="foody-brand" href="#" style="margin-right: 15px;"><img src="./img/foody-vn.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-top: 10px;">
        <div class="navbar-nav">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 120px;">
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
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: 5px;width: 120px;">
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
            <div class="input-group mb-3" style="margin-right: 10px;margin-top: 15px;">
                <input type="text" class="form-control" placeholder="Địa điểm, món ăn,..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 120px;">
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
            <button type="navbar-btn" class="btn btn-outline-dark" style="height: 38px;margin-top: 5px;">App</button>
        </div>
    </div>
</nav>
<!------------------------------------------------------------------>