<?php
	function phpAlertSuccess($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		echo "<script> location.replace('user-login.php');</script>";
	}
	include('permission.php');
    if (checkLogout() || !isAdmin()) {
        Header( "HTTP/1.1 301 Moved Permanently" );
        header('Location: index.php');
    }
	//checkLogin();
	if (isset($_POST['SignUpBtn']))
	{
		include('connectDB.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = 1;
		$tsql_callSP = "EXEC InsertAccount ?, ?, ?";
		$param = array(
			array($username, SQLSRV_PARAM_IN),
			array($password, SQLSRV_PARAM_IN),
			array($level, SQLSRV_PARAM_IN)
		);	
		$stmt = sqlsrv_query($conn, $tsql_callSP, $param);
		if ($stmt == False) die( print_r( sqlsrv_errors(), true));
		sqlsrv_free_stmt($stmt);
		sqlsrv_close($conn);
		phpAlertSuccess("Đăng kí thành công.");
		header("Location: user-login.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Post a job position or create your online resume by TheJobs!">
		<meta name="keywords" content="">

		<title>TheJobs - Register</title>

		<!-- Styles -->
		<link href="assets/css/app.min.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

		<!-- Favicons -->
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="icon" href="assets/img/favicon.ico">
	</head>

	<body class="login-page">
		<main>
		<div class="login-block">
			<img src="assets/img/logo.png" alt="">
			<h1>Register your company</h1>

			<form action="company-register.php" method="POST">

			<div class="form-group">
				<div class="input-group">
				<span class="input-group-addon"><i class="ti-user"></i></span>
				<input name="username" type="text" class="form-control" placeholder="Your company">
				</div>
			</div>

			<hr class="hr-xs">
			<div class="form-group">
				<div class="input-group">
				<span class="input-group-addon"><i class="ti-unlock"></i></span>
				<input name="password" type="password" class="form-control" placeholder="Choose a password">
				</div>
			</div>

			<hr class="hr-xs">
			<button name="SignUpBtn" class="btn btn-primary btn-block" type="submit">Sign up</button>

			<div class="login-footer">
				<h6>Or register with</h6>
				<ul class="social-icons">
				<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>

			</form>
		</div>

		<div class="login-links">
			<p class="text-center">Already have an account? <a class="txt-brand" href="user-login.php">Login</a></p>
		</div>

		</main>


		<!-- Scripts -->
		<script src="assets/js/app.min.js"></script>
		<script src="assets/js/custom.js"></script>

	</body>
</html>
