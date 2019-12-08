<?php  
    if(isset($_SESSION['account'])){
        $email = $_SESSION['account'];
        $password = $_SESSION['password'];
        $user_name = $_SESSION['username'];
?>
        <script type="text/javascript">
            document.getElementById("btn_login").style.display = "none";
            document.getElementById("btn_logout").style.display = "block";
            document.getElementById("username").style.display = "block";
        </script>
<?php	
    }
    else{
?>
        <script type="text/javascript">
            document.getElementById("btn_login").style.display = "block";
            document.getElementById("btn_logout").style.display = "none";
            document.getElementById("username").style.display = "none";
        </script>
<?php
    }
	
?>