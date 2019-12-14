<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $addr = $_GET['addr'];
    $rating = $_GET["rating"];
    $work = $_GET["work"];
    $pic = $_GET["pic"];
}
$sql = "INSERT INTO restaurant VALUES ('$id', '$addr', '$name', '$rating', '$work', '$pic')";
$conn->query($sql);
file_put_contents('restaurant.sql', "INSERT INTO restaurant VALUES ('".$id."', '".$addr."', '".$name."', '".$rating."', '".$work."', '".$pic."');\n", FILE_APPEND);
// $file = fopen('restaurant.sql', 'w+');
// fwrite($file, "INSERT INTO restaurant VALUES (".$id.", ".$addr.", ".$name.", ".$rating.", ".$work.", ".$pic.")");
// fclose($file);