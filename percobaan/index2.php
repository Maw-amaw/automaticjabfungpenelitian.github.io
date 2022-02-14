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
    <link href="assets/Hover/css/hover-min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


<link rel="stylesheet" href="assets/fonts/icomoon/style.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

  </head>
  <body>
    

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">JabFung</a>
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
          )" >Forms</a>
          <a class="nav-item btn btn-primary tombol " href="publis/login.php">login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Automatic <span><br>JabFung Penelitihan</span></h1>
    <a href="publis/login.php" class="btn btn-primary tombol ">Masuk</a>
  </div>
</div>
  <!-- akhir jumbotron -->

  <!-- container -->
  <div class="container">
    <!-- info panel -->
    <div class="row justify-content-center" >
      <div class="col-lg-10 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="assets/img/form2.svg" alt="Emplloyee" class="float-left">
            <h4>buat form</h4>
            <p>kalian bisa mengisi nilai di form di bawah ini</p>
          </div>
          <div class="col-lg">
            <img src="assets/img/printer.svg" alt="Emplloyee"class="float-left">
            <h4>print form</h4>
            <p>kalian bisa menyimpan form kalian dengan format pdf</p>
          </div>
        </div>
      </div>
    </div>  

    <!-- form -->
    <div class="row form">
      <div class="col-lg"data-aos="fade-left">
        <img src="assets/img/form.svg" alt=""class="img-fluid" >
      </div>
      <div class="col-lg" data-aos="fade-left" >
        <h3>Form <span>Pengisian</span> Penelitihan</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus ratione sit ab aspernatur, repellat debitis.</p>
          <a href="#" onclick="Swal.fire(
            'LOGIN',
            'Silahkan Login terlebih dahulu untuk mengakses',
            'warning'
          )" class="btn btn-primary tombol">Pengajuan</a>
      </div>
    </div>

    <!-- penjelasan -->
    <div class="row cara">
    <div class="col-lg gambar1" data-aos="fade-right">
        <img src="assets/img/doc.png" alt=""class="img-fluid">
      </div>
      <div class="col-lg"data-aos="fade-right">
        <h3>Cara & Format pengunaan </h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus ratione sit ab aspernatur, repellat debitis.</p>
        <a href="publis/cara.php" class="btn btn-primary tombol">penjelasan</a>
      </div>
      <div class="col gambar2"data-aos="fade-right">
        <img src="assets/img/doc.png" alt=""class="img-fluid">
      </div>
    </div>
    

  </div> 
  <!-- akhir container -->
  


  
  <!-- footer -->
  <footer class="footer-20192">
      <div class="site-section">
        <div class="container">

          <div class="cta d-block d-md-flex align-items-center px-5">
            <div>
              <h2 class="mb-0">Ready for a next project?</h2>
              <h3 class="text-dark">Let's get started!</h3>
            </div>
            <div class="ml-auto">
              <a href="#" class="btn btn-dark rounded-0 py-3 px-5">Contact us</a>
            </div>
          </div>
          <div class="row">

            <div class="col-sm">
              <a href="#" class="footer-logo">Colorlib</a>
              <p class="copyright">
                <small>&copy; 2019</small>
              </p>
            </div>
            <div class="col-sm">
              <h3>Customers</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Buyer</a></li>
                <li><a href="#">Supplier</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>Company</h3>
              <ul class="list-unstyled links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>Further Information</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3>Follow us</h3>
              <ul class="list-unstyled social">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-medium"></span></a></li>
                <li><a href="#"><span class="icon-paper-plane"></span></a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </footer>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>





<!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- sweatalert -->

    <script src="assets/alert/sweetalert2.all.min.js"></script>

  </body>
</html>