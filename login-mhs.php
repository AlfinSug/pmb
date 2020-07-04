<?php
session_start();
include 'config_mhs.php';
$email = $_POST['email'];
$telp_mhs = $_POST['telp_mhs'];
$data = mysqli_query($sambunganDB, "SELECT * FROM pendaftaran WHERE email='$email' AND telp_mhs='$telp_mhs'");
$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $_SESSION['email'] = $email;
    header("location: biodata.php?msg=login_success");
} else {
    header("location: index.php?msg=failed");
}
