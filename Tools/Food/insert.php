<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $addr = $_GET['pic'];
    $rating = $_GET["price"];
    $work = $_GET["res"];
}
$sql = "INSERT INTO food VALUES ('$id', '$addr', '$name', '$rating', '$work')";
$conn->query($sql);