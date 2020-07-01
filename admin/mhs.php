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
        <div align="center">
            <div class="bg-light warna" style="margin-top: 100px; border-radius: 10px; width: 97%">
                <div class="row justify-content-center">
                    <div class="col-11 mt-4">
                        <h2 class="mb-4 text-left" style="margin-left: -3%; color: #2d98da">Tabel Mahasiswa</h2>
                        <!-- TABEL -->
                        <table class="table table-hover table-striped" style="width: 106%; margin-left: -3%">
                            <thead class="bg-primary text-center text-light">
                                <tr>
                                    <th scope="col" style="width: 5%">NPM</th>
                                    <th scope="col" style="width: 10%">Nama Mahasiswa</th>
                                    <th scope="col" style="width: 10%">Jurusan</th>
                                    <th scope="col" style="width: 5%">Kelas</th>
                                    <th scope="col" style="width: 5%">Alamat</th>
                                    <th scope="col" style="width: 20%">TTL</th>
                                    <th scope="col" style="width: 10%">No. Telp</th>
                                    <th scope="col" style="width: 2%">Gender</th>
                                    <th scope="col" style="width: 15%">Email</th>
                                    <th scope="col" style="width: 5%">Tgl Pendaftaran</th>
                                    <th scope="col" style="width: 5%">Pembayaran</th>
                                    <th scope="col" style="width: 20%">Action</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 15px">
                                <?php
                                    require_once "models/modelMhs.php";
                                    $object = new modelMhs();
                                    $object->viMhs();
                                    $mhs=$object->viMhs();
                                    foreach($mhs as $see){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $see['id_jurusan'].'.2020.0000'.$see['npm'];?></th>
                                    <td><?php echo $see['nama_mhs'];?></td>
                                    <td><?php echo $see['nama_jurusan'];?></td>
                                    <td><?php echo $see['kelas'];?></td>
                                    <td><?php echo $see['alamat_mhs'];?></td>
                                    <td><?php echo $see['ttl_mhs'];?></td>
                                    <td><?php echo $see['telp_mhs'];?></td>
                                    <td><?php echo $see['gender_mhs'];?></td>
                                    <td><?php echo $see['email'];?></td>
                                    <td><?php echo $see['tgl_pendaftaran'];?></td>
                                    <td><?php
                                    $bayar=$see['bukti_pem'];
                                    if($bayar=="NULL"){
                                        echo "Belum Bayar";
                                    } else{ echo "Sudah Bayar";}
                                    ?></td>
                                    <td><div align="center">
                                        <a data-toggle="modal" href="#modalUpdate<?php echo $see['npm'];?>"><button type="button" class="btn btn-warning btn-sm font-weight-bolder">Update</button></a><br>
                                        <a href="proses/prosesMhs.php?aksi=delete&npm=<?php echo $see['npm'];?>"><button type="button" class="text-light btn btn-danger btn-sm font-weight-bolder" style="margin-top: 5px">Delete</button></a><br>
                                        <?php
                                        $verif=$see['verifikasi'];
                                        if($verif=="NULL"){?>
                                            <a href="proses/prosesMhs.php?aksi=tombol&npm=<?php echo $see['npm'];?>"><button type="button" class="btn btn-info btn-sm font-weight-bolder" style="margin-top: 5px" >Verify</button></a>
                                        <?php } else if($verif=="DONE"){ ?>
                                            <button type="button" class="btn btn-success btn-sm font-weight-bolder" style="margin-top: 5px">Verified</button>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <!-- MODAL UPDATE-->
                                    <div class="modal fade" id="modalUpdate<?php echo $see['npm'];?>" tabindex="-1" role="dialog" aria-labelledby="modalJurusanLabel" aria-hidden="">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalJurusanLabel">Update Data Jurusan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="proses/prosesMhs.php?aksi=ubah&id=<?php echo $see['npm'];?>" method="POST">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label ml-4">NPM</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                                <input type="text" class="form-control" id="npm" name="npm" value="<?php echo $see['id_jurusan'].'.2020.0000'.$see['npm'];?>" placeholder="NPM" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label ml-4">Nama Mahasiswa</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                                <input type="text" class="form-control" id="nmmhs" name="nmmhs" placeholder="Nama Mahasiswa" value="<?php echo $see['nama_mhs'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label ml-4">Jurusan</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                            <select class="form-control" id="jrsn" name="jrsn">
                                                                <option><?php echo $see['nama_jurusan']." ".$see['kelas'];?></option>
                                                                <?php
                                                                    $sambunganDB = mysql_connect("localhost","root","");
                                                                    $koneksi=mysql_select_db("pmb");
                                                                    $query = "SELECT*FROM jurusan";
                                                                    $panggil = mysql_query($query);

                                                                    while($tampil = mysql_fetch_array($panggil)):;?>
                                                                        <option value="<?php echo $tampil['id_jurusan'];?>"><?php echo $tampil['nama_jurusan']." ".$tampil['kelas'];?></option>
                                                                    <?php endwhile;
                                                                ?>
                                                            </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label ml-4">Alamat</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                                <textarea type="text" class="form-control" id="almt" name="almt" placeholder="Alamat"><?php echo $see['alamat_mhs'];?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label  ml-4">TTL</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                                <input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $see['ttl_mhs'];?>" placeholder="YYYY-MM-DD">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label ml-4">No. Telp</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                                <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No. Telp" value="<?php echo $see['telp_mhs'];?>">
                                                            </div>
                                                        </div><div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label  ml-4">Gender</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                            <?php
                                                                if($see['gender_mhs']=='L'){
                                                                    $jk="Laki-laki";
                                                                }else {$jk="Perempuan";}
                                                            ?>
                                                                <select class="form-control" id="jk" name="jk">
                                                                    <option value="<?php echo $see['gender_mhs']?>" class="font-weight-bolder"><?php echo $jk?></option>
                                                                    <option value="L">Laki-laki</option>
                                                                    <option value="P">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label  ml-4">Email</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $see['email'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <label for="recipient-name" class="col-form-label  ml-4">Tanggal Pendaftaran</label>
                                                            </div>
                                                            <div class="col-sm-8 ml-1">
                                                                <input type="text" class="form-control" placeholder="Tanggal Pendaftaran" value="<?php echo $see['tgl_pendaftaran'];?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Send message</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- /MODAL UPDATE -->
                                <?php }?>
                            </tbody>
                        </table>
                        <!-- /TABEL -->
                    </div>
                </div>
                <br>
                <br>
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
    </body>
    <!-- CSS -->
    <style>
        .tombol{border-color: #2d98da;color: #2d98da;}.tombol:hover{background-color: #2d98da !important;border-color: #2d98da;}.tombol:focus{box-shadow:0 0 0 .2rem #2d98da; border-color: #2d98da;}
        .warna{border: solid; border-width: 0px;border-top-width: 5px; border-color: #045890;-webkit-backdrop-filter: blur(30px);box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.16);}
        .btn-sm{font-size:.630rem;}
    </style>
</html>