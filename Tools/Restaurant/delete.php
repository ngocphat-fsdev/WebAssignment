<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
$id = $_GET["id"];
if (isset($id)) {
    $sql = "DELETE FROM restaurant WHERE ResID=$id";
    $conn->query($sql);
    file_put_contents('restaurant.sql', "DELETE FROM restaurant WHERE ResID = ".$id.";\n", FILE_APPEND);
}
// $file = fopen('restaurant.sql', 'w+');
// fwrite($file, "DELETE FROM restaurant WHERE ResID = ".$id);
// fclose($file);
