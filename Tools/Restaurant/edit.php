<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
$id = $_GET["id"];
if (isset($id)) {
    $cid = $_GET['cid'];
    $cname = $_GET['cname'];
    $caddr = $_GET['caddr'];
    $crating = $_GET['crating'];
    $cwork = $_GET['cwork'];
    $cpic = $_GET['cpic'];
    $sql = "UPDATE restaurant SET Name = '$cname', Address = '$caddr', ResID = '$cid', Rating = '$crating', WorkTime = '$cwork', PictureRes = '$cpic' WHERE ResID=$id";
    $conn->query($sql);
}
file_put_contents('restaurant.sql', "UPDATE restaurant SET Name = '".$cname."', Address = '".$caddr."', ResID = '".$cid."', Rating = '".$crating."', WorkTime = '".$cwork."', PictureRes = '".$cpic."' WHERE ResID=".$id.";\n", FILE_APPEND);
// $file = fopen('restaurant.sql', 'w+');
// fwrite($file, "UPDATE restaurant SET Name = ".$cname.", Address = ".$caddr.", ResID = ".$cid.", Rating = ".$crating.", WorkTime = ".$cwork.", PictureRes = ".$cpic." WHERE ResID=".$id);
// fclose($file);