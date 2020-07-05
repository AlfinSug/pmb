<?php
include 'config_mhs.php';

if (isset($_POST['added'])) {
  $nama   = $_POST['nama_mhs'];
  $email  = $_POST['email'];
  $jk    = $_POST['gender_mhs'];
  $telp    = $_POST['telp_mhs'];
  $ttl = $_POST['ttl_mhs'];
  $jurusan = $_POST['jurusan'];
  $alamat = $_POST['alamat_mhs'];
  $bukti = $_FILES['bukti_pem']['name'];
  date_default_timezone_set('Asia/Jakarta');
  $tanggal = date("Y/m/d H:i:s");


  if ($bukti != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $x = explode('.', $bukti);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['bukti_pem']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_bukti_baru = $angka_acak . '-' . $bukti;

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'assets/' . $nama_bukti_baru);
      $query = "INSERT INTO pendaftaran (id_jurusan, nama_mhs, email, gender_mhs, telp_mhs, ttl_mhs, alamat_mhs,
                  bukti_pem, tgl_pendaftaran, verifikasi) VALUES 
                  ('$jurusan','$nama', '$email', '$jk', '$telp', '$ttl', '$alamat', '$nama_bukti_baru','$tanggal','NULL')";
      $result = mysqli_query($sambunganDB, $query);

      if (!$result) {
        header('location: registrasi.php?msg=query_fk_failed');
      } else {
        header('Location: index.php?msg=success');
      }
    } else {
      header('location: registrasi.php?msg=file_failed');
    }
  }
}
