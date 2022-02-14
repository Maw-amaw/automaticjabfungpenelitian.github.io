<?php
if(isset($_POST['simpan'])){
    $nilai1=trim($_POST['nilai1']);
    $nilai2=trim($_POST['nilai2']);
    $nilai3=trim($_POST['nilai3']);
    $nilai4=trim($_POST['nilai4']);
    $nilai5=trim($_POST['nilai5']);
    $nilai6=trim($_POST['nilai6']);
    $nilai7=trim($_POST['nilai7']);
    $nilai8=trim($_POST['nilai8']);
    $nilai9=trim($_POST['nilai9']);
    $nilai10=trim($_POST['nilai10']);
    $nilai11=trim($_POST['nilai11']);
    $nilai12=trim($_POST['nilai12']);
    $nilai13=trim($_POST['nilai13']);
    $nilai14=$nilai1+$nilai2+$nilai3;
    $nilai15=$nilai14*25/100;
    $total=$nilai1+$nilai2+$nilai3+$nilai4+$nilai5+$nilai6+$nilai7+$nilai8+$nilai9+$nilai10+$nilai11+$nilai12+$nilai13+$nilai15;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/css.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Print</title>
    <style>
      nav{
        margin-bottom: 35px;
      }
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
          height: 400px;
        }
        .form{
          margin-top: 20px;
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
              margin-right: 350px;
            }
            .kiri img{
              margin-left: 350px;
            }
        }
    </style>
  </head>
  <body>
    <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../assets/img/auah5.png" class="n1" style="height:20px;" alt="">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="kembali1" href="input.php"><img src="../assets/img/back-line.svg" alt=""></a>
          <a class="nav-item nav-link kembali2" href="input.php">kembali</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- isi form -->
  <div class="container">
  <table style="width:100%">
          <tr>
            <th width="5%">No</th>
            <th>Jenis Kegiatan</th>
            <th width="20%" >Angka Kredit Paling Tinggi</th>
          </tr>
          <tr>
            <td class="tengah"><b>C.</b></td>
            <td><b>PENELITIAN</b></td>
            <td> </td>
          </tr>
          <tr>
            <td  class="tengah">1.</td>
            <td>Menghasilkan karya ilmiah sesuai dengan bidang ilmunya : </td>
            <td> </td>
          </tr>
          <tr>
            <td class="tengah"> </td>
            <td>a). Hasil penelitian atau hasil pemikiran yang dipublikasikan dalam bentuk buku.</td>
            <td class="tengah"><b><?php echo $nilai1;?></td>
          </tr>
          <tr>
            <td class="tengah"> </td>
            <td>b). Hasil penelitian atau hasil pemikiran dalam buku yang dipublikasikan.</td>
            <td class="tengah"><b><?php echo $nilai2;?></td>
          </tr>
          <tr>
            <td class="tengah"> </td>
            <td>c). Hasil penelitian atau hasil pemikiran yang dipublikasikan.</td>
            <td class="tengah"><b><?php echo $nilai3;?></td>
          </tr>



          <tr>
            <td  class="tengah">2.</td>
            <td>Hasil Penelitihan Atau hasil pemikiran yang di desiminasikan (batas keputusan / pengakuan banyaknya publikasi di setiap event / kegiatan desiminasi paling banyak 2 (dua) artikel karya ilmiah)</td>
            <td> </td>
          </tr>
          <tr>
            <td class="tengah"> </td>
            <td>a) Dipresentasikan secara oral dan di muat dalam prosending yang di publisasikan </td>
            <td class="tengah"><b><?php echo $nilai4;?></td>
          </tr>
          <tr>
            <td class="tengah"> </td>
            <td>b) Di sajikan dalam bentuk poster dan di muat dalam prosending yang di publikasikan :</td>
            <td class="tengah"><b><?php echo $nilai5;?></td>
          </tr>
          <tr>
            <td class="tengah"> </td>
            <td>c) di sajikan dalam seminar /simposium / lokakarya, tetapi tidak di muat dalam prosending yang di publikasikan :</td>
            <td class="tengah"><b><?php echo $nilai6;?></td>
          </tr>
          <tr>
            <td class="tengah"> </td>
            <td>d) hasil penelitian /pemikiran yang tidak di sajikan dalam seminar /simposium /lokakarya , tetapi di muat dalam prosending</td>
            <td class="tengah"><b><?php echo $nilai7;?></td>
          </tr>
          <tr>
            <td class="tengah"> </td>
            <td>e) Hasil penelitian atau hasil pemikiran yang di sajikan dalam koran / majalah populer / umum</td>
            <td class="tengah"><b><?php echo $nilai8;?></td>
          </tr>

          <tr>
            <td  class="tengah">3.</td>
            <td>Hasil penelitihan atau pemikiran atau kerjasama industri yang tidak di publish</td>
            <td class="tengah"><b><?php echo $nilai9;?></td>
          </tr>

          <tr>
            <td  class="tengah">4.</td>
            <td>menerjemakan / menyadur buku ilmiah dalam bentuk buku yang di terbitkan</td>
            <td class="tengah"><b><?php echo $nilai10;?></td>
          </tr>

          <tr>
            <td  class="tengah">5.</td>
            <td>mengedit / menyuting karya ilmiah dalam bentuk buku yang di terbitkan</td>
            <td class="tengah"><b><?php echo $nilai11;?></td>
          </tr>

          <tr>
            <td  class="tengah">6.</td>
            <td>Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HaKI secara nasional atau internasional.</td>
            <td class="tengah"><b><?php echo $nilai12;?></td>
          </tr>

          <tr>
            <td  class="tengah">7.</td>
            <td>Membuat rancangan dan karya teknologi yang tidak dipatenkan, rancangan dan karya seni monumental yang tidak terdaftar di HKI tetapi telah dipresentasikan pada forum yang teragenda :</td>
            <td class="tengah"><b><?php echo $nilai13;?></td>
          </tr>

          <tr>
            <td  class="tengah">8.</td>
            <td>Membuat Rancangan dan karya seni yang tidak terdaftar HKI</td>
            <td class="tengah"><b><?php echo $nilai15;?></td>
          </tr>

          <tr>
            <th width="5%"></th>
            <th></th>
            <th width="20%" >Total Angka Kredit Paling Tinggi</th>
          </tr>

          <tr>
            <td  class="tengah"></td>
            <td></td>
            <td class="tengah"><b><?php echo $total;?></td>
          </tr>
        
        </table>
          <br> 
      <button onclick="window.print()" class="btn btn-primary tombol d-print-none">PRINT</button>
          </div>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>