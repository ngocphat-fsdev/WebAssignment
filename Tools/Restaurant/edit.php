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
    $sql = "UPDATE restaurant SET Name = '$cname', Address = '$caddr', ResID = '$cid', Rating = '$crating', WorkTime = '$cwork' WHERE ResID=$id";
    $conn->query($sql);
}
