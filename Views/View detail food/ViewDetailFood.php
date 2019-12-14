<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Detail Food</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
    integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="../w3.css">
  <link href="../style.css" type="text/css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="ViewDetailFood.css">

  <style>
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 60px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5),0 6px 20px 0 rgba(0,0,0,0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0} 
      to {top:0; opacity:1}
    }

    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      background-color: #C82333;
      color: white;
    }

    .modal-body {padding: 2px 16px;}

    .modal-footer {
      padding: 2px 16px;
      background-color: #C82333;
      color: white;
    }
    .text{
      font-size: 20px;
    }
    .btn-cart{
      margin-left:20px;
    }

  </style>
</head>

<body style="background: white;">
  <!-------------------------------------------------------------->
  <?php 
    session_start();
  ?>
  <div id="header-menu">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height: 40px;">
        <a class="nav-item nav-link" id="nav-home-tab" href="../homepage.php" role="tab" aria-controls="nav-home"
          aria-selected="false" target="_blank" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Trang Chủ</p>
        </a>
        <a class="nav-item nav-link active" id="nav-profile-tab" href="../hot.php" role="tab" aria-controls="nav-profile"
          aria-selected="true" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Hot</p>
        </a>
        <a class="nav-item nav-link" id="nav-contact-tab" href="../review.php" role="tab" aria-controls="nav-contact"
          aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Review</p>
        </a>
        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
          aria-selected="true" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Đặt bàn</p>
        </a>
        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
          aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Thảo luận</p>
        </a>
        <a class="nav-item nav-link" id="nav-contact-tab" href="#" role="tab" aria-controls="nav-contact"
          aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Giảm giá</p>
        </a>
        <a class="nav-item nav-link" id="nav-contact-tab" href="../contact.php" role="tab" aria-controls="nav-contact"
          aria-selected="false" target="_self" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Liên hệ</p>
        </a>
      </div>
    </nav>
  </div>
  <!-------------------------------------------------------------->
  <div class="pos-f-t headmenu-sm">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-light p-4">
        <a class="nav-item nav-link active" id="nav-home-tab" href="homepage.php" role="tab" aria-controls="nav-home"
          aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Trang Chủ</p>
        </a>
        <a class="nav-item nav-link" id="nav-profile-tab" href="hot.php" role="tab" aria-controls="nav-profile"
          aria-selected="true" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Hot</p>
        </a>
        <a class="nav-item nav-link" id="nav-contact-tab" href="review.php" role="tab" aria-controls="nav-contact"
          aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
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
        <a class="nav-item nav-link" id="nav-contact-tab" href="contact.php" role="tab" aria-controls="nav-contact"
          aria-selected="false" style="border-top-left-radius: 0;border-top-right-radius: 0;">
          <p>Liên Hệ</p>
        </a>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
  <!-------------------------------------------------------------------->
  <nav class="nav justify-content-center login" style="background-color: #f8f9fa; position: relative;">
    <span style="width: 100px; height: 38px;margin-right: 10px;margin-top: 7px;margin-left: 10px;">
      <a href="Login/Login.php">Đăng Nhập</a>
    </span>
    <div class="dropdown" style="margin-right: 10px; height: 40px;">
      <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        class="btn btn-primary btn-circle">
        <i class="fa fa-bell" aria-hidden="true"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
    <div class="dropdown" style="margin-right: 10px; height: 40px;">
      <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        class="btn btn-warning">
        <i class="fa fa-plus" aria-hidden="true"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
    <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false" style="height: 37px;">
      <img src="../img/vn.png" style="width: 25px;vertical-align: 0;">
    </button>
  </nav>

  <!-- The Modal -->
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <h2>Xác nhận đơn hàng</h2>
        <span class="close">&times;</span>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-lg-3 "><img class="img-food" alt="No image" src="bunchaca.jpg" /></div>

          <div class="col-lg-7 offset-lg-2">
            <h3>Chi tiết đơn hàng</h3>
            <div class="row">
              <div class="col-lg-9 font-weight-bold text">Cô Út - Bún Chả Cá Miền Trung </div>
              <div class="col-lg-3"><h4>42.000đ</h4></div>
            </div>

            <div class="row">
              <div class="col-lg-9"><h5>Tổng cộng 1 món </h5></div>
              <div class="col-lg-3"><h5>42.000đ</h5></div>
            </div>

            <div class="row">
              <div class="col-lg-9"><h5>Phí vận chuyển </h5></div>
              <div class="col-lg-3"><h5>15.000đ</h5></div>
            </div>

            <div class="row">
              <div class="col-lg-6"><h5>Mã khuyến mãi (giảm 10%)</h5></div>
              <div class="col-lg-3"><input class="form-control" type="text" placeholder="Nhập mã" id="code"></div>
              <div class="col-lg-3"><input class="btn btn-success" type="button" value="Áp dụng" onclick="discount()"></div>
            </div>

            <div class="row">
              <div class="col-lg-9 font-weight-bold text">Tổng cộng</div>
              <div class="col-lg-3 font-weight-bold text" id="total">57.000đ</div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <i class="fas fa-check-circle"></i><input type="button" class="btn btn-primary" value='Hoàn tất đơn hàng' id="btn_complete_bill">
      </div>
    </div>
  </div>

  <div class="detail-food clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 "><img class="img-food" alt="No image" src="bunchaca.jpg" /></div>

        <div class="col-lg-6 offset-lg-3">
          <a class="path-link" href="">Home >> </a>
          <a class="path-link" href="">TP.HCM >> </a>
          <a class="path-link" href="">Cô Út - Bún Chả Cá Miền Trung</a>

          <a href="CartFood.php"><i class="fas fa-shopping-cart"> Xem giỏ hàng</i></a>
          <div class="restaurant">QUÁN ĂN</div>
          <div class="name-restaurant">Cô Út - Bún Chả Cá Miền Trung</div>
          <div class="start-rate"><img src="start_rate.PNG" alt="no image"> Lượt đánh giá từ Now</div>
          <a href="">Xem thêm lượt đánh giá từ Foody</a>

          <div class="disableSection">
            <div class="res-common-add">
              <span class="fas fa-location-arrow locationicon"></span>
              <span>
                <a href="" target="_blank">
                  <span>317/13 Thống Nhất, P. 11</span>
                  ,
                </a>
              </span>

              <i class="fas fa-map"></i>

              <span>
                <a href="">
                  <span>Quận Gò Vấp</span>
                </a>
              </span>
              ,
              <span>
                <a href="">
                  <span>TP.HCM</span>
                </a>
              </span>
            </div>
            <div class="res-common-price">
              <div class="micro-timesopen">
                <span class="far fa-clock houricon"></span>
                <span class="itsopen">Đang mở cửa</span>
                <span> 6:30 - 21:00 </span>
                <span class="fas fa-exclamation-circle"></span>
              </div>
              <div class="res-common-minmaxprice">
                <span class="fas fa-tag minmaxpriceicon"></span>
                <span>42.000đ</span>
              </div>
            </div>
          </div>

          <div class="row utility">
            <div class="col-sm">
              <div class="utility-title">Phí dịch vụ</div>
              <div class="utility-content"> <span class="txt">0% phí phục vụ </span> </div>
            </div>
            <div class="col-sm">
              <div class="utility-title">Dịch vụ bởi</div>
              <div class="utility-content"> <span class="txt">NOW </span> </div>
            </div>
            <div class="col-sm">
              <div class="utility-title">Chuẩn bị</div>
              <div class="utility-content"> 15 phút </div>
            </div>
          </div>

          <button type="button" class="btn btn-danger" id="myBtn"> <i class="fas fa-check-circle"></i> Đặt trước</button>
          <button type="button" class="btn btn-danger btn-cart" id="myCart"> <i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</button>

          <script>
          // Get the modal
          var modal = document.getElementById("myModal");

          // Get the button that opens the modal
          var btn = document.getElementById("myBtn");
          var btn_bill = document.getElementById("btn_complete_bill");
          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("close")[0];

          // When the user clicks the button, open the modal 
          btn.onclick = function() {
            modal.style.display = "block";
          }

          btn_bill.onclick = function(){
            modal.style.display = "none";
          }

          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
            modal.style.display = "none";
          }

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          </script>

        </div>
      </div>
    </div>
  </div>

  <div class="more-food">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action disabled bg-secondary txt" tabindex="-1"
              aria-disabled="true">
              Thực đơn
            </a>
            <a href="#" class="list-group-item list-group-item-action">Bún Chả Cá</a>
            <a href="#" class="list-group-item list-group-item-action">Gà nướng</a>
            <a href="#" class="list-group-item list-group-item-action">Sường nướng</a>
            <a href="#" class="list-group-item list-group-item-action">Nước ngọt</a>
          </div>

          <div class="nav-banner">
            <a href="#">
              <img class="col-banner" src="foody.jpg" alt="foody.jpg" width="160">
            </a>
          </div>
        </div>

        <div class="col-md-10">
          <ul class="micro-act-btns">
            <li class="micro-act">
              <a class="act-btns" href="">
                <i class="fas fa-phone"></i>
                Gọi điện thoại
              </a>
            </li>
            <li class="micro-act">
              <a class="act-btns" href="">
                <i class="fas fa-bookmark"></i>
                Đánh dấu
              </a>
            </li>
            <li class="micro-act">
              <a class="act-btns" href="">
                <i class="fas fa-comment"></i>
                Chat
              </a>
            </li>
            <li class="micro-act">
              <a class="act-btns" href="">
                <i class="fas fa-camera"></i>
                Hình chụp
              </a>
            </li>
            <li class="micro-act">
              <a class="act-btns" href="">
                <i class="fas fa-share-alt"></i>
                Chia sẻ
              </a>
            </li>
          </ul>

          <a> <img class="banner" src="foody-phuongnam.jpg" alt="No image"> </a>

          <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm món ">
              <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
              </button>
          </div>

          <table class="table table-hover list-food">
            <thead>
              <tr>
                <th scope="col">Bún Chả Cá</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th> <img src="bunchaca_small.jpg" alt="No image" width="60" height="60"></th>
                <td>
                  <p class="font-weight-bold">Bún chả cá</p>
                </td>
                <td>
                  <div class="price">
                    <p><del>18.000 đ</del></p>
                  </div>
                  <div class="discount"> 15.000 đ </div>
                </td>

                <td> <p id="added_1"><p> <button type="button" class="btn btn-danger add-food" id="btn_add_1" > <i class="fas fa-plus"></i> </button> </td>
              </tr>
              <tr>
                <th> <img src="banhcanhchaca.jpg" alt="No image" width="60" height="60"></th>
                <td>
                  <p class="font-weight-bold">Bánh canh chả cá </p>
                </td>
                <td>
                  <div class="price">
                    <p><del>25.000 đ</del></p>
                  </div>
                  <div class="discount"> 20.000 đ </div>
                </td>
                <td>
                  <p id="added_2"><p>
                  <button type="button" class="btn btn-danger add-food" id="btn_add_2">
                    <i class="fas fa-plus"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <th> <img src="bunchaca_cosua.jpg" alt="No image" width="60" height="60"></th>
                <td>
                  <p class="font-weight-bold">Bún chả cá + cá cờ + sứa</p>
                </td>
                <td>
                  <div class="price">
                    <p><del>40.000 đ</del></p>
                  </div>
                  <div class="discount"> 30.000 đ </div>
                </td>
                <td>
                <p id="added_3"><p>
                  <button type="button" class="btn btn-danger add-food" id="btn_add_3">
                    <i class="fas fa-plus"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <th> <img src="bunchaca_cangu.jpg" alt="No image" width="60" height="60"></th>
                <td>
                  <p class="font-weight-bold">Bún chả cá + trứng cá ngừ</p>
                </td>
                <td>
                  <div class="price">
                    <p><del>40.000 đ</del></p>
                  </div>
                  <div class="discount"> 32.000 đ </div>
                </td>
                <td>
                <p id="added_4"><p>
                  <button type="button" class="btn btn-danger add-food" id="btn_add_4">
                    <i class="fas fa-plus"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <th> <img src="banhcanhxuong.jpg" alt="No image" width="60" height="60"></th>
                <td>
                  <p class="font-weight-bold">Bánh canh Xương</p>
                </td>
                <td>
                  <div class="price">
                    <p><del>38.000 đ</del></p>
                  </div>
                  <div class="discount"> 26.000 đ </div>
                </td>
                <td>
                <p id="added_5"><p>
                  <button type="button" class="btn btn-danger add-food" id="btn_add_5">
                    <i class="fas fa-plus"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <th> <img src="yaourt.jpg" alt="No image" width="60" height="60"></th>
                <td>
                  <p class="font-weight-bold">Yaourt</p>
                </td>
                <td>
                  <div class="price">
                    <p><del>10.000 đ</del></p>
                  </div>
                  <div class="discount"> 7.000 đ </div>
                </td>
                <td>
                <p id="added_6"><p>
                  <button type="button" class="btn btn-danger add-food" id="btn_add_6">
                    <i class="fas fa-plus"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <th> <img src="chacachien.jpg" alt="No image" width="60" height="60"></th>
                <td>
                  <p class="font-weight-bold">Chả cá chiên (1kg)</p>
                </td>
                <td>
                  <div class="price">
                    <p><del>180.000 đ</del></p>
                  </div>
                  <div class="discount"> 150.000 đ </div>
                </td>
                <td>
                <p id="added_7"><p>
                  <button type="button" class="btn btn-danger add-food" id="btn_add_7">
                    <i class="fas fa-plus"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <th> <img src="chacahap.jpg" alt="No image" width="60" height="60"></th>
                <td>
                  <p class="font-weight-bold">Chả cá hấp (1kg)</p>
                </td>
                <td>
                  <div class="price">
                    <p><del>180.000 đ</del></p>
                  </div>
                  <div class="discount"> 150.000 đ </div>
                </td>
                <td>
                <p id="added_8"><p>
                  <button type="button" class="btn btn-danger add-food" id="btn_add_8">
                    <i class="fas fa-plus"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <?php include ("../../Controllers/addCartFood.php");?>
        </div>

      </div>
    </div>
  </div>
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
        <img src="../img/gov_seals.jpg" alt="certification">
      </div>
    </div>
    <!-------------------------------------------------------------->
    <div id="info-footer">

    </div>
    <!-------------------------------------------------------------->
  </div>

</body>

</html>
