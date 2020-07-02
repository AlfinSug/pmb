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
    <title>Tabel Jurusan</title>
</head>

<body>
    <?php include('header-admin.php'); ?>

    <!-- Konten -->
    <div class="container bg-light rounded-lg warna" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-11 mt-4">
                <h2 class="mb-4" style="margin-left: -30px">Tabel Jurusan</h2>
                <!-- TABEL -->
                <table class="table table-hover table-striped">
                    <thead class="bg-primary text-center text-light">
                        <tr>
                            <th scope="col" style="width: 150px">Kode Jurusan</th>
                            <th scope="col" style="width: 280px">Nama Jurusan</th>
                            <th scope="col" style="width: 110px">Kelas</th>
                            <th scope="col" style="width: 150px">Biaya SPP/bulan</th>
                            <th scope="col" style="width: 200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once "models/modelJurusan.php";
                        $object = new modelJurusan();
                        $object->vijur();
                        $jur = $object->vijur();
                        foreach ($jur as $see) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $see['id_jurusan']; ?></th>
                                <td><?php echo $see['nama_jurusan']; ?></td>
                                <td><?php echo $see['kelas']; ?></td>
                                <td><?php echo $see['biaya_spp']; ?></td>
                                <td>
                                    <div align="center">
                                        <a data-toggle="modal" href="#modalUpdate<?php echo $see['id_jurusan']; ?>"><button type="button" class="btn btn-info btn-sm font-weight-bolder">Update</button></a>
                                        <a href="proses/prosesJurusan.php?aksi=remove&kd=<?php echo $see['id_jurusan']; ?>"><button type="button" class="btn btn-warning btn-sm font-weight-bolder">Delete</button></a>
                                </td>
                            </tr>
                            <!-- MODAL UPDATE-->
                            <div class="modal fade" id="modalUpdate<?php echo $see['id_jurusan']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalJurusanLabel" aria-hidden="">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalJurusanLabel">Update Data Jurusan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="proses/prosesJurusan.php?aksi=change&kd=<?php echo $see['id_jurusan']; ?>" method="POST">
                                                <div class="form-group row">
                                                    <div class="col-sm-3">
                                                        <label for="recipient-name" class="col-form-label  ml-4">Kode Jurusan</label>
                                                    </div>
                                                    <div class="col-sm-8 ml-1">
                                                        <input type="text" class="form-control" id="kode_jurusan" value="<?php echo $see['id_jurusan']; ?>" placeholder="Kode Jurusan" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3">
                                                        <label for="recipient-name" class="col-form-label  ml-4">Nama Jurusan</label>
                                                    </div>
                                                    <div class="col-sm-8 ml-1">
                                                        <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?php echo $see['nama_jurusan']; ?>" placeholder="Nama Jurusan">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3">
                                                        <label for="recipient-name" class="col-form-label  ml-4">Kelas</label>
                                                    </div>
                                                    <div class="col-sm-8 ml-1">
                                                        <select class="form-control" disabled>
                                                            <option value=""><?php echo $see['kelas']; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3">
                                                        <label for="recipient-name" class="col-form-label  ml-4">Biaya SPP</label>
                                                    </div>
                                                    <div class="col-sm-8 ml-1">
                                                        <input type="text" class="form-control" id="spp" name="spp" value="<?php echo $see['biaya_spp']; ?>" placeholder="Biaya SPP">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /MODAL UPDATE -->
                        <?php } ?>
                    </tbody>
                </table>
                <!-- /TABEL -->
            </div>
        </div>
        <div class="row">
            <div class="col ml-5 mb-5 mt-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalJurusan" data-whatever="@getbootstrap">Insert Data</button>
            </div>
        </div>
    </div>
    <!-- MODAL -->
    <div class="modal fade" id="modalJurusan" tabindex="-1" role="dialog" aria-labelledby="modalJurusanLabel" aria-hidden="">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalJurusanLabel">Insert Data Jurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="proses/prosesJurusan.php?aksi=add" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="recipient-name" class="col-form-label  ml-4">Kode Jurusan</label>
                            </div>
                            <div class="col-sm-8 ml-1">
                                <input type="text" class="form-control" id="kode_jurusan" value="<?php echo $see['id_jurusan'] + 1; ?>" placeholder="Kode Jurusan" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="recipient-name" class="col-form-label  ml-4">Nama Jurusan</label>
                            </div>
                            <div class="col-sm-8 ml-1">
                                <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" placeholder="Nama Jurusan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="recipient-name" class="col-form-label  ml-4">Kelas</label>
                            </div>
                            <div class="col-sm-8 ml-1">
                                <select class="form-control" id="kelas" name="kelas">
                                    <option value="">-- Kelas --</option>
                                    <option value="Pagi">Pagi</option>
                                    <option value="Malam">Malam</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="recipient-name" class="col-form-label  ml-4">Biaya SPP</label>
                            </div>
                            <div class="col-sm-8 ml-1">
                                <input type="text" class="form-control" id="spp" name="spp" placeholder="Biaya SPP">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /MODAL -->
    <!-- /Konten -->
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
        -webkit-backdrop-filter: blur(30px);
        box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.16);
    }

    .btn-sm {
        font-size: .630rem;
    }
</style>

</html>