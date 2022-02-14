<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .kembali1{
            display:none;
        }
        .kembali2{
            color:white;
            text-transform: uppercase;
            font-weight:500;
        }
        .library{
          text-align:center;
        }
        .library img{
          height: 250px;
        }
        .judul{
          text-align:center;
        }
        .kotak img{
          margin-top: 100px;
        }
        .form{
          margin-top: 20px;
        }
        .cara{
          margin-top: 20px;
        }
        .tombol1{
          border-radius: 30px ;
        }
        .tombol2{
          border-radius: 0 30px 0 30px;
        }
        .bg{
          background-color: #ffffff;
        }
        .jumbo{
          width: 100%;
          height: 500px;
        }
        .jumbo img{
          display:none;
        }
        .jumbo h3{
          margin-right: auto;
          margin-left: auto;
          margin-top: 150px;
          font-size: 50px;
          text-transform: uppercase;
          text-align: center;
        }
        .form img {
          margin-left: 350px; 
        }
        /* desktop */
        @media (min-width: 992px) {
            .kembali2{
                display:none;
            }
            .kembali1{
                display:block;
            }
            .library img{
                height: 100px;
            }
            .form{
              margin-top: 10px;
            }
            .kotak img{
              height: 300px;
              margin-top: -60px;
              background-color: transparent;
            }
            .kanan img{
              margin-right: 250px;
            }
            .kiri img{
              margin-left: 250px;
            }
            .jumbo img{
              height: 300px;
              margin-left: auto;
            }
            .jumbo{
              width: 100%;
              height: 300px;
            }
            .jumbo h3{
              margin-top: 150px;
              font-size: 50px;
              text-transform: uppercase;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">JabFung</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="kembali1" href="../index.php"><img src="../assets/img/back-line.svg" alt=""></a>
          <a class="kembali2" href="../index.php">kembali</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="bg">
    <div class="jumbo container">
        <div class="row">
          <h3>Kelompok LA1</h3>
          <img src="../assets/img/team/lala2.png" alt="">
        </div>
      </div>
  </div>
  <img class="wave" src="../assets/img/gelombang.svg" alt="">

  
  <div class="container">
    
    <!-- form -->
    <div class="row form">
      <div class="col-lg"data-aos="fade-left">
        <img src="../assets/img/laporan.png" alt=""class="img-fluid" style="width: 150px;" >
      </div>
      <div class="col-lg" data-aos="fade-left" >
        <h3>Laporan <span>pembukuan</span></h3>
        <p>ini adalah laporan akhir yang kami buat di projek kami</p>
          <a href="https://docs.google.com/document/d/1XiZu1eU-VBdfntl704Lck9H1X3jmpjStEVWsF3vOx38/edit?usp=sharing" class="btn btn-primary tombol">lihat</a>
      </div>
    </div>

    <!-- penjelasan -->
    <div class="row cara">
    <div class="col-lg gambar1">
        <img src="../assets/img/desain.png" alt=""class="img-fluid" style="width:250px;">
      </div>
      <div class="col-lg">
        <h3>Desain ui ux</h3>
        <p>ini desain ui ux yang kami buat di semester 4 yang kami refisi kembali di semeswter 5 </p>
        <a href="https://www.figma.com/file/RZfNkC0Y9vTYtnmfNR3C4l/Untitled?node-id=0%3A1" class="btn btn-primary tombol">Lihat</a>
      </div>
      <div class="col gambar2">
        <img src="../assets/img/desain.png" alt=""class="img-fluid" style="width:250px;">
      </div>
    </div>

    <!-- form -->
    <div class="row form">
      <div class="col-lg"data-aos="fade-left">
        <img src="assets/img/form.svg" alt=""class="img-fluid" >
      </div>
      <div class="col-lg" data-aos="fade-left" >
        <h3>Form <span>Pengisian</span> Penelitian</h3>
        <p>Disposisi surat sangat penting dalam masalah HKI, dengan penggunaan aplikasi AU-AH diharapkan menjadi lebih mudah dan efisien.</p>
          <a href="publis/input.php" class="btn btn-primary tombol">lihat</a>
      </div>
    </div>

      </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/ScrollTrigger.min.js"></script>
  <script>
    gsap.timeline({
      scrollTigger:{
        triger:".col-lg",
        start:"center center",
        end:"botom top",
        markes: true,
        scrub: true,
        pin:true
      }
    })
    .from(".kiri h3", {y: innerHeight * 50, opacity:0})
  </script> -->
  
  <script>
  gsap.from('nav ', {duration: 3, y:-100, opacity:0, ease:'bounce'});
    // gsap.from('.jumbo img', {duration: 5,x:-100, opacity:0 , ease:'elastic'});
    gsap.from('.jumbo h3', {duration: 5,x:100, opacity:0 , ease:'elastic',delay:0.5});
    gsap.from('.wave', {duration: 5,y:-100, opacity:0 ,delay:0.5});
  </script>
    <!-- <script>
    
    gsap.from('.kotak img', {duration: 3, y:-100, opacity:0 , ease:'elastic'});
    gsap.from('.kiri h3 ', {duration: 3, x:100, opacity:0, delay:0.8 });
    gsap.from('.kanan h3 ', {duration: 3, x:-100, opacity:0, delay:0.8 });
    gsap.from('.kanan p ', {duration: 3, x:-100, opacity:0, delay:0.8 });
    gsap.from('.kiri p ', {duration: 3, x:100, opacity:0, delay:0.8 });
    gsap.from('.tombol1 ', {duration: 3, x:-100, opacity:0, delay:0.8 });
    gsap.from('.tombol2 ', {duration: 3, x:100, opacity:0, delay:0.8 });
  </script> -->
</body>
</html>