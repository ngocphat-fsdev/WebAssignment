<?php
include("connectDB.php");
include("../Models/User.php");
include("../Models/Comment.php");

$response_str = "";
if (isset($_GET["BlogID"])) {
    $queryString = 'SELECT * FROM blogcomment WHERE BlogID =' . $_GET["BlogID"];
    $result = mysqli_query($conn, $queryString) or die(mysql_error());
    while($row = mysqli_fetch_array($result)){
        $queryString = 'SELECT * FROM user WHERE UserID =' . $row["UserID"];
        $result2 = mysqli_query($conn, $queryString) or die(mysql_error());
        $user = mysqli_fetch_array($result2) or die(mysql_error());        
        $u = new User(
            $user['UserID'],
            $user['UserName'],
            $user['Sex'],
            $user['AccountName'],
            $user['Password'],
            $user['UserLevel']
        );

        $c = new Comment(
            $row["CommentID"],
            $u,
            $row["Content"],
            $row["Time"],
            $row["LikeCount"]
        );

        $response_str .= '
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle avatar" src="images/male-avatar.jpg" alt="">
                <div class="media-body">                    
                    <a href="#" class="name-reviewer">' .$c->getUser()->getName() . ' </a>                        
                    <p>' . $c->getContent() . '</p>                                                                    
                    <a href="#" style="font-size: 15px;">Thích &nbsp;</a>
                    <a href="#" style="font-size: 15px;">Trả lời</a>
                </div>
            </div>
        ';
    };    
}
echo $response_str;
?>