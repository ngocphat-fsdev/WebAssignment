<?php
  include '../../Controllers/connectDB.php';
  if (isset($_POST['submit']))
  {

    if (isset($_GET['agencyid']))
    {
      $location = addslashes($_POST['location']);
      $address = addslashes($_POST['address']);
      $phone = addslashes($_POST['phone']);
      $email = addslashes($_POST['email']);
      $website = addslashes($_POST['website']);
      $worktime = addslashes($_POST['worktime']);
      

      $sql = "UPDATE agency SET Address ='$address' ,
      Phone ='$phone' , Email = '$email', Website ='$worktime' , 
      WorkTime ='$worktime'  WHERE Location ='$location' ";

      $result = mysqli_query($conn, $sql);

      mysqli_close($conn);
      echo '<script language="javascript">alert("Edit thành công")</script>';
      exit;
    }
    elseif (isset($_GET['reviewid']))
    {
      $title = addslashes($_POST['title']);
      $reviewplace = addslashes($_POST['reviewplace']);
      $address = addslashes($_POST['address']);
      $reviewername = addslashes($_POST['reviewername']);
      $reviewcontent = addslashes($_POST['reviewcontent']);
      $revieweravatar = addslashes($_POST['revieweravatar']);
      $point = addslashes($_POST['point']);
      $picture = addslashes($_POST['picture']);
      $comment = addslashes($_POST['comment']);
      

      $sql = "UPDATE reviews SET Title = '$title', 
      AddressOfReviewPlace = '$address',
      ReviewPlaceName = '$reviewcontent', 
      ReviewerName = '$reviewername', 
      ReviewContent = '$reviewcontent', 
      ReviewerAvatar = '$revieweravatar', 
      ReviewPoint = '$point', 
      ReviewComment = '$comment', 
      ReviewPicture ='$picture' WHERE ID =".$_GET['reviewid']."";

      $result = mysqli_query($conn, $sql);

      mysqli_close($conn);
      echo '<script language="javascript">alert("Edit thành công")</script>';
      exit;
    }
    elseif (isset($_GET['blogid']))
    {
      $title = addslashes($_POST['title']);
      $content = addslashes($_POST['content']);
      $time = addslashes($_POST['time']);
      $likecount = addslashes($_POST['likecount']);
      $rating = addslashes($_POST['rating']);
      $avatar = addslashes($_POST['avatar']);
      

      $sql = "UPDATE blog SET Title ='$title', 
      Content = '$content', 
      Time ='$time', 
      LikeCount ='$likecount', 
      Rating ='$rating', 
      Avatar = '$avatar',
      WHERE ID = ".$_GET['blogid']."";
  

      $result = mysqli_query($conn, $sql);

      mysqli_close($conn);
      echo '<script language="javascript">alert("Edit thành công")</script>';
      exit;
    }
    elseif (isset($_GET['resid']))
    {
      $address = addslashes($_POST['address']);
      $name = addslashes($_POST['name']);
      $rating = addslashes($_POST['rating']);
      $worktime = addslashes($_POST['worktime']);
      $pic = addslashes($_POST['pic']);
      

      $sql = "UPDATE restaurant SET Address ='$address', 
      Name= '$name', 
      Rating='$rating', 
      WorkTime='$worktime', 
      PictureRes= '$pic' 
       WHERE ResID = ".$_GET['resid']."";

      $result = mysqli_query($conn, $sql);

      mysqli_close($conn);
      echo '<script language="javascript">alert("Edit thành công")</script>';
      exit;
    }
    elseif (isset($_GET['foodid']))
    {
      $pic = addslashes($_POST['pic']);
      $name = addslashes($_POST['address']);
      $price = addslashes($_POST['price']);
      

      $sql = "UPDATE food SET PictureLink ='$pic' ,
      Name ='$name' , Price = '$price' WHERE ID =".$_GET['foodid']."";

      $result = mysqli_query($conn, $sql);

      mysqli_close($conn);
      echo '<script language="javascript">alert("Edit thành công")</script>';
      exit;
    }
    elseif (isset($_GET['userid'])){
      $name = addslashes($_POST['name']);
      $sex = addslashes($_POST['sex']);
      $account = addslashes($_POST['account']);
      $pass = addslashes($_POST['pass']);
      $level = addslashes($_POST['level']);

      $sql = "UPDATE user SET UserName ='$name' ,
      Sex ='$sex' , AccountName = '$account' ,Password ='$pass',UserLevel ='$level' WHERE UserID =".$_GET['userid']."";

      $result = mysqli_query($conn, $sql);

      mysqli_close($conn);
      echo '<script language="javascript">alert("Edit thành công")</script>';
      exit;
    }
    echo "<script> location.replace('../homepage.php');</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Admin - Edit</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/vendors/summernote/summernote.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav">

    <?php
    if (isset($_GET['agencyid'])){
      echo "<form action='resume-add.php?agencyid=". $_GET['agencyid'] ."' method='POST'>";
    }
    elseif (isset($_GET['reviewid'])){
      echo "<form action='resume-add.php?reviewid=". $_GET['reviewid'] ."' method='POST'>";
    }
    elseif (isset($_GET['blogid'])){
      echo "<form action='resume-add.php?blogid=". $_GET['blogid'] ."' method='POST'>";
    }
    elseif (isset($_GET['resid'])){
      echo "<form action='resume-add.php?resid=". $_GET['resid'] ."' method='POST'>";
    }
    elseif (isset($_GET['foodid'])){
      echo "<form action='resume-add.php?foodid=". $_GET['foodid'] ."' method='POST'>";
    }
    elseif (isset($_GET['userid'])){
      echo "<form action='resume-add.php?userid=" .$_GET['userid'] ."' method='POST'>";
    }

    ?>
      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Edit database</h1>
          <p class="lead text-center">Make it fun</p>
        </div>

        <div class="container">

        <?php
          if (isset($_GET['agencyid'])){

            $sql = "SELECT * FROM agency WHERE Location=".$_GET['agencyid'];
      
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
          <div class="row">
            <div class="col-xs-12 col-sm-8">
              <div class="form-group">
                <input name="location" type="text" class="form-control input-lg" placeholder="Location"
                 value="<?php echo $row['location'] ?>">
              </div>

              <div class="form-group">
                <input name="address" type="text" class="form-control input-lg" placeholder="Address"
                value="<?php echo $row['address'] ?>">
              </div>

              <div class="form-group">
                <input name="phone" type="text" class="form-control" placeholder="Phone"
                value="<?php echo $row['phone'] ?>">
              </div>

              <div class="form-group">
                <input name="email" type="text" class="form-control" placeholder="Email"
                value="<?php echo $row['email'] ?>">
              </div>

              <div class="form-group">
                <input name="website"type="text" class="form-control" placeholder="Website"
                value="<?php echo $row['website'] ?>">
              </div>

              <div class="form-group">
                <input name="worktime"type="text" class="form-control" placeholder="Work Time"
                value="<?php echo $row['worktime'] ?>">
              </div>

            </div>
          </div>
        <?php
          }
          elseif (isset($_GET['reviewid'])){
            $sql = "SELECT * FROM reviews WHERE ID=".$_GET['reviewid'];
      
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
          <div class="row">
            <div class="col-xs-12 col-sm-8">
              <div class="form-group">
                <input name="title" type="text" class="form-control input-lg" placeholder="Title"
                value="<?php echo $row['Title'] ?>">
              </div>

              <div class="form-group">
                <input name="reviewplace" type="text" class="form-control input-lg" placeholder="Review Place"
                value="<?php echo $row['ReviewPlaceName'] ?>">
              </div>

              <div class="form-group">
                <input name="address" type="text" class="form-control" placeholder="Address"
                value="<?php echo $row['AddressOfReviewPlace'] ?>">
              </div>

              <div class="form-group">
                <input name="reviewername" type="text" class="form-control" placeholder="Reviewer Name"
                value="<?php echo $row['ReviewerName'] ?>">
              </div>

              <div class="form-group">
                <input name="reviewcontent"type="text" class="form-control" placeholder="Review Content"
                value="<?php echo $row['ReviewContent'] ?>">
              </div>

              <div class="form-group">
                <input name="revieweravatar"type="text" class="form-control" placeholder="Review Avatar"
                value="<?php echo $row['ReviewerAvatar'] ?>"
                >
              </div>

              <div class="form-group">
                <input name="point"type="text" class="form-control" placeholder="Point"
                value="<?php echo $row['ReviewPoint'] ?>">
              </div>

              <div class="form-group">
                <input name="picture"type="text" class="form-control" placeholder="Picture"
                value="<?php echo $row['ReviewPicture'] ?>">
              </div>

              <div class="form-group">
                <input name="comment"type="text" class="form-control" placeholder="Comment"
                value="<?php echo $row['ReviewComment'] ?>">
              </div>

            </div>
          </div>
        <?php
          }
          elseif (isset($_GET['blogid'])){
            $sql = "SELECT * FROM blog WHERE BlogID=".$_GET['blogid'];
      
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="row">
            <div class="col-xs-12 col-sm-8">
              <div class="form-group">
                <input name="title" type="text" class="form-control input-lg" placeholder="Title"
                value="<?php echo $row['Title'] ?>">
              </div>

              <div class="form-group">
                <input name="content" type="text" class="form-control input-lg" placeholder="Content"
                value="<?php echo $row['Content'] ?>">
              </div>

              <div class="form-group">
                <input name="time" type="text" class="form-control" placeholder="Time"
                value="<?php echo $row['Time'] ?>">
              </div>

              <div class="form-group">
                <input name="likecount" type="text" class="form-control" placeholder="Like Count"
                value="<?php echo $row['Likecount'] ?>">
              </div>

              <div class="form-group">
                <input name="rating"type="text" class="form-control" placeholder="Rating"
                value="<?php echo $row['Rating'] ?>">
              </div>

              <div class="form-group">
                <input name="avatar"type="text" class="form-control" placeholder="Avatar"
                value="<?php echo $row['Avatar'] ?>">
              </div>

            </div>
          </div>
        <?php
          }
          elseif (isset($_GET['resid'])){
            $sql = "SELECT * FROM restaurant WHERE ResID=".$_GET['resid'];
      
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="row">
            <div class="col-xs-12 col-sm-8">

              <div class="form-group">
                <input name="address" type="text" class="form-control input-lg" placeholder="Address"
                value="<?php echo $row['Address'] ?>">
              </div>

              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Name"
                value="<?php echo $row['Name'] ?>">
              </div>

              <div class="form-group">
                <input name="rating" type="text" class="form-control" placeholder="Rating"
                value="<?php echo $row['Rating'] ?>">
              </div>

              <div class="form-group">
                <input name="worktime"type="text" class="form-control" placeholder="Work TIme"
                value="<?php echo $row['WorkTime'] ?>">
              </div>

              <div class="form-group">
                <input name="pic"type="text" class="form-control" placeholder="Picture"
                value="<?php echo $row['PictureRes'] ?>">
              </div>

            </div>
          </div>
        <?php
          }
          elseif (isset($_GET['userid'])){
            $sql = "SELECT * FROM user WHERE UserID=".$_GET['userid'];
      
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
          <div class="row">
            <div class="col-xs-12 col-sm-8">

              <div class="form-group">
                <input name="name" type="text" class="form-control input-lg" placeholder="Picture"
                value="<?php echo $row['UserName'] ?>">
              </div>

              <div class="form-group">
                <input name="sex" type="text" class="form-control" placeholder="Address"
                value="<?php echo $row['Sex'] ?>">
              </div>

              <div class="form-group">
                <input name="account" type="text" class="form-control" placeholder="Price"
                value="<?php echo $row['AccountName'] ?>">
              </div>

              <div class="form-group">
                <input name="pass" type="text" class="form-control" placeholder="Price"
                value="<?php echo $row['Password'] ?>">
              </div>

              <div class="form-group">
                <input name="level" type="text" class="form-control" placeholder="Price"
                value="<?php echo $row['UserLevel'] ?>">
              </div>

            </div>
          </div>
        <?php
          }
          elseif (isset($_GET['foodid'])){
            $sql = "SELECT * FROM food WHERE ID=".$_GET['foodid'];
      
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
          <div class="row">
            <div class="col-xs-12 col-sm-8">

              <div class="form-group">
                <input name="pic" type="text" class="form-control input-lg" placeholder="Picture"
                value="<?php echo $row['PictureLink'] ?>">
              </div>

              <div class="form-group">
                <input name="address" type="text" class="form-control" placeholder="Address"
                value="<?php echo $row['Address'] ?>">
              </div>

              <div class="form-group">
                <input name="price" type="text" class="form-control" placeholder="Price"
                value="<?php echo $row['Price'] ?>">
              </div>

            </div>
          </div>
        <?php
          }
        ?>


          </div>
        </div>
      </header>
      <!-- END Page header -->


      <!-- Main container -->
      <main>

        <!-- Submit -->
        <section class=" bg-img" style="background-image: url(assets/img/bg-facts.jpg);">
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Change database</h2>
              <p>Please review your information once more</p>
            </header>

            <p class="text-center"><button class="btn btn-success btn-xl btn-round" name="submit">Submit</button></p>

          </div>
        </section>
        <!-- END Submit -->


      </main>
      <!-- END Main container -->

    </form>

    <!-- Site footer -->
    <footer class="site-footer">
    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/vendors/summernote/summernote.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
