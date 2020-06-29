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


<div class="card mb-3" id="kartu" style="max-width: 80%; ">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="icon2.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <?php 
		foreach($biodata as $row){
			?>
        <h5 class="card-title">Biodata</h5>
        <p class="card-text"><i class="fas fa-signature"></i> <?php echo $row['nama_mhs']; ?></p>
        <p class="card-text"><i class="fas fa-map-pin"></i> <?php echo $row['alamat_mhs']; ?></p>
        <p class="card-text"><i class="far fa-calendar-alt"></i> <?php echo $row['ttl_mhs']; ?></p>
        <p class="card-text"><i class="fas fa-tty"></i> <?php echo $row['telp_mhs']; ?></p>
        <p class="card-text"><i class="far fa-envelope"></i> <?php echo $row['email']; ?></p>
        <p class="card-text"><i class="fas fa-university"></i> <?php echo $row['nama_jurusan']; ?></p>
        <p class="card-text"><i class="far fa-clock"></i> <?php echo $row['kelas']; ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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