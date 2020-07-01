<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi-regis.php';

	// membuat variabel untuk menampung data dari form
  $nama   = $_POST['nama_mhs'];
  $email     = $_POST['email'];
  $jk    = $_POST['gender_mhs'];
  $telp    = $_POST['telp_mhs'];
  $ttl = $_POST['ttl_mhs'];
  $alamat = $_POST['alamat_mhs'];
  $bukti = $_FILES['bukti_pem']['name'];
  


//cek dulu jika ada gambar produk jalankan coding ini
if($bukti != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $bukti); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['bukti_pem']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_bukti_baru = $angka_acak.'-'.$bukti; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'assets/'.$nama_bukti_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO pendaftaran (nama_mhs, email, gender_mhs, telp_mhs, ttl_mhs, alamat_mhs,
                  bukti_pem) VALUES 
                  ('$nama', '$email', '$jk', '$telp', '$ttl', '$alamat', '$nama_bukti_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='registrasi.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='registrasi.php';</script>";
            }
} else {
   $query = "INSERT INTO pendaftaran (nama_mhs, email, gender_mhs, telp_mhs, 
   alamat_mhs, bukti_pem) VALUES ('$nama', '$email', '$jk', '$telp', '$ttl', '$alamat', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='registrasi.php';</script>";
                  }
}

?>