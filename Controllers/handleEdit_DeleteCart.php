<?php
    header('Content-Type: text/html; charset=UTF-8');
    include ("connectDB.php");

    if(isset($_POST['Edit'])){
        $id = $_POST['id'];
        $amount = $_POST['amount'];
        $select = mysqli_query($conn, "SELECT Price FROM cartfood WHERE ID ='$id' ");
        $row =  mysqli_fetch_array($select);
        $price = $row['Price'] * $amount;
        $price = $price.".000đ";
        $edit = mysqli_query($conn," UPDATE cartfood SET Amount = '{$amount}', TotalPrice = '{$price}' WHERE ID = '$id'");

    }
    else if (isset($_POST['Delete'])) {
        $id = $_POST['id'];
        $delete = mysqli_query($conn,"DELETE FROM cartfood WHERE id = '$id'");
        echo json_encode("delete");
    }
    
?>