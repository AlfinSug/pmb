<?php

include('config_mhs.php');
session_start();
if (isset($_SESSION['login_mhs'])) {
    $email = $_SESSION['email'];
} else {
    header('location: index.php?msg=not_login');
}

if (isset($_POST['unggah_ijazah'])) {
    $ijazah = $_FILES['ijazah']['name'];

    if ($ijazah != "") {
        $ekstensi_diperbolehkan = array('pdf');
        $x = explode('.', $ijazah);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['ijazah']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_ijazah_baru = $angka_acak . '-' . $ijazah;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'assets/' . $nama_ijazah_baru);
            $query = "update pendaftaran set dokumen='$nama_ijazah_baru' where email='$email'";
            $result = mysqli_query($sambunganDB, $query);

            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($sambunganDB) .
                    " - " . mysqli_error($sambunganDB));
            } else {
                header('location: berkas.php?msg=file_ijazah_success');
            }
        } else {
            header('location: berkas.php?msg=file_ijazah_failed');
        }
    }
} elseif (isset($_POST['unggah_kk'])) {
    $kk = $_FILES['kk']['name'];

    if ($kk != "") {
        $ekstensi_diperbolehkan = array('pdf');
        $x = explode('.', $kk);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['kk']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_kk_baru = $angka_acak . '-' . $kk;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'assets/' . $nama_kk_baru);
            $query = "update pendaftaran set kartu_keluarga='$nama_kk_baru' where email='$email'";
            $result = mysqli_query($sambunganDB, $query);

            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($sambunganDB) .
                    " - " . mysqli_error($sambunganDB));
            } else {
                header('location: berkas.php?msg=file_kk_success');
            }
        } else {
            header('location: berkas.php?msg=file_kk_failed');
        }
    }
}
