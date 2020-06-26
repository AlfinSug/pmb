<?php
session_start();
if(isset($_SESSION['unameadm'])){}
else{
        echo header("location:../index.php");
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- FONT -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Home Admin</title>
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
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bolder" style="color: #1f447a" href="home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Data
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-primary" href="mhs.php">Mahasiswa</a>
                                <a class="dropdown-item text-primary" href="jurusan.php">Jurusan</a>
                            </div>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                    <div class="my-2 my-lg-0">
                    <a class="nav-link" href="#">
                        <button class="btn btn-outline-success my-2 my-sm-0 tombol" type="button" style="font-family: 'Roboto', sans-serif;">Logout</button></a>
                    </div>
                </div>
            </nav>
        <!-- /Navbar -->
            
        <!-- Konten -->
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4 text-primary"  style="margin-top: 120px">Selamat Datang Admin,</h1>
                    <p class="lead">Selamat Beraktivitas Dan Semoga Hari-Harimu Menyenangkan.</p>
                </div>
            </div>
            <div class="container bg-light warna" style="margin-top: 100px">
                <div class="row justify-content-center">
                    <div class="col-11 mt-4">
                        <h2 class="mb-4" style="margin-left: -30px">Dashboard</h2>
                        <!-- TABEL -->
                        <table class="table table-hover table-striped"  style="width: 1100px; margin-left: -42px">
                            <thead class="bg-primary text-center">
                                <tr>
                                    <th scope="col" style="width: 130px">NPM</th>
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col" style="width: 10px">Gender</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" style="width: 100px">Kelahiran</th>
                                    <th scope="col" style="width: 170px">Alamat</th>
                                    <th scope="col" style="width: 100px">Pendaftaran</th>
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
                        <!-- /TABEL -->
                    </div>
                </div>
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
        <br>
    </body>
    <!-- CSS -->
    <style>
        .tombol{border-color: #2d98da;color: #2d98da;}.tombol:hover{background-color: #2d98da !important;border-color: #2d98da;}.tombol:focus{box-shadow:0 0 0 .2rem #2d98da; border-color: #2d98da;}
        .warna{border: solid; border-width: 0px;border-top-width: 5px; border-color: #045890; border-radius: 10px;-webkit-backdrop-filter: blur(30px);backdrop-filter: blur(30px);box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.16);}
        .btn-sm{font-size:.630rem;}
    </style>
</html>