<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

if (isset($_GET["id"], $_GET["name"], $_GET["addr"], $_GET["rating"], $_GET["work"])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $addr = $_GET['addr'];
    $rating = $_GET["rating"];
    $work = $_GET["work"];
}
$sql = "INSERT INTO restaurant VALUES ('$id', '$addr', '$name', '$rating', '$work')";
$conn->query($sql);