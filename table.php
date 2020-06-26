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
  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">
  <img src="icon.jpg" width="45" height="45" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto" style="padding: 5px; margin-right: 10px;">
      <li class="nav-item active">
        <a class="nav-link" href="#">Biodata <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="padding: 8px;">
      <button class="btn btn-info" type="submit">Search</button>
    </form>
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
        <p class="card-text"><i class="far fa-clock"></i> <?php echo $row['kelas']; ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <?php 
		}
		?>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" id="btn" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
  Edit Document
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlFile1">Images Profil</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Document</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Kartu Keluarga</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
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