<?php 
session_start();
include_once('../controller/konek.php');
$database = new konek();

if(isset($_SESSION['is_login']))
{
    header('location:../tampilan.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:../tampilan.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:../index.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css?version=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../assets/img/wave2.png">
	<div class="container">
		<div class="img">
			<img src="../assets/img/login.png">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="../assets/img/auah2.png">
				<h2 class="title">Welcome</h2>
          <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
            <div class="div">
              <input type="text" id="username" class="form-control input" name="username" required>
            </div>
              </div>
                <div class="input-div pass">
                  <div class="i"> 
                    <i class="fas fa-lock"></i>
                  </div>
                  <div class="div">
                    <input type="password" id="password" class="form-control input"  name="password" required>
                  </div>
                </div>
                <a href="registrasi.php">Registrasi</a>
                <button class="btn btn-lg btn-success btn-block" style="color:black;" type="submit" name="login">LOGIN</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/login.js"></script>
</body>
</html>