<?php
include('config_mhs.php');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Date Picker -->


  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="assets/sweetalert/sweetalert.min.js"></script>
  <style>
    .input-group-append {
      cursor: pointer;
    }
  </style>
  <title>PMB ITATS - Register Mahasiswa Baru</title>
</head>

<body>

  <?php

  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "file_failed") {
      echo '<script>swal("Failed", "Gambar tidak valid", "error");</script>';
    }
  }
  ?>
  <!-- Image and text -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
      <img src="assets/pmb.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> PMB ITATS Online
    </a>
  </nav>


  <img src="assets/kiri3.png" alt="" style="position: fixed;bottom: 0;	left: 0;	height: 100%;	z-index: -1;">



  <div class="card" style="margin: 5% 30%;">
    <img src="assets/pmb.png" style="text-align: center; margin: 5% 40%; width: 20%;">
    <div class="card-body" style="padding: 5% 18%;">
      <form action="proses-regis.php" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="inputAddress" name="npm" placeholder="Contoh: Jhon Doe">
        <div class="form-group">
          <label for="inputAddress">Nama Lengkap</label>
          <input type="text" class="form-control" id="inputAddress" name="nama_mhs" placeholder="Contoh: Jhon Doe">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Contoh : jhondoe@gmail.com">
        </div>

        <label for="inputAddress2">Jenis Kelamin</label>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender_mhs" id="inlineRadio1" value="Laki - Laki">
            <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender_mhs" id="inlineRadio2" value="Perempuan">
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
          </div>

        </div>
        <div class="form-group">
          <label for="inputAddress">No Telpon</label>
          <input type="text" class="form-control" id="inputAddress" name="telp_mhs" placeholder="Contoh : 08974879215">
        </div>
        <div class="form-group">
          <label for="inputAddress">Tanggal Lahir</label>
          <div class="input-group">
            <input type="date" class="form-control" name="ttl_mhs" placeholder="01-01-2020" id="datepicker">
          </div>

          <div class="form-group">

            <label for="inputState">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="0">- Pilih Jurusan -</option>
              <?php
              include('config_mhs.php');
              $query = "SELECT*FROM jurusan";
              $panggil = mysqli_query($sambunganDB, $query);

              while ($tampil = mysqli_fetch_array($panggil)) :; ?>
                <option value="<?php echo $tampil['id_jurusan']; ?>"><?php echo $tampil['nama_jurusan'] . " - " . $tampil['kelas']; ?></option>
              <?php endwhile;
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat_mhs" rows="3" placeholder="Ketik Alamat anda.."></textarea>
          </div>
          <div class="dropdown-divider"></div>
          <label for="exampleFormControlTextarea1">Bukti Pembayaran Pendaftaran (.png/.jpg)</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="chooseFile" name="bukti_pem" onchange="pickImage();">
            <label class="custom-file-label" id="custom-text" for="real-file"></label>
          </div>
          <div class="form-group mt-4" align="center">
            <img src="assets/photo.png" id="image-preview" width="300" height="300" alt="image preview">
          </div>
          <button style="margin-top: 10%;" type="submit" name="added" class=" btn btn-primary col-md-12">Daftar</button>
      </form>

    </div>
  </div>

  <script>
    function pickImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("chooseFile").files[0]);

      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
    };
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>