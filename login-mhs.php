<?php
session_start();
include 'config_mhs.php';
$email = $_POST['email'];
$telp_mhs = $_POST['telp_mhs'];
$data = mysqli_query($sambunganDB, "SELECT * FROM pendaftaran WHERE email='$email' AND telp_mhs='$telp_mhs'");
$cek = mysqli_num_rows($data);
foreach ($data as $row) {
    if ($row['verifikasi'] == "NULL" || $row['verifikasi'] == "") {
        header("location: index.php?msg=not_verif");
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['login_mhs'] = true;
        header("location: biodata.php?msg=login_success");
    }
}
if ($cek <= 0) {
    header("location: index.php?msg=failed");
}
