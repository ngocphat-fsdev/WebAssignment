<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tạo tài khoản CaFo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <!-- Use boostrap 3.4.0 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Login.css">
        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <body>
        <?php include ("../../Controllers/handleRegister.php");?>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="header-line"></div>
            <a href="">
                <div class="wrapper"></div>
            </a>
        </nav>
                   
        <div class="row">
            <div class="col-md-offset-4 col-md-4 form">
                <div> <h3 class="title"> Tạo tài khoản Cafo </h3> </div>
                <form name="Form register" action="register.php" method="post">
                    <span class="error"><?php echo $error_user_name;?> </span>
                    <div class="form-space input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                            <input type="text" name="user_name" class="form-control" value="<?php echo $user_name;?>" placeholder="Họ tên">
                    </div>
                    
                    Giới tính:<span class="error"><?php echo $gender_error;?></span><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
                        <label class="form-check-label" for="inlineCheckbox1">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
                        <label class="form-check-label" for="inlineCheckbox2">Nữ</label>
                    </div>
                    <!-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="unidentified" <?php if (isset($gender) && $gender=="unidentified") echo "checked";?> value="unidentified">
                        <label class="form-check-label" for="inlineCheckbox3">Không xác định</label>
                    </div> -->

                    <span class="error"><?php echo $error_email;?> </span>
                    <div class="form-space input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                            <input type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Email">
                    </div>

                    <span class="error"><?php echo $error_password;?> </span>
                    <div class="form-space input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </span>
                            <input type="password" name="password" class="form-control" value="<?php echo $password;?>" placeholder="Mật khẩu" id="password">
                    </div>
                    
                    <div style="clear:both;float:left;width:100%;margin-top:15px;">
                        <input type="submit" value="Tạo tài khoản" id="bt_submit" class="btn btn-lg btn-success btn-block" style="background-color:#0495ba;font-size: 14px;border-color:#0495ba">
                    </div>
                </form>
            </div>
        </div>
        

        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="mess">
                    Một tài khoản CaFo để truy cập tất cả sản phẩm của CaFo Corp.
                </div>
                    <div class="container-link">
                    </div>
                        </div>
            <div class="col-md-3">
            </div>
        </div>
        
        <footer class="footer ">
            <div class="wrapper-footer">
                    <ul class="language">
                    <li>
                        <a href="" class="vn" >
                            Vietnamese
                        </a>
                    </li>
                    <li>
                        <a href="" class="en">
                            English
                        </a>
                    </li>
                    </ul>
                    <span>©2018 Foody Corporation. Lầu 8, Tòa nhà Jabes 1, 244 Cống Quỳnh, P. Phạm Ngũ Lão, Quận 1, TP.HCM</span>
                    <span style="margin-bottom:5px;">Số giấy phép ĐKKD: 0311828036 do sở Kế hoạch và Đầu Tư TPHCM cấp ngày 11/06/2012</span>
            </div>
        </footer> 
    </body>
</html>