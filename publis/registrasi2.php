<?php 
include_once('../controller/konek.php');
$database = new konek();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $pangkat = $_POST['pangkat'];
    $jabatan = $_POST['jabatan'];
    $unit_kerja = $_POST['unit_kerja'];

    if($database->register($username,$password,$nama,$nip,$pangkat,$jabatan,$unit_kerja))
    {
      header('location:login.php');
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
  <style>
    .kanan{
      margin-left: auto;
    }
    .kiri{
      margin-right: auto;
    }
  </style>
</head>
<body>
	<img class="wave" src="../assets/img/wave2.png">
	<div class="container">
		<div class="img">
			<img src="../assets/img/bg4.png">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<!-- <img src="../assets/img/auah.png"> -->
				<h2 class="title">REGISTRASI</h2>
<!-- username -->
          <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
            <div class="div">
              <input type="text" id="username" class="form-control input" name="username" required placeholder="username / nama">
            </div>
          </div>
<!-- password -->
          <div class="input-div pass">
            <div class="i"> 
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <input type="password" id="password" class="form-control input"  name="password" required placeholder="password">
            </div>
          </div>
<!-- nama -->
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-id-card"></i>
            </div>
            <div class="div">
              <input type="text" id="nip" class="form-control input" name="nip" required placeholder="nip">
            </div>
          </div>
<!-- nip -->
          <div class="input-div pass">
            <div class="i"> 
              <i class="fas fa-briefcase"></i>
            </div>
            <div class="div">
              <input type="text" id="unit_kerja" class="form-control input"  name="unit_kerja" required placeholder="unit kerja">
            </div>
          </div>

              <button class="btn btn-lg btn-success btn-block" style="color:black;" type="submit" name="register">REGISTRASI</button>
          </form>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/login.js"></script>
</body>
</html>