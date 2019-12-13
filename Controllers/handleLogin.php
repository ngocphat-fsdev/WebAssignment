<?php 
    include ("connectDB.php");
    include ("../../Models/User.php");
    $username = $password = $logInFailed="";
    session_start();

    $result = mysqli_query($conn, "SELECT * FROM user ORDER BY UserID ASC");
    $list_user = array();
    $row_count = $result->num_rows;
    if($row_count > 0){
        while ($row = mysqli_fetch_array($result)){
            $user = new User($row['UserID'], $row['UserName'], $row['Sex'], $row['AccountName'], $row['Password'], $row['UserLevel']);
            array_push($list_user, $user);
        }
    }

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $username = $_POST['account'];
        $password = $_POST['password'];

        for($i = 0 ; $i < count($list_user); $i++){
            if($username == $list_user[$i]->getAccountName()){
                if($password == $list_user[$i]->getPassword()){
                    $_SESSION['account']=$username;
                    $_SESSION['password']=$password;
                    $_SESSION['username']= $list_user[$i]->getName();
                    $_SESSION['level'] = $list_user[$i]->getUserLevel();
                     header('Location: ../homepage.php');
                }
                else $logInFailed="Wrong password !";
            }
            else{
                $logInFailed="Username does not exist, please try again !";
            }
        }
        
    }
?>
