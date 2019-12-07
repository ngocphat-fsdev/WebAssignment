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
    $sql = "UPDATE food SET Name = '$cname', PictureLink = '$cpic', ID = '$cid', Price = '$cprice', ResID = '$cres' WHERE ID=$id";
    $conn->query($sql);
}
