<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
$id = $_GET["id"];
if (isset($id)) {
    $cid = $_GET['cid'];
    $cname = $_GET['cname'];
    $cpic = $_GET['cpic'];
    $cprice = $_GET['cprice'];
    $cres = $_GET['cres'];
    $sql = "UPDATE Food SET Name = '$cname', PictureLink = '$cpic', ID = '$cid', Price = '$cprice', ResID = '$cres' WHERE ID=$id";
    $conn->query($sql);
    file_put_contents('food.sql', "UPDATE Food SET Name = '".$cname."', PictureLink = '".$cpic."', ID = '".$cid."', Price = '".$cprice."', ResID = '".$cres."' WHERE ID=".$id.";\n", FILE_APPEND);
    // $file = fopen('food.sql', 'w+');
    // fwrite($file, "UPDATE Food SET Name = ".$cname.", PictureLink = ".$cpic.", ID = ".$cid.", Price = ".$cprice.", ResID = ".$cres." WHERE ID=".$id);
    // fclose($file);
}
