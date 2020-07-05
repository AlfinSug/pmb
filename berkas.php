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
  <script type="text/javascript" src="assets/sweetalert/sweetalert.min.js"></script>
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

  <?php

  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "file_ijazah_success") {
      echo '<script>swal("Upload Ijazah", "File ijazah berhasil di upload", "success");</script>';
    } elseif ($_GET['msg'] == "file_ijazah_failed") {
      echo '<script>swal("Upload Ijazah", "File ijazah gagal di upload!", "error");</script>';
    } elseif ($_GET['msg'] == "file_kk_success") {
      echo '<script>swal("Upload Kartu Keluarga", "File kartu keluarga berhasil di upload", "success");</script>';
    } elseif ($_GET['msg'] == "file_kk_failed") {
      echo '<script>swal("Upload Kartu Keluarga", "File kartu keluarga gagal di upload!", "error");</script>';
    }
  }
  ?>
  <img src="assets/kiri3.png" alt="" style="position: fixed;bottom: 0;	left: 0;	height: 100%;	z-index: -1;">
  <?php include('header-mhs.php'); ?>

  <div class="container" style="display: flex;">

    <div class="card mt-4" style="width: 65%">
      <div class="card-header">
        Form Berkas
      </div>
      <div class="card-body">
        <form action="upload-berkas.php" method="post" enctype="multipart/form-data">
          <?php
          require_once "admin/models/modelMhs.php";
          $object = new modelMhs();
          $object->viBer($email);
          $mhs = $object->viBer($email);
          foreach ($mhs as $see) {
            ?>
            <input type="hidden" name="npm" id="npm" value="<?php echo $data['npm']; ?>" />
            <label for="exampleFormControlTextarea1">Ijazah/SKL (.pdf)</label>
            <?php
              $dok = $see['dokumen'];
              ?>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="ijazah" id="ijazah">
              <label class="custom-file-label" for="customFile"></label>
            </div>
            <button name="unggah_ijazah" class="btn btn-primary col-md-12 mt-4" align="center">Unggah</button>
          <?php } ?>
          <!-- <div class="custom-file">
                <input type="file" class="custom-file-input" name="ijazah" id="ijazah" disabled>
                <label class="custom-file-label" for="customFile"></label>
              </div>
              <button name="unggah_ijazah" class="btn btn-primary col-md-12 mt-4" align="center" disabled>Unggah</button>
             -->
        </form>
        <form action="upload-berkas.php" method="post" enctype="multipart/form-data">
          <?php
          require_once "admin/models/modelMhs.php";
          $object = new modelMhs();
          $object->viBer($email);
          $mhs = $object->viBer($email);
          foreach ($mhs as $see) {
            ?>
            <label for="exampleFormControlTextarea1" class="mt-4">Kartu Keluarga (.pdf)</label>
            <?php
              $kk = $see['kartu_keluarga'];
              if ($kk == "" || $kk == "NULL") { ?>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="kk" id="kk">
                <label class="custom-file-label" for="customFile"></label>
              </div>
              <button name="unggah_kk" class="btn btn-primary col-md-12 mt-4" align="center">Unggah</button>

            <?php } else { ?>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="kk" id="kk" disabled>
                <label class="custom-file-label" for="customFile"></label>
              </div>
              <button name="unggah_kk" class="btn btn-primary col-md-12 mt-4" align="center" disabled>Unggah</button>

            <?php } ?>
          <?php } ?>

        </form>
      </div>

    </div>



    <div class="card ml-4 mt-4" style="width: 35%;">
      <?php
      require_once "admin/models/modelMhs.php";
      $object = new modelMhs();
      $object->viBer($email);
      $mhs = $object->viBer($email);
      foreach ($mhs as $see) {
        ?>
        <div class="card-body">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">File Ijazah/SKL (.pdf)</h5>
              <?php
                $dok = $see['dokumen'];
                if ($dok == "" || $dok == "NULL") {
                  echo "SILAHKAN UPLOAD FILE";
                } else {
                  ?>
                <embed width="300" height="250" src="assets/<?php echo $see['dokumen']; ?>" type="application/pdf">
                <h6 class="card-title"><?php echo $see['dokumen']; ?></h6>
              <?php }
                ?>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">File Kartu Keluarga (.pdf)</h5>
              <?php
                $kk = $see['kartu_keluarga'];
                if ($kk == "" || $kk == "NULL") {
                  echo "SILAHKAN UPLOAD FILE";
                } else {
                  ?>
                <embed width="300" height="250" src="assets/<?php echo $kk; ?>" type="application/pdf">
                <h6 class="card-title"><?php echo $see['kartu_keluarga']; ?></h6>
              <?php }
                ?>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">File Bukti Pembayaran (.png/.jpg)</h5>
              <img width="300" height="200" src="assets/<?php echo $see['bukti_pem']; ?>">
              <h6 class="card-title"><?php echo $see['bukti_pem']; ?></h6>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>