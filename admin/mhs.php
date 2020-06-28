<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- FONT -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <title>Tabel Mahasiswa</title>
    </head>
    <body>
        <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.16);">
                <a class="navbar-brand" href="home.php"><img src="../assets/pmb.png" style="width: 45px; height: 45px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <a href=""></a>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" style="font-family: 'Roboto', sans-serif; font-size: 21px;">
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle font-weight-bolder" style="color: #1f447a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Data
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item font-weight-bolder" style="color: #1f447a" href="mhs.php">Mahasiswa</a>
                                <a class="dropdown-item text-primary" href="jurusan.php">Jurusan</a>
                            </div>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                    <div class="my-2 my-lg-0">
                    <a class="nav-link" href="logout.php">
                        <button class="btn btn-outline-success my-2 my-sm-0 tombol" type="button" style="font-family: 'Roboto', sans-serif;">Logout</button></a>
                    </div>
                </div>
            </nav>
        <!-- /Navbar -->
        
        <!-- Konten -->
        <div class="container bg-light warna" style="margin-top: 100px; border-radius: 10px;">
            <div class="row justify-content-center">
                <div class="col-11 mt-4">
                    <h2 class="mb-4" style="margin-left: -30px; color: #2d98da">Tabel Mahasiswa</h2>
                    <!-- TABEL -->
                    <table class="table table-hover table-striped">
                        <thead class="bg-primary text-center text-light">
                            <tr>
                                <th scope="col" style="width: 170px">NPM</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Kelas</th>
                                <th scope="col" style="width: 145px">Tgl Pendaftaran</th>
                                <th scope="col"  style="width: 200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once "models/modelMhs.php";
                                $object = new modelMhs();
                                $object->viMhs();
                                $mhs=$object->viMhs();
                                foreach($mhs as $see){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $see['npm'];?></th>
                                <td><?php echo $see['nama_mhs'];?></td>
                                <td><?php echo $see['nama_jurusan'];?></td>
                                <td><?php echo $see['kelas'];?></td>
                                <td><?php echo $see['tgl_pendaftaran'];?></td>
                                <td><div align="center">
                                    <a data-toggle="modal" href="#modalUpdate"><button type="button" class="btn btn-warning btn-sm font-weight-bolder">Update</button></a>
                                    <a href=""><button type="button" class="btn btn-danger btn-sm font-weight-bolder">Delete</button></a>
                                    <a href=""><button type="button" class="btn btn-info btn-sm font-weight-bolder">Verify</button></a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <!-- MODAL UPDATE-->
                    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalJurusanLabel" aria-hidden="">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalJurusanLabel">Update Data Jurusan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <label for="recipient-name" class="col-form-label  ml-4">Kode Jurusan</label>
                                            </div>
                                            <div class="col-sm-8 ml-1">
                                                <input type="text" class="form-control" id="kode_jurusan" placeholder="Kode Jurusan" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <label for="recipient-name" class="col-form-label  ml-4">Nama Jurusan</label>
                                            </div>
                                            <div class="col-sm-8 ml-1">
                                                <input type="text" class="form-control" id="nama_jurusan" placeholder="Nama Jurusan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <label for="recipient-name" class="col-form-label  ml-4">Kelas</label>
                                            </div>
                                            <div class="col-sm-8 ml-1">
                                            <select class="form-control">
                                                <option value="">-- Kelas --</option>
                                                <option value="K1">Pagi</option>
                                                <option value="K2">Malam</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <label for="recipient-name" class="col-form-label  ml-4">Biaya SPP</label>
                                            </div>
                                            <div class="col-sm-8 ml-1">
                                                <input type="text" class="form-control" id="spp" placeholder="Biaya SPP">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /MODAL UPDATE -->
                    <!-- /TABEL -->
                </div>
            </div>
            <br>
            <br>
        </div>
        <!-- /Konten -->
            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <br>
        <br>
        <br>
    </body>
    <!-- CSS -->
    <style>
        .tombol{border-color: #2d98da;color: #2d98da;}.tombol:hover{background-color: #2d98da !important;border-color: #2d98da;}.tombol:focus{box-shadow:0 0 0 .2rem #2d98da; border-color: #2d98da;}
        .warna{border: solid; border-width: 0px;border-top-width: 5px; border-color: #045890;-webkit-backdrop-filter: blur(30px);backdrop-filter: blur(30px);box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.16);}
        .btn-sm{font-size:.630rem;}
    </style>
</html>