<?php
    session_start();
        if($_SESSION['status_login']!=true){
            header('location:../../login.php');
        }
        if($_SESSION['role']=="owner"){
            // echo $_SESSION['role'];
            header('location:../../login.php');
        }
        if($_SESSION['role']=="kasir"){
            // echo $_SESSION['role'];
            header('location:../../login.php');
        }
?>

<!doctype html>
<html lang="en">
 
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
      <title>Pelanggan</title>
  </head>
 
  <body>  
    <nav class="navbar navbar-expand-lg navbar-light bg-danger mb-3">
        <a class="navbar-brand" href="#">Laundry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="../home.php">Home </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="../outlet/outlet.php">Outlet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Paket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pelanggan/pelanggan.php">Pelanggan</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="../user/petugas.php">Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../transaksi/transaksi.php">Transaksi</a>
            </li>
            </ul>
        </div>
    </nav>