<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tổng Hợp Địa Điểm Ăn Uống Tại TPHCM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./w3.css">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <script language="javascript" type="text/javascript" src="jquery-1.9.1.min.js"></script>
</head>

<body>
    <?php include "./header.php" ?>
    <!-- <nav class="nav justify-content-center login" style="background-color: #f8f9fa;">
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
        </nav> -->
    <!------------------------------------------------------------------>
    <div id="intro-banner">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="3000">
                        <img src="./img/food-banner1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block glow">
                            <h5>Don Chicken - Chicken & Pub</h5>
                            <p>Ngất ngây hộp gà 4 vị</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="3000">
                        <img src="./img/food-banner2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block glow">
                            <h5>Burger King</h5>
                            <p>Gà nướng dứa</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="3000">
                        <img src="./img/food-banner3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block glow">
                            <h5>Now Fresh</h5>
                            <p>Mua 1 tặng 1</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="3000">
                        <img src="./img/food-banner4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block glow">
                            <h5>Gà rán Popeyes</h5>
                            <p>Tặng dù chống tia UV cao cấp</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------>
    <div id="main-body">
        <div id="delivery-group">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 10px;">
                <a class="navbar-brand" href="#">
                    <img src="./img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Giao tận nơi
                </a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Deal hôm nay</a>
                        <a class="nav-item nav-link" href="#">Tất cả</a>
                        <a class="nav-item nav-link" href="#">Food</a>
                        <a class="nav-item nav-link" href="#">Drink</a>
                        <a class="nav-item nav-link" href="#">Vege</a>
                        <a class="nav-item nav-link" href="#">Cakes</a>
                        <a class="nav-item nav-link" href="#">Dessert</a>
                        <div class="dropdown">
                            <span class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xem thêm</span>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="card-group1" class="card-columns" style="padding: 20px;border: 5px solid azure;background-color: rgb(34, 33, 33);">
                <?php
                include '../Models/Restaurant.php';
                include '../Controllers/connectDB.php';
                include '../Models/User.php';
                $result = mysqli_query($conn, "SELECT * FROM user ORDER BY UserID ASC");
                $list_user = array();
                $row_count = $result->num_rows;
                if ($row_count > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        $user = new User($row['UserID'], $row['UserName'], $row['Sex'], $row['AccountName'], $row['Password'], $row['UserLevel']);
                        array_push($list_user, $user);
                    }
                }
                for ($i = 0; $i < count($list_user); $i++) {
                    if ($username == $list_user[$i]->getAccountName()) {
                        if ($password == $list_user[$i]->getPassword()) {
                            $_SESSION['level'] = $list_user[$i]->getUserLevel();
                        }
                    }
                }
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 3"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card1 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFood.php?key=<?php echo $newRes->getResID() ?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 4"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card2 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID() ?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 5"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card3 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID()?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 6"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card4 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID()?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 7"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card5 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID()?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 8"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card6 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID()?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>

                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 9"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card7 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID()?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 10"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card8 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID()?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 11"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card9 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID()?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 12"));
                $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                ?>
                <div class="card10 card">
                    <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./View detail food/ViewDetailFoodOverall.php?key=<?php echo $newRes->getResID()?>">
                            <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        <?php
                        if (isset($_SESSION["level"])) {
                            if ($_SESSION["level"] == 0) {
                                echo "<a href=\"admin/resume-add.php?resid=" . $newRes->getResID() . "\">Edit</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                //include '../Controllers/disconnectDB.php';
                ?>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 10px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                Đặt bàn ưu đãi
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: flex-end;">
                <div class="navbar-nav" style="margin-right: 10px;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tìm Danh Mục</button>
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Buffet</a>
                            <a class="dropdown-item" href="#">Sinh nhật</a>
                            <a class="dropdown-item" href="#">Món Hoa</a>
                            <a class="dropdown-item" href="#">Món Nhật</a>
                            <a class="dropdown-item" href="#">Món Hàn</a>
                            <a class="dropdown-item" href="#">Món Thái</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav">
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nổi bật</button>
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nổi bật</a>
                            <a class="dropdown-item" href="#">Đặt nhiều</a>
                            <a class="dropdown-item" href="#">Mới</a>
                            <a class="dropdown-item" href="#">Gần tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!------------------------------------------------------------------>
    <div id="order-group">
        <div id="card-group1" class="card-columns" style="padding: 20px;border: 5px solid azure;background-color: rgb(34, 33, 33);">
            <?php
            //include '../Models/Restaurant.php';
            //include '../Controllers/connectDB.php';
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 10"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card1 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 9"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card2 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 8"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card3 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 7"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card4 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 6"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card5 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 5"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card6 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 4"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card7 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 3"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card8 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 2"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card9 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
            <?php
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 1"));
            $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
            ?>
            <div class="card10 card">
                <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#">
                        <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                    </a>
                    <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 10px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                Khám phá
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: flex-end;">
                <div class="navbar-nav" style="margin-right: 10px;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-Danh Mục-</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Buffet</a>
                            <a class="dropdown-item" href="#">Sinh nhật</a>
                            <a class="dropdown-item" href="#">Món Hoa</a>
                            <a class="dropdown-item" href="#">Món Nhật</a>
                            <a class="dropdown-item" href="#">Món Hàn</a>
                            <a class="dropdown-item" href="#">Món Thái</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav" style="margin-right: 10px;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-Ẩm thực-</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nổi bật</a>
                            <a class="dropdown-item" href="#">Đặt nhiều</a>
                            <a class="dropdown-item" href="#">Mới</a>
                            <a class="dropdown-item" href="#">Gần tôi</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-Quận huyện-</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nổi bật</a>
                            <a class="dropdown-item" href="#">Đặt nhiều</a>
                            <a class="dropdown-item" href="#">Mới</a>
                            <a class="dropdown-item" href="#">Gần tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!------------------------------------------------------------------>
    <div id="explore-group">
        <div class="row explore">
            <div class="exp-tab" style="margin-top: 5px;">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Ở đâu</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Đặt bàn</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Giao hàng</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Ăn gì</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-5">Sưu tập</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-6">TV</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-7">Blog</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-8">Khuyến mãi</a>
                </div>
            </div>
            <div data-spy="explore-group" data-target="#list-example" class="exp-con scrollspy-example z-depth-1" style="background-color: lightgoldenrodyellow;margin-left: 5px;margin-top: 5px;">
                <h4 id="list-item-1" style="margin-left: 20px;">Ở đâu</h4>
                <div class="card-group3" class="card-columns">
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 12"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 11"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 3"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 4"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 5"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 6"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 7"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 8"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 9"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 10"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 4"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                    <?php
                    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM restaurant where ResID = 9"));
                    $newRes = new Restaurant($row["ResID"], $row["Address"], $row["Name"], $row["Rating"], $row["WorkTime"], $row["PictureRes"]);
                    ?>
                    <div class="card">
                        <img src="<?php echo $newRes->getPicture(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title"><?php echo $newRes->getName(); ?></h5>
                            </a>
                            <p class="card-text"><?php echo $newRes->getAddress(); ?></p>
                        </div>
                    </div>
                </div>
                <h4 id="list-item-2" style="margin-left: 20px;">Đặt bàn</h4>
                <div class="card-group3" class="card-columns">
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                </div>
                <h4 id="list-item-3" style="margin-left: 20px;">Giao hàng</h4>
                <div class="card-group3" class="card-columns">
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                </div>
                <h4 id="list-item-4" style="margin-left: 20px;">Ăn gì</h4>
                <div class="card-group3" class="card-columns">
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                </div>
                <h4 id="list-item-5" style="margin-left: 20px;">Sưu tập</h4>
                <div class="card-group3" class="card-columns">
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                </div>
                <h4 id="list-item-6" style="margin-left: 20px;">TV</h4>
                <div class="card-group3" class="card-columns">
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                </div>
                <h4 id="list-item-7" style="margin-left: 20px;">Blog</h4>
                <div class="card-group3" class="card-columns">
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                </div>
                <h4 id="list-item-8" style="margin-left: 20px;">Khuyến mãi</h4>
                <div class="card-group3" class="card-columns">
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/food-item.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Kem Bơ & Trái Cây Tô 251</h5>
                            </a>
                            <p class="card-text">251 Tô Hiến Thành, P. 13, Quận 10, TP. HCM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------>
    <div id="footer-cont">
        <div id="mem-footer">
            <p>Top thành viên</p>
            <div class="mem-img">
                <img src="./img/img_avatar.png" class="rounded-circle top1" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top2" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top3" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top4" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top5" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top6" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top7" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top8" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top9" alt="Cinque Terre" style="width: 60px;">
                <img src="./img/img_avatar.png" class="rounded-circle top10" alt="Cinque Terre" style="width: 60px;">
            </div>
        </div>
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