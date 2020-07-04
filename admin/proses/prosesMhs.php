<?php
require '../models/modelMhs.php';
class prosesMhs
{
    private $aksi;

    function __construct()
    {
        $this->aksi = $_GET['aksi'];
    }

    function proses()
    {
        $yuk = new modelMhs();
        if ($this->aksi == "ubah") {
            $npm = $_GET['id'];
            $nm = $_POST['nmmhs'];
            $jrsn = $_POST['jrsn'];
            $almt = $_POST['almt'];
            $ttl = $_POST['ttl'];
            $tlp = $_POST['notelp'];
            $jk = $_POST['jk'];
            $email = $_POST['email'];

            $foto = $_FILES['fotop']['name'];
            if ($foto == "") {
                $yuk->upMhs($npm, $nm, $jrsn, $almt, $ttl, $tlp, $jk, $email);
                $pesan = "Update Sukses";
            } else {
                $yuk->upMhs($npm, $nm, $jrsn, $almt, $ttl, $tlp, $jk, $email);
                $format = array('png', 'jpg');
                $x = explode('.', $foto);
                $eksistensi = strtolower(end($x));
                $lokasi = $_FILES['fotop']['tmp_name'];
                if (in_array($eksistensi, $format) === true) {
                    move_uploaded_file($lokasi, '../../assets/fotomhs/' . $foto);
                    $yuk->upfoto($foto, $npm);
                } else {
                    $pesan = "FORMAT FOTO SALAH";
                    echo "<script type='text/javascript'>alert('$pesan');</script>";
                    echo "<script>window.location.href='../mhs.php';</script>";
                    exit;
                }
            }
            header("Location:../mhs.php");
        } else if ($this->aksi == "delete") {
            $id = $_GET['npm'];
            $yuk->delMhs($id);
            $yuk->setMhs();
            header("Location:../mhs.php");
        } else if ($this->aksi == "tombol") {
            $id = $_GET['npm'];
            $ver = "DONE";
            $yuk->tomMhs($id, $ver);
            header("Location:../mhs.php?mhs=verif");
        }
    }
}
$jalan = new prosesMhs();
$jalan->proses();
