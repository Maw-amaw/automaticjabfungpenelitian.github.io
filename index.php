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
    <link rel="stylesheet" href="assets/css/style.css?version=1">
    <style>
      .n1{
        display: none;
      }
      .n2{
        height: 30px;
      }
      @media (min-width: 992px) {
        .n1{
          display: block;
        }
        .n2{
          display: none;
        }
      }
    </style>
  </head>
  <body>
    

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand " href="#">
        <img src="assets/img/auah5.png" class="n1" style="height:30px;" alt="">
        <img src="assets/img/auah6.png" class="n2" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="">Home <span class="sr-only">(current)</span></a>
          <?php if (isset($_SESSION["username"])) : ?>
          <a href="publis/input.php" class="nav-item nav-link">Form</a>
        <?php else : ?>
          <a href="#" onclick="Swal.fire(
            'LOGIN',
            'Silahkan Login terlebih dahulu untuk mengakses',
            'warning'
          )" class="nav-item nav-link">Form</a>
        <?php endif; ?>
          <?php if (isset($_SESSION["username"])) : ?>
            <a class="nav-item btn btn-primary tombol" href="controller/logout.php"data-bs-toggle="modal" data-bs-target="#login">logout</a>
            <?php else : ?>
              <a class="nav-item btn btn-primary tombol " href="publis/login.php"data-bs-toggle="modal" data-bs-target="#login">Login</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"><span>AU-AH</span> <br> Automatic  JabFung Penelitian</h1>
    </div>
  </div>
  <!-- akhir jumbotron -->

  <!-- container -->
  <div class="container">
    <!-- info panel -->
    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-lg-10 info-panel">
        <div class="row">
          <div class="col-lg" >
            <img src="assets/img/doc.png" alt="Emplloyee" class="float-left">
            <h4> Form</h4>
            <p>Pengisian nilai pada form</p>
          </div>
          <div class="col-lg">
            <img src="assets/img/printer.svg" alt="Emplloyee"class="float-left">
            <h4> Print</h4>
            <p>Menyimpan dengan format PDF</p>
          </div>
        </div>
      </div>
    </div>  

      <!-- form -->
      <div class="row form">
      <div class="col-lg"data-aos="fade-up" data-aos-duration="1500">
        <img src="assets/img/form.svg" alt=""class="img-fluid" >
      </div>
      <div class="col-lg"data-aos="fade-up" data-aos-duration="1500" >
        <h3>Form <span>Pengisian</span> Penelitian</h3>
        <p>jadi user cukup mengisi form yang sudah di sediakan nantinya nilai akan otomatis terhitung di aplikasi ini dan setelah itu bisa kita cetak dengan format pdf.</p>
        <?php if (isset($_SESSION["username"])) : ?>
          <a href="publis/input.php" class="btn btn-primary tombol">Pengajuan</a>
        <?php else : ?>
          <a href="#" onclick="Swal.fire(
            'LOGIN',
            'Silahkan Login terlebih dahulu untuk mengakses',
            'warning'
          )" class="btn btn-primary tombol">Pengajuan</a>
        <?php endif; ?>
      </div>
    </div>

    <!-- penjelasan -->
    <div class="row cara">
    <div class="col-lg gambar1"data-aos="fade-up" data-aos-duration="2000" >
        <img src="assets/img/doc.png" alt=""class="img-fluid" style="width: 200px;">
      </div>
      <div class="col-lg"data-aos="fade-up" data-aos-duration="2000">
        <h3>Cara & Format penggunaan </h3>
        <p>Tekan tobol dibawah ini untuk mengetahui cara dan format penggunaan pada website AU-AH.</p>
        <a href="publis/cara.php" class="btn btn-primary tombol">penjelasan</a>
      </div>
      <div class="col gambar2"data-aos="fade-up" data-aos-duration="2000">
        <img src="assets/img/doc.png" alt=""class="img-fluid">
      </div>
    </div>
    
    

  </div> 
  <!-- akhir container -->

  <!-- footer -->
  <footer class="footer-20192" style="margin-top: 150px;">
      <div class="site-section">
        <div class="container">

          <div class="cta d-block d-md-flex align-items-center px-5" data-aos="fade-up" data-aos-duration="2500">
            <div>
              <h2 class="mb-0">Buat akun </h2>
              <h3 class="text-dark">jika anda belum mempunyai akun</h3>
            </div>
            <div class="ml-auto">
              <a href="publis/registrasi2.php" class="btn btn-light" style="height: 50px;width: 200px; text-align:center; font-weight:bold;"><h3>buat</h3></a>
            </div>
          </div>
          <div class="row" >
            
            <div class="col-sm" style="text-align:center;" data-aos="fade-up" data-aos-duration="3000">
              <a href="#" class=""><img src="assets/img/auah3.png" style="height: 100px;" alt=""></a>
            </div>
            
            <div class="col-sm" style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
              <h3>Tentang</h3>
              <ul class="list-unstyled links" style="color: white;">
                <li><h3>Website Auah merupakan sebuah produk berbasis website yang berfungsi untuk menghitung nilai kredit dari jabatan fungsional khususnya untuk penelitihan.</h3></li>
              </ul>
            </div>

            <div class="col-sm" style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
              <h3>Hubungi Kami :</h3>
              <ul class="list-unstyled links" style="color: white;">
                <li><a href="#">Jabfungpenelitiaan@gmail.com</a></li>
                <li><a href="#">08512345678</a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
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

    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
    <script>
      gsap.from('nav ', {duration: 3, y:-100, opacity:0, ease:'bounce'});
      gsap.from('.display-4 ', {duration: 3, x:-100, opacity:0, delay:0.5 ,ease:'back' });
    </script>
  </body>
</html>