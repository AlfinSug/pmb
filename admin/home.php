<?php
session_start();
if (isset($_SESSION['unameadm'])) { } else {
    echo header("location:../index.php");
}
?>
<!-- <?php
        $kosong = $_GET['kosong'];
        if ($kosong == "alert") {
            $pesan = "Harap Mengisi Form Dengan Teliti";
            echo "<script type='text/javascript'>alert('$pesan');</script>";
        }
        ?> -->
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

    <script type="text/javascript" src="assets/sweetalert/sweetalert.min.js"></script>
    <title>Home Admin</title>
</head>

<body>
    <?php include('header-admin.php'); ?>
    <?php

    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == "success_adm") {
            echo '<script>swal("Congratulation", "Anda Berhasil Login Sebagai Admin", "success");</script>';
        }
    }
    ?>

    <!-- Konten -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-primary" style="margin-top: 120px">Selamat Datang Admin,</h1>
            <p class="lead">Selamat Beraktivitas Dan Semoga Hari-Harimu Menyenangkan.</p>
        </div>
    </div>
    <div class="container bg-light warna" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-11 mt-4">
                <h2 class="mb-4" style="margin-left: -30px">Dashboard</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- TABEL -->
            <table class="table table-bordered table-hover table-striped" style="width: 1100px;">
                <thead class="bg-primary text-center">
                    <tr>
                        <th scope="col" style="width: 100px">NPM</th>
                        <th scope="col" style="width: 120px">Nama</th>
                        <th scope="col" style="width: 20px">Gender</th>
                        <th scope="col" style="width: 140px">Jurusan</th>
                        <th scope="col" style="width: 140px">Email</th>
                        <th scope="col" style="width: 40px">Pendaftaran</th>
                        <th scope="col" style="width: 40px">Pembayaran</th>
                        <th scope="col" style="width: 40px">Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sambunganDB = mysqli_connect("127.0.0.1:3307", "root", "alfin3307", "pmb_itats");


                    if (isset($_GET['tgl'])) {
                        $tgl = $_GET['tgl'];
                        $ts = date('Y/m/d', strtotime($tgl));
                        $pem = $_GET['pem'];
                        $ver = $_GET['ver'];
                        $query = "SELECT*FROM pendaftaran, jurusan WHERE jurusan.id_jurusan=pendaftaran.id_jurusan AND 	DATE(tgl_pendaftaran)='$ts' AND bukti_pem='$pem' AND verifikasi='$ver'";
                        $panggil = mysqli_query($sambunganDB, $query);
                    } else {
                        $query = "SELECT*FROM pendaftaran, jurusan WHERE jurusan.id_jurusan=pendaftaran.id_jurusan";
                        $panggil = mysqli_query($sambunganDB, $query);
                    }

                    if ($panggil === FALSE) {
                        die(mysql_error()); // TODO: better error handling
                    }
                    while ($tampil = mysqli_fetch_array($panggil)) {
                        ?>
                        <tr style="font-size: 16px">
                            <th scope="row"><?php echo $tampil['id_jurusan'] . '.2020.0000' . $tampil['npm']; ?></th>
                            <td><?php echo $tampil['nama_mhs']; ?></td>
                            <td><?php echo $tampil['gender_mhs']; ?></td>
                            <td><?php echo $tampil['nama_jurusan']; ?></td>
                            <td><?php echo $tampil['email']; ?></td>
                            <td><?php echo $tampil['tgl_pendaftaran']; ?></td>
                            <td><?php $bayar = $tampil['bukti_pem'];
                                    if ($bayar == "NULL") {
                                        echo "Belum Bayar";
                                    } else {
                                        echo "Sudah Bayar";
                                    } ?></td>
                            <td><?php $bayar = $tampil['verifikasi'];
                                    if ($bayar == "NULL") {
                                        echo "Belum Terverifikasi";
                                    } else {
                                        echo "Sudah Terverifikasi";
                                    } ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- /TABEL -->
        </div>
        <div class="row justify-content-center" style="margin-left: -10%">
            <div class="col-2">
                <h5 class="text-right">Filter :</h5>
            </div>
            <div class="col">
                <form method="GET">
                    <input class="form-control mb-1" type="date" name="tgl" id="tgl" style="width: 20%">
                    <select class="form-control mb-1" name="pem" id="pem" style="width: 20%">
                        <option value="">- Pembayaran -</option>
                        <option value="NULL">Belum Bayar</option>
                        <option value="DONE">Sudah Bayar</option>
                    </select>
                    <select class="form-control mb-1" name="ver" id="ver" style="width: 20%">
                        <option value="">- Verifikasi -</option>
                        <option value="NULL">Belum Terverifikasi</option>
                        <option value="DONE">Sudah Terverifikasi</option>
                    </select>
                    <button type="submit" name="filter" id="filter" class="btn btn-primary">Hasil</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 mt-3" style="margin-left: -55%">
                <p class="font-italic">*Untuk penggunaan filter, semua form filter wajib terisi</p>
            </div>
        </div>
        <br>
    </div>
    <!-- /Konten -->
    <br>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
<!-- CSS -->
<style>
    .tombol {
        border-color: #2d98da;
        color: #2d98da;
    }

    .tombol:hover {
        background-color: #2d98da !important;
        border-color: #2d98da;
    }

    .tombol:focus {
        box-shadow: 0 0 0 .2rem #2d98da;
        border-color: #2d98da;
    }

    .warna {
        border: solid;
        border-width: 0px;
        border-top-width: 5px;
        border-color: #045890;
        border-radius: 10px;
        -webkit-backdrop-filter: blur(30px);
        backdrop-filter: blur(30px);
        box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.16);
    }

    .btn-sm {
        font-size: .630rem;
    }
</style>

</html>