<?php
include("connectDB.php");
include("../Models/Blog.php");
include("../Models/User.php");
$response_str = "";
if (isset($_GET["BlogID"])) {
    $queryString = 'SELECT COUNT(*) FROM blog WHERE BlogID =' . $_GET["BlogID"];
    $result = mysqli_query($conn, $queryString) or die(mysql_error());
    $row = mysqli_fetch_array($result) or die(mysql_error());
    if ($row['COUNT(*)'] == 1) {
        $queryString = 'SELECT * FROM blog WHERE BlogID =' . $_GET["BlogID"];
        $result = mysqli_query($conn, $queryString) or die(mysql_error());
        $blog = mysqli_fetch_array($result) or die(mysql_error());

        $queryString = 'SELECT * FROM user WHERE UserID =' . $blog["UserID"];
        $result = mysqli_query($conn, $queryString) or die(mysql_error());
        $user = mysqli_fetch_array($result) or die(mysql_error());

        $u = new User(
            $user['UserID'],
            $user['UserName'],
            $user['Sex'],
            $user['AccountName'],
            $user['Password'],
            $user['UserLevel']
        );

        $b = new Blog(
            $blog["BlogID"],
            $blog["Title"],
            $blog["Content"],
            $blog["Time"],
            $blog["LikeCount"],
            $blog["Rating"],
            $u,
            $blog["Avatar"]
        );
        $response_str .= '
            <h1 class="mt-4">' . $b->getTitle() . '</h1>

            <div class="lead">
                <div class="row">
                    <p>Đăng bởi &nbsp;</p>
                    <img src="images/male-avatar.jpg" class="avatar" alt="">
                    <a href="#" class="name-reviewer">' . $b->getUser()->getName() . '</a>
                    <p>- lúc ' . $b->getTime() . '</p>
                </div>
            </div>
            <hr>' . $b->getContent() . '            
            <blockquote class="blockquote author">
                <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">' . $b->getUser()->getName() . '</cite>
                </footer>
            </blockquote>';
    }
}
echo $response_str;
?>