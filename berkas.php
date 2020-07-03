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
  <?php include('header-mhs.php'); ?>

  <div class="container" style="display: flex;">

    <div class="card mt-4" style="width: 65%">
      <div class="card-header">
        Form Berkas
      </div>
      <div class="card-body">
        <form action="action.php?aksi=edit" method="post">
          <input type="hidden" name="npm" id="npm" value="<?php echo $data['npm']; ?>" />
          <label for="exampleFormControlTextarea1">Ijazah/SKL (.pdf)</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile"></label>
          </div>
          <label for="exampleFormControlTextarea1" class="mt-4">Kartu Keluarga (.pdf)</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile"></label>
          </div>
          <label for="exampleFormControlTextarea1" class="mt-4">Bukti Pembayaran (.pdf/.png)</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input " id="customFile" onchange="pickImage();">
            <label class="custom-file-label" for="customFile"></label>
          </div>
          <div class="form-group mt-4 ml-4" align="left">
            <img src="assets/photo.png" id="image-preview" width="150" height="150" alt="image preview">
          </div>
          <button name="edit" class="btn btn-primary col-md-12 mt-4" align="center">Unggah</button>
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


  <script>
    function pickImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("customFile").files[0]);

      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
    };
  </script>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>