<?php
require '../models/modelMhsu.php';
class prosesMhsu
{
    private $aksi;

    function __construct()
    {
        $this->aksi = $_GET['aksi'];
    }

    function proses()
    {
        $yuk = new modelMhsu();
        if ($this->aksi == "ubah") {
            $npm = $_GET['id'];
            $nm = $_POST['nmmhs'];
            $jrsn = $_POST['jrsn'];
            $almt = $_POST['almt'];
            $ttl = $_POST['ttl'];
            $tlp = $_POST['notelp'];
            $jk = $_POST['jk'];
            $email = $_POST['email'];
            // $yuk->upMhs($npm, $nm, $jrsn, $almt, $ttl, $tlp, $jk, $email);
            
            /*PENGUBAHAN_AWAL */
            $foto = $_FILES['fotop']['name'];
            if($foto==""){
                $yuk->upMhs($npm, $nm, $jrsn, $almt, $ttl, $tlp, $jk, $email);
                    $pesan = "Update Sukses";
            } else{
                $yuk->upMhs($npm, $nm, $jrsn, $almt, $ttl, $tlp, $jk, $email);
                $format = array('png','jpg');
                $x = explode('.', $foto);
                $eksistensi = strtolower(end($x));
                $lokasi = $_FILES['fotop']['tmp_name'];
                if(in_array($eksistensi, $format) === true){
                    move_uploaded_file($lokasi, '../../assets/fotomhs/'.$foto);
                    $yuk->upfoto($foto,$npm);
                }
                else{
                    $pesan = "FORMAT FOTO SALAH";
                    echo "<script type='text/javascript'>alert('$pesan');</script>";
                    echo "<script>window.location.href='../mhsu.php';</script>";
                    exit;
                }
            }
            header("Location:../mhsu.php");
            /*Pengubahan Tutup */

        } else if ($this->aksi == "delete") {
            $id = $_GET['npm'];
            $yuk->delMhs($id);
            $yuk->setMhs();
            header("Location:../mhsu.php");
        } else if ($this->aksi == "tombol") {
            $id = $_GET['npm'];
            $ver = "DONE";
            $yuk->tomMhs($id, $ver);
            header("Location:../mhsu.php");
        }
    }
}
$jalan = new prosesMhsu();
$jalan->proses();
