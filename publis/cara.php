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
        .pengunaan{
            margin-top:100px;
        }
        .pengunaan h3{
            font-size:65px;
            text-transform:uppercase;
            font-size: 40px;
        }
        .pengunaan p{
            color:#acacac;
            font-weight:200;
        }
        .gambar{
            display: none;
        }

        /* desktop */
        @media (min-width: 992px) {
            .kembali2{
                display:none;
            }
            .kembali1{
                display:block;
            }
            .gambar{
                display: block;
                width: 50%;
                position: relative;
                z-index: -2;
                margin-left: 250px;
                margin-top: -100px;
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
            <a class="nav-item nav-link kembali2" href="../index.php">kembali</a>
            </div>
        </div>
        </div>
    </nav>

    <div class="container pengunaan">
        <div class="col-lg">
            <h3>cara dan format pengunaan</h3>
            <p>
                1. Klik tombol pengajuan untuk mengisi form pada AU-AH jabfung penelitian<br>
                2. Isi form penelitian<br>
                3. Cetak form dengan format PDF
            </p>
        </div>
        <img src="../assets/img/bgcara.png" class="gambar" alt="">
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>