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
    <style>
      .input-group-append { cursor: pointer; }
    </style>
    <title>PMB ITATS - Register Mahasiswa Baru</title>
  </head>
  <body>

  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="assets/pmb.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">  PMB ITATS Online
  </a>
</nav>

  <img src="assets/kiri3.png" alt="" style="position: fixed;bottom: 0;	left: 0;	height: 100%;	z-index: -1;">

  <div class="card" style="margin: 5% 30%;">
  <img src="assets/pmb.png" style="text-align: center; margin: 5% 40%; width: 20%;">
  <div class="card-body" style="padding: 5% 18%;">
  <form>
  <div class="form-group">
    <label for="inputAddress">Nama Lengkap</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Contoh: Jhon Doe">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contoh : jhondoe@gmail.com">
  </div>
  
  <label for="inputAddress2">Jenis Kelamin</label>
  <div class="form-group">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
</div>

  </div>
  <div class="form-group">
    <label for="inputAddress">No Telpon</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Contoh : 08974879215">
  </div>
  <div class="form-group">
    <label for="inputAddress">Tanggal Lahir</label>
    <div class="input-group">
            <input type="date" class="form-control" placeholder="01-01-2020" id="datepicker">
  </div>
  <div style="margin-top: 5%;" class="form-group ">
      <label for="inputState">Program Studi</label>
      <select id="inputState" class="form-control">
        <option selected>- Pilih Program Studi -</option>
        <option>Sistem Informasi</option>
        <option>Teknik Informatika</option>
      </select>
    </div>
    <div class="form-group ">
      <label for="inputState">Kelas</label>
      <select id="inputState" class="form-control">
        <option selected>- Pilih Kelas -</option>
        <option>Pagi</option>
        <option>Malam</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ketik Alamat anda.."></textarea>
  </div>
  <div class="dropdown-divider"></div>
  <label for="exampleFormControlTextarea1">Bukti Pembayaran Pendaftaran (.png/.jpg)</label>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Pilih file</label>
  </div>
  <button style="margin-top: 10%;" type="submit" class="btn btn-primary col-md-12">Daftar</button>
</form>

  </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>