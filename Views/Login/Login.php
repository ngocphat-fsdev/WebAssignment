<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng nhập CaFo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <!-- Use boostrap 3.4.0 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Login.css">
       
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="header-line"></div>
            <a href="">
                <div class="wrapper"></div>
            </a>
        </nav>
                   
        <div class="row">
            <div class="col-md-offset-4 col-md-4 form">
                <div> <h3 class="title"> Đăng nhập Cafo </h3> </div>
                <form action="Login.php" method="post">
                    <div class="form-group">
                        <a class="btn btn-lg btn-success btn-block" style="overflow: hidden;background-color:#4066b0;margin-bottom: 10px;"> ĐĂNG NHẬP BẰNG FACEBOOK
                        </a>
                        <a class="btn btn-lg btn-success btn-block" style="overflow: hidden;background-color:#D34836;margin-bottom: 10px;"> ĐĂNG NHẬP BẰNG GOOGLE
                        </a>
                        <a class="btn btn-lg btn-success btn-block" style="overflow: hidden;background-color:#0B872E;margin-bottom: 10px;"> ĐĂNG NHẬP BẰNG SỐ ĐIỆN THOẠI
                        </a>
                        <div class="text">                                       
                            <span>hoặc bằng email</span>
                        </div>              
                    </div>
                    
                    <div class="form-space input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                            <input type="email" name="account" class="form-control" required="" placeholder="Email">
                        
                    </div>
                    <div class="form-space input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </span>
                            <input type="password" name="password" class="form-control" required="" placeholder="Mật khẩu" id="password">
                    </div>
                    <div class="checkbox">
                        <label style="float:left;">
                            <input type="checkbox"> Lưu mật khẩu
                        </label>
                        <span style="float:right;"> <a href="" class="link"> Quên mật khẩu </a> </span>
                    </div>
                    <div style="clear:both;float:left;width:100%;margin-top:15px;">
                        <input type="submit" value="Đăng nhập" id="bt_submit" class="btn btn-lg btn-success btn-block" style="background-color:#0495ba;font-size: 14px;border-color:#0495ba">
                    </div>
                    <?php
                    include ("../../Controllers/handleLogin.php");
                    ?>
                    <br>
                    <div class="text-danger error-warning">
                        <?php echo $logInFailed; ?>
                    </div>
                    <div class="p">
                        <p> Bạn đã có tài khoản tại Cafo.vn?<a href="register.php" class="link"> Đăng ký </a> </p>
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
