<?php
include('config_mhs.php');
session_start();
if (isset($_SESSION['login_mhs'])) {
  $email = $_SESSION['email'];
} else {
  header('location: index.php?msg=not_login');
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/font/css/all.min.css" type="text/css">

  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <style>
    #kartu {
      display: block;
      margin: auto;
      position: relative;
      justify-content: center;
      margin-top: 2%;
      border-radius: 5px;
    }

    #btn {
      margin-left: 10%;
    }
  </style>
  <title>Home Page</title>
</head>



<body>

  <img src="assets/kiri3.png" alt="" style="position: fixed;bottom: 0;	left: 0;	height: 100%;	z-index: -1;">
  <?php

  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "login_success") {
      echo '<script>swal("Good Job", "Login sebagai mahasiswa berhasil", "success");</script>';
    }
  }
  ?>
  <?php include('header-mhs.php'); ?>


  <div class="card mb-3" id="kartu" style="max-width: 80%; ">
    <div class="row no-gutters">
      <div class="col-md-4">

        <img src="assets/face.png" style="padding: 10%;" class="card-img" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <?php
          $sql_data = "select nama_mhs, alamat_mhs, ttl_mhs, telp_mhs, email, nama_jurusan, kelas 
           from pendaftaran inner join jurusan on pendaftaran.id_jurusan = jurusan.id_jurusan where email='$email';";
          $biodata = mysqli_query($sambunganDB, $sql_data);
          foreach ($biodata as $row) {
            ?>
            <h5 class="card-title">Biodata</h5>
            <p class="card-text"><i class="fas fa-signature"></i> <?php echo $row['nama_mhs']; ?></p>
            <p class="card-text"><i class="fas fa-map-pin"></i> <?php echo $row['alamat_mhs']; ?></p>
            <p class="card-text"><i class="far fa-calendar-alt"></i> <?php echo $row['ttl_mhs']; ?></p>
            <p class="card-text"><i class="fas fa-tty"></i> <?php echo $row['telp_mhs']; ?></p>
            <p class="card-text"><i class="far fa-envelope"></i> <?php echo $row['email']; ?></p>
            <p class="card-text"><i class="fas fa-university"></i> <?php echo $row['nama_jurusan']; ?></p>
            <p class="card-text"><i class="far fa-clock"></i> <?php echo $row['kelas']; ?></p>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>