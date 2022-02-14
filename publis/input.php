<?php
    session_start();
    if(! isset($_SESSION['is_login']))
    {
    header('location:login.php');
    }

    include_once('../controller/konek.php');
    $database = new konek();

    
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
        .rad1{
            background:transparent;
            margin-top: 10px;
            width: auto;
            padding-left: 10px;
            padding-right: 10px;
        }
        .rad2{
            border-radius: 30px; 
            border:2px solid blue; 
            background:transparent; 
            height:40px;
            width: 190px;
            padding-left: 10px;
            margin-top: 10px;
        }
        .rad3{
            border-radius: 30px; 
            border:2px solid blue; 
            background:transparent;
            margin-top: 10px;
            width: 200px;
            padding-left: 10px;
            padding-right: 10px;
        }

        /* desktop */
        @media (min-width: 992px) {
            .kembali2{
                display:none;
            }
            .kembali1{
                display:block;
            }
            .rad1{
                border-radius: 30px; 
                border:2px solid blue; 
                background:transparent;
                margin-top: 10px;
                width: 650px;
                padding-left: 10px;
                padding-right: 10px;
            }
            .rad2{
                border-radius: 30px; 
                border:2px solid blue; 
                background:transparent; 
                height:40px;
                width: 190px;
                padding-left: 10px;
                margin-top: 10px;
            }
            .rad3 {
                border-radius: 30px; 
                border:2px solid blue; 
                background:transparent;
                margin-top: 10px;
                width: 650px;
                padding-left: 10px;
                padding-right: 10px;
            }
        }
        
    </style>
  </head>
  <body>
    

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">
        <img src="../assets/img/auah5.png" style="height:20px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="kembali1" href="../index.php"><img src="../assets/img/back-line.svg" alt=""></a>
            <a class="nav-item nav-link kembali2" href="../index.php">kembali</a>
            </div>
        </div>
        </div>
    </nav>
  <!-- akhir navbar -->
<div class="container">
    <h3 style="padding-top: 15px;">Input Data Penelitian</h3>
    <br>
    <form action="tampil.php" method="post">
<!-- form1 -->
            <h5>1. Menghasilkan karya ilmiah sesuai dengan bidang ilmunya:</h5>
                <div class="input-group mb-3">
                    <div class="col-lg">
                        <div class="input-group-prepend">
                        <span class="input rad1 ">a) Hasil penelitian atau hasil pemikiran yang dipublikasikan dalam bentuk buku</span>
                        </div>
                    </div>
                    <div class="col-lg">
                        <select name="nilai1" class="rad2 ">
                        <option value="0"> </option>
                        <option value="20">Monograf</option>
                        <option value="40">Buku referensi</option>
                        </select>
                    </div>
                </div>
                <di class="input-group mb-3">
                    <div class="col-lg">
                    <div class="input-group-prepend">
                        <span class="input rad1 ">b) Hasil penelitian atau hasil pemikiran dalam buku yang dipublikasikan dan berisi berbagai tulisan dari berbagai penulis </span>
                    </div>
                </div>
                <div class="col-lg">
                    <select name="nilai2"  class="rad2 ">
                        <option value="0"> </option>
                        <option value="15">Internasional</option>
                        <option value="10">Nasional</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="col-lg">
                        <div class="input-group-prepend">
                            <span class="input rad1 ">c.) Hasil penelitian atau hasil pemikiran yang dipublikasikan</span>
                        </div>
                    </div>
                    <div class="col-lg">
                        <select name="nilai3"  class="rad2">
                            <option value="0"> </option>
                            <option value="40">1. Jurnal internasional bereputasi</option>
                            <option value="30">2. Jurnal internasional terindeks pada basis data internasional bereputasi </option>
                            <option value="20">3. Jurnal internasional terindeks pada basis data internasional di luar kategori 2</option>
                            <option value="25">4a. Jurnal nasional terakreditasi dikti</option>
                            <option value="25">4b. Jurnal nasional terakreditasi peringkat 1 dan 2 </option>
                            <option value="20">5a. Jurnal nasional berbahasa inggris atau bahasa resmi (PBB) terindeks pada basis data yang di akui Kemenristekdikti </option>
                            <option value="15">5b. Jurnal nasional terakreditasi peringkat 3 dan 4</option>
                            <option value="10">6. Jurnal Nasional (jurnal nasional di luar poin 5)</option>
                            <option value="10">7. Jurnal ilmiah yang di tulis dalam Bahasa Resmi PBB namun tidak memenuhi syarat</option>
                        </select>
                    </div>
                </div>
        
    <!-- form 2 -->
    <h5>2. Hasil penelitian atau hasil pemikiran yang didesiminasikan (Batas kepatutan/pengakuan banyaknya publikasi di setiap event/kegiatan deseminasi paling banyak 2 (dua) artikel karya ilmiah):</h5>
    <div class="input-group mb-3">

    <!-- a -->
        <div class="col-lg">
            <div class="input-group-prepend">
                <span class="input rad1 ">a) Dipresentasikan secara oral dan dimuat dalam prosiding yang dipublikasikan</span>
            </div>
        </div>
        <div class="col-lg">
            <select name="nilai4"  class="rad2 ">
                <option value="0"> </option>
                <option value="30">Internasional terindeks pada Scimagojr dan Scopus</option>
                <option value="25">Internasional terindeks pada SCOPUS, IEEE Explore, SPIE</option>
                <option value="15">Internasional</option>
                <option value="10">Nasional</option>
            </select>
        </div>
    </div>
        <div class="input-group mb-3">
            <!-- b -->
            <div class="col-lg">
                <div class="input-group-prepend">
                    <span class="input rad1 ">b) Disajikan dalam bentuk poster dan dimuat dalam prosiding yang dipublikasikan</span>
                </div>
            </div>
            <div class="col-lg">
                <select name="nilai5"  class="rad2 ">
                    <option value="0"> </option>
                    <option value="10">Internasional</option>
                    <option value="5">Nasional</option>
                </select>
            </div>
        </div>
        <!-- c -->
        <div class="input-group mb-3">
            <div class="col-lg">
                <div class="input-group-prepend">
                    <span class="input rad1 ">c) Disajikan dalam seminar/simposium/lokakarya, tetapi tidak dimuat dalam prosiding yang dipublikasikan</span>
                </div>
            </div>
            <div class="col-lg">
                <select name="nilai6"  class="rad2 ">
                    <option value="0"> </option>
                    <option value="5">Internasional</option>
                    <option value="3">Nasional</option>
                </select>
            </div>
        </div>
        <!-- d -->
        <div class="input-group mb-3">
            <div class="col-lg">
                <div class="input-group-prepend">
                    <span class="input rad1 ">d) Hasil penelitian/pemikiran yang tidak disajikan dalam seminar/simposium/lokakarya, tetapi dimuat dalam prosiding</span>
                </div>
            </div>
            <div class="col-lg">
                <select name="nilai7"  class="rad2 ">
                    <option value="0"> </option>
                    <option value="10">Internasional</option>
                    <option value="5">Nasional</option>
                </select>
            </div>
        </div>
        <!-- e -->
        <div class="input-group mb-3">
            <div class="col-lg">
                <div class="input-group-prepend">
                    <span class="input rad1 ">e) Hasil penelitian/pemikiran yang disajikan dalam koran/majalah populer/umum</span>
                </div>
            </div>
                <div class="col-lg">
                <select name="nilai8"  class="rad2 ">
                    <option value="0"> </option>
                    <option value="1">Iya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>
        
    
        <!-- form 3 -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <h5>3. Hasil penelitian atau pemikiran atau kerjasama industri yang tidak dipublikasikan:</h5>
            </div>
            <div class="col-lg">
                <select name="nilai9"  class="rad3">
                    <option value="0"> </option>
                    <option value="2">Iya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <!-- form 4 -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <h5>4. Menerjemahkan/Menyadur buku ilmiah dalam bentuk buku yang diterbitkan (ber ISBN): </h5>
            </div>
            <div class="col-lg">
                <select name="nilai10" class="rad3" >
                    <option value="0"> </option>
                    <option value="15">Iya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <!-- form 5 -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <h5>5. Mengedit/Menyunting karya ilmiah dalam bentuk buku yang diterbitkan (ber ISBN):</h5>
            </div>
            <div class="col-lg">
                <select name="nilai11" class="rad3" >
                    <option value="0"> </option>
                    <option value="10">Iya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <!-- form 6 -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <h5>6. Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HKI secara nasional atau internasional:</h5>
            </div>
            <div class="col-lg">
                <select name="nilai12" class="rad3" >
                    <option value="0"> </option>
                    <option value="60">a). Internasional yang sudah diimplementasikan di Industri</option>
                    <option value="50">b). Internasional (paling sedikit diakui oleh 4 Negara)</option>
                    <option value="40">c). Nasional (yang sudah diimplementasikan di Industri)</option>
                    <option value="30">d). Nasional</option>
                    <option value="20">e). Nasional, dalam bentuk paten sederhana yang telah memiliki sertifikat dari Direktorat Jenderal Kekayaan Intelektual</option>
                    <option value="15">f). Karya ciptaan, desain industri, indikasi geografis yang telah memiliki sertifikat dari Direktorat Jenderal Kekayaan Intelektual</option>
                </select>
            </div>
        </div>

        <!-- form 7 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <h5>7. Membuat rancangan dan karya teknologi yang tidak dipatenkan, rancangan dan karya seni monumental yang tidak terdaftar di HKI tetapi telah dipresentasikan pada forum yang teragenda: </h5>
                </div>
            </div>
            <div class="col-lg">
                <select name="nilai13" class="rad3" >
                    <option value="0"> </option>
                    <option value="20">a). Tingkat Internasional</option>
                    <option value="15">b). Tingkat Nasional</option>
                    <option value="10">c). Tingkat Lokal</option>
                </select>
            </div>

        <!-- form 8 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <h5>8. Membuat rancangan dan karya seni yang tidak terdaftar HKI (Otomatis Tercetak):</h5>
                </div>
            </div>
        <button type="submit" value="Simpan" name="simpan" class="btn btn-primary tombol" style="border-radius:30px;">Submit</button>

    </form>
    


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>