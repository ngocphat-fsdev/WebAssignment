<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cart Food</title>
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
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
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
    

  </style>
</head>

<body style="background: white;">
  <?php include ("../../Controllers/handleCartFood.php");
    $total_price=0;
  ?>
  <!-------------------------------------------------------------->
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
        <table class="table table-hover list-food">
          <thead>
          <tr>
              <th scope="col"><i class="fas fa-shopping-cart"></i> Giỏ hàng của bạn</th>
          </tr>
          </thead>
          <tbody>
          <?php
              while ($row2 = mysqli_fetch_array($bill)){
          ?>
          <tr>
              <th> <img src="<?php echo $row2['LinkImage'] ?>" alt="No image" width="60" height="60"></th>
              <td>
              <p class="font-weight-bold"><?php echo $row2['NameFood'] ?></p>
              </td>
              <td>
                <p>Số lượng: <?php echo $row2['Amount'] ?><p/>
              </td>
              <td>
              <div class="discount" data-value="<?php echo $row2['TotalPrice'] ?>" id="<?php echo 'price'.$row2['ID'] ?>">Giá: <?php echo $row2['TotalPrice'] ?> </div>
              <input type="text" value="<?php echo $row2['Price']?>" id="<?php echo 'temp'.$row2['ID'] ?>" hidden>
              </td>
          </tr>
          <?php 
              $total_price += (int)$row2['TotalPrice'];
            } 
            $total_price += 30;
          ?>
          </tbody>
        </table>
        <div class="row">
              <div class="col-lg-9"><h5>Phí vận chuyển </h5></div>
              <div class="col-lg-3"><h5>30.000đ</h5></div>
        </div>
        <div class="row">
              <div class="col-lg-6"><h5>Mã khuyến mãi (giảm 10%) </h5></div>
              <div class="col-lg-3"><input class="form-control" type="text" placeholder="Nhập mã" id="code"></div>
              <div class="col-lg-3"><input class="btn btn-success" type="button" value="Áp dụng" id="apply" onclick="discount(<?php echo $total_price; ?>)"></div>
        </div>
        <div class="row">
              <div class="col-lg-9 font-weight-bold text">Tổng cộng</div>
              <div class="col-lg-3 font-weight-bold text" id="total"><?php echo $total_price.".000đ"; ?></div>
            </div>
      </div>

      <div class="modal-footer">
        <i class="fas fa-check-circle"></i><input type="button" class="btn btn-primary" value='Hoàn tất đơn hàng' id="btn_complete_bill">
      </div>
    </div>
  </div>

<!-------------------------------------------------------------------------------------------------------------------------->
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
            
            <table class="table table-hover list-food">
                <thead>
                <tr>
                    <th scope="col"><i class="fas fa-shopping-cart"></i> Giỏ hàng của bạn</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <th> <img src="<?php echo $row['LinkImage'] ?>" alt="No image" width="60" height="60"></th>
                    <td>
                    <p class="font-weight-bold"><?php echo $row['NameFood'] ?></p>
                    </td>
                    <td>
                    <div class="discount" data-value="<?php echo $row['TotalPrice'] ?>" id="<?php echo 'price'.$row['ID'] ?>"> <?php echo $row['TotalPrice'] ?> </div>
                    <input type="text" value="<?php echo $row['Price']?>" id="<?php echo 'temp'.$row['ID'] ?>" hidden>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example" style="width:150px;">
                        <button type="button" class="btn btn-secondary" id="btn_incre" onclick="decrement(<?php echo $row['ID'] ?>)">-</button>
                        <input type="text" id="<?php echo 'amount'.$row['ID'] ?>" value="<?php echo $row['Amount'] ?>" style="width:80px; text-align:center;"/>
                        <button type="button" class="btn btn-secondary" id="btn_decre" onclick="increment(<?php echo $row['ID'] ?>)">+</button>
                      </div>
                    </td>
                    <td><button type="button" class="btn btn-primary" onclick="saveFood(<?php echo $row['ID'] ?>)"> Lưu</button>
                     <button type="button" class="btn btn-danger" onclick="removeFood(<?php echo $row['ID'] ?>)"> Xóa</button> </td>
                </tr>
                
                <?php } ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-order" id="btn_cash" style="width:200px; margin-left:40%; margin-right:auto; margin-bottom:20px;"><i class="fas fa-motorcycle"></i> Đặt hàng</button>
            <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btn = document.getElementById("btn_cash");
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