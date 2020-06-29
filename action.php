<?php include('database.php');
$connect = new database();

$npm = 0;
$doc ="";
$kk ="";
$bukti ="";

$action = $_GET['aksi'];
if($action == "save") {
    $connect->insert_data($_POST['nama_pegawai'], $_POST['alamat_pegawai'], $_POST['ttl_pegawai'], $_POST['no_telp_pegawai']);
    header('location: viewDataPegawai.php');
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