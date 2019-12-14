<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
$id = $_GET["id"];
if (isset($id)) {
    $sql = "DELETE FROM Food WHERE ID=$id";
    $conn->query($sql);
    file_put_contents('food.sql', "DELETE FROM Food WHERE ID = ".$id.";\n", FILE_APPEND);
    // $file = fopen('food.sql', 'w+');
    // fwrite($file, "DELETE FROM Food WHERE ID = " . $id);
    // fclose($file);
}
