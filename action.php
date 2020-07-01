<?php include('database.php');
$connect = new database();

$npm = 0;
$doc ="";
$kk ="";
$bukti ="";

$action = $_GET['aksi'];
if($action == "save") {
    $connect->insert_data($_POST['nama_mhs'], $_POST['email'], $_POST['gender_nmhs'], 
    $_POST['telp_mhs'], $_POST['ttl_mhs'], $_POST['nama_jurusan'], $_POST['kelas']);
    header('location: registrasi.php');
}
elseif($action == "edit") {
    $doc= $_POST['dokumen'];
    $kk= $_POST['kartu_keluarga'];
    $bukti= $_POST['bukti_pem'];
    $npm = $_GET['npm'];
    echo $doc;
    echo $kk;
    echo $bukti;
    echo $npm;
    $connect->update_data($doc, $kk, $bukti, $npm);
    header('location: berkas.php');
}
elseif($action == "del") {
    $id_pegawai = $_GET['id'];
    $connect->delete_data($id_pegawai);
    header('location: viewDataPegawai.php');
}