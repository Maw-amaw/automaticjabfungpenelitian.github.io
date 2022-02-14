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
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .kembali1{
            display:none;
        }
        .kembali2{
            color:white;
            text-transform: uppercase;
            font-weight:500;
        }
        /* desktop */
        @media (min-width: 992px) {
            .kembali2{
                display:none;
            }
            .kembali1{
                display:block;
            }
        }
        .rad1{
            border-radius: 30px; 
            border:2px solid blue; 
            background:transparent;
            margin-top: 10px;
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
    </style>
  </head>
  <body>
    

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">JabFung</a>
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
            <h3>Input data penelitihan</h3>
            <tr>
                <td>
                <span class="input-group-text rad1">a) Hasil penelitian atau hasil pemikiran yang dipublikasikan dalam bentuk buku</span>
                </td>
                <td>
                <select name="nilai1" class="rad2">
                        <option value="0"> </option>
                        <option value="20">monograf</option>
                        <option value="40">buku referensi</option>
                        </select>
                </td>
            </tr>
        </div>

        <button type="submit" value="Simpan" name="simpan" class="btn btn-success">Submit</button>

    </form>
    


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>