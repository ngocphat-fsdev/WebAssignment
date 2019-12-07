<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $pic = $_GET['pic'];
    $price = $_GET["price"];
    $res = $_GET["res"];
}
$sql = "INSERT INTO Food VALUES ('$id', '$pic', '$name', '$price', '$res')";
$conn->query($sql);
file_put_contents('food.sql', "INSERT INTO Food VALUES ('".$id."', '".$pic."', '".$name."', '".$price."', '".$res."');\n", FILE_APPEND);
// $file = fopen('food.sql', 'w+');
// fwrite($file, "INSERT INTO Food VALUES (".$id.", ".$pic.", ".$name.", ".$price.", ".$res.")");
// fclose($file);