<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
$id = $_GET["id"];
if (isset($id)) {
    $sql = "DELETE FROM food WHERE ID=$id";
    $conn->query($sql);
}
