<?php
    header('Content-Type: text/html; charset=UTF-8');
    include ("connectDB.php");
    session_start();
    $result ="";
    
    if(!isset($_SESSION['account'])){
        $result = "no account";
    }
    else{
        if(isset($_POST['Add'])){
            $id = $_POST['id'];
            $nameFood = $_POST['nameFood'];
            $linkImage = $_POST['linkImage'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $totalprice = $_POST['totalprice'];
            $status = $_POST['status'];

            $insert = mysqli_query($conn," INSERT INTO cartfood VALUES ('$id','$nameFood','$linkImage','$price','$amount','$totalprice','$status')");
        }
        $result ="Đã thêm";
    }
    echo json_encode($result);
?>
