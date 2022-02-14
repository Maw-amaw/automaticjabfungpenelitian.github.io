<?php

require_once '../controller/konek.php';

if (isset($_POST['submit'])) {
    $nama_input = $_POST['nama_input'];
  
    // id_produk bernilai '' karena kita set auto increment
    $q = $conn->query("INSERT INTO produk VALUES ('', '$nama_input')");
  
    if ($q) {
      // pesan jika data tersimpan
      echo "<script>alert('Data berhasil ditambahkan'); window.location.href='input.php'</script>";
    } else {
      // pesan jika data gagal disimpan
      echo "<script>alert('Data gagal ditambahkan'); window.location.href='input.php'</script>";
    }
  } else {
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: input.php');
  }