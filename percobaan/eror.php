<?php
require_once("controller/konek.php");
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>JabFung Penelitihan</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">La1</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#" onclick="Swal.fire(
            'LOGIN',
            'Silahkan Login terlebih dahulu untuk mengakses',
            'warning'
          )">Forms</a>
          <a class="nav-item btn btn-primary tombol" href="publis/login.php">login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">JabFung <span><br> Penelitihan</span></h1>
    <a href="" class="btn btn-primary tombol">Masuk</a>
  </div>
</div>
  <!-- akhir jumbotron -->

  <!-- container -->
  <div class="container">
    <!-- info panel -->
    <div class="row justify-content-center" >
      <div class="col-lg-8 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="assets/img/doc.png" alt="Emplloyee" class="float-left">
            <h4> forms</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img src="assets/img/printer.svg" alt="Emplloyee"class="float-left">
            <h4> print</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          </div>
        </div>
      </div>
    </div>  

    <!-- form -->
    <div class="row form">
      <div class="col-lg" data-aos="fade-left">
        <img src="assets/img/form.svg" alt=""class="img-fluid" >
      </div>
      <div class="col-lg" data-aos="fade-left" >
        <h3>Form <span>Pengisian</span> Penelitihan</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus ratione sit ab aspernatur, repellat debitis.</p>
          <a onclick="Swal.fire('LOGIN','Silahkan Login terlebih dahulu untuk mengakses','warning')" class="btn btn-primary" style="color:white; border-radius:30px;text-transform: uppercase;">Pengajuan</a>
      </div>
    </div>

    <!-- penjelasan -->
    <div class="row cara">
      <div class="col-lg gambar1">
        <img src="assets/img/doc.png" alt=""class="img-fluid">
      </div>
        <div class="col-lg">
          <h3>Cara & Format pengunaan </h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus ratione sit ab aspernatur, repellat debitis.</p>
          <a href="publis/cara.php" class="btn btn-primary tombol">penjelasan</a>
        </div>
        <div class="col-lg gambar2">
          <img src="assets/img/doc.png" alt=""class="img-fluid">
        </div>
    </div>
  </div> 
  <!-- akhir container -->
  <footer class="text-center text-lg-start mt-5 bg-primary" >
    <div class="container d-flex justify-content-center py-5">
      <a href="publis/team.php" class="btn btn-outline-light tombol">Team JabFung Penelitihan</a>
    </div>

    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">JabFung01</a>
    </div>
    <!-- Copyright -->
  </footer>
<!-- End of .container -->





<!-- aos -->
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- sweatalert -->

    <script src="assets/alert/sweetalert2.all.min.js"></script>

  </body>
</html>