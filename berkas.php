<?php 	
include('database.php');
$db = new database();
$biodata = $db->tampil_data();
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
<style>#kartu {
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
  <body style="background: #45aaf2;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="assets/pmb.png" alt="" width="30px" height="30px" style="margin-left: 9%;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-2"  id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="biodata.php">Biodata</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="berkas.php">Berkas</a>
      </li>
      <li class="nav-item" style="margin-left: 430%;">
        <a  class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container" style="display: flex;">

<div class="card mt-4" style="width: 65%">
  <div class="card-header">
    Form Berkas
  </div>
  <div class="card-body">
  <form action="action.php?aksi=edit" method="post">
  <input type="hidden" name="npm" id="npm" value="<?php echo $data['npm']; ?>"/>
    <label for="exampleFormControlTextarea1" >Ijazah/SKL (.pdf)</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Pilih file</label>
    </div>
    <label for="exampleFormControlTextarea1" class="mt-4">Kartu Keluarga (.pdf)</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Pilih file</label>
    </div>
    <label for="exampleFormControlTextarea1" class="mt-4">Bukti Pembayaran (.pdf/.png)</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input " id="customFile">
    <label class="custom-file-label" for="customFile">Pilih file</label>
    </div>
    <button name="edit" class="btn btn-info mt-3">Lengkapi</button>
    </form>
  </div>

</div>

<div class="card ml-4 mt-4" style="width: 35%;">

  <div class="card-body">
  <div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
</div>
<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>

</div>

<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
  </div>
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