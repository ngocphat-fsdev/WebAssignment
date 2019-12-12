<?php
include("connectDB.php");
include("../Models/Blog.php");
include("../Models/User.php");
$response_str = "";
session_start();

if (isset($_SESSION['account']) && isset($_GET['BlogID']) && isset($_GET['content'])) {    
    $queryString = 'INSERT INTO blogcomment(
        BlogID,
        UserID,
        Content,
        Time,
        LikeCount
    ) 
    VALUES(
    1,
    1,
    "' . $_GET['content'] . '",
    "16:44 02/06/2018",
    0)';
    $result = mysqli_query($conn, $queryString) or die(mysql_error());
    echo "true";
}
else{
    echo "false";
}
?>