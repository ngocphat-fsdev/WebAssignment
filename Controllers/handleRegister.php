<?php
    include ("connectDB.php");
    $user_name = $email = $password = $gender = "";
    $error_user_name = $error_email = $error_password = $gender_error="";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user_name"])) {
            $error_user_name = "Yêu cầu họ tên";
        }
        else{
            $user_name = test_input($_POST["user_name"]);
            if(strlen($user_name)<2 || strlen($user_name)>255){
                $error_user_name = "Tên phải có ít nhất 2 kí tự";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Yêu cầu email";
        }
        else{
            $email = test_input($_POST["email"]);
            if (!preg_match("/^\w+([-]?\w+)*@\w+([-]?\w+)*(\.\w{2,4})$/",$email)) {
                $error_email = "Email không hợp lệ !";
            }
        }

        if (empty($_POST["password"])) {
            $error_password = "Yêu cầu password";
        }
        else{
            $password = test_input($_POST["password"]);
            if(strlen($password)<6 || strlen($password)>255){
                $error_password = "Password phải có ít nhất 6 kí tự!";
            }
        }

        if (empty($_POST["gender"])) {
            $gender_error = "Yêu cầu giới tính";
        } 
        else{
            $gender = test_input($_POST["gender"]);
        }

    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    

    if($error_user_name == "" && $error_email == "" && $error_password == "" && $gender_error == ""
        && $user_name != "" && $email != "" && $password != "" && $gender != ""){
        $sex;
        if($gender == "male") $sex = 1;
        if($gender == "female") $sex = 0;
        
        $insert = mysqli_query($conn," INSERT INTO user (UserName, Sex, AccountName, Password, UserLevel) VALUES ('$user_name','$sex','$email','$password', 1)");
        session_start();
        $_SESSION['account']=$email;
        $_SESSION['password']=$password;
        $_SESSION['username']=$user_name;
        header('Location: ../homepage.php');
    }
    ?>