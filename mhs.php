<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Tabel Mahasiswa</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item font-weight-bolder" href="mhs.php">Mahasiswa</a>
                            <a class="dropdown-item" href="jurusan.php">Jurusan</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rekapitulasi</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 tombol" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- /Navbar -->
        
        <!-- Konten -->
        <div class="container bg-light rounded-lg warna" style="margin-top: 100px">
            <div class="row justify-content-center">
                <div class="col-11 mt-4">
                    <h2 class="mb-4" style="margin-left: -30px">Tabel Mahasiswa</h2>
                    <!-- TABEL -->
                    <table class="table table-hover table-striped">
                        <thead class="bg-primary text-center">
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><div align="center">
                                    <a data-toggle="modal" href="#modalUpdate"><button type="button" class="btn btn-info btn-sm font-weight-bolder">Update</button></a>
                                    <a href=""><button type="button" class="btn btn-warning btn-sm font-weight-bolder">Delete</button></a>
                                    <a href=""><button type="button" class="btn btn-secondary btn-sm font-weight-bolder">Verify</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><div align="center">
                                    <a  data-toggle="modal" href="#modalUpdate"><button type="button" class="btn btn-info btn-sm font-weight-bolder">Update</button></a>
                                    <a href=""><button type="button" class="btn btn-warning btn-sm font-weight-bolder">Delete</button></a>
                                    <a href=""><button type="button" class="btn btn-secondary btn-sm font-weight-bolder">Verify</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><div align="center">
                                    <a data-toggle="modal" href="#modalUpdate"><button type="button" class="btn btn-info btn-sm font-weight-bolder">Update</button></a>
                                    <a href=""><button type="button" class="btn btn-warning btn-sm font-weight-bolder">Delete</button></a>
                                    <a href=""><button type="button" class="btn btn-secondary btn-sm font-weight-bolder">Verify</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><div align="center">
                                    <a data-toggle="modal" href="#modalUpdate"><button type="button" class="btn btn-info btn-sm font-weight-bolder">Update</button></a>
                                    <a href=""><button type="button" class="btn btn-warning btn-sm font-weight-bolder">Delete</button></a>
                                    <a href=""><button type="button" class="btn btn-secondary btn-sm font-weight-bolder">Verify</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- MODAL UPDATE-->
                    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalJurusanLabel" aria-hidden="true">
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
            <div class="row">
                <div class="col ml-5 mb-5 mt-3">
                    <!-- MODAL -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalJurusan" data-whatever="@getbootstrap">Insert Data</button>
                    <div class="modal fade" id="modalJurusan" tabindex="-1" role="dialog" aria-labelledby="modalJurusanLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalJurusanLabel">Insert Data Jurusan</h5>
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
                    <!-- /MODAL -->
                </div>
            </div>
        </div>
        <!-- /Konten -->
            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
    <!-- CSS -->
    <style>
        body{
            background-color: #2d98da;
        }
        .tombol{border-color: #2d98da;color: #2d98da;}.tombol:hover{background-color: #2d98da !important;border-color: #2d98da;}.tombol:focus{box-shadow:0 0 0 .2rem #2d98da; border-color: #2d98da;}
        .warna{border: solid; border-width: 0px;border-top-width: 5px; border-color: #045890}
        .btn-sm{font-size:.630rem;
    </style>
</html>