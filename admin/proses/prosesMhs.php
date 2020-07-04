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

            $yuk->upMhs($npm, $nm, $jrsn, $almt, $ttl, $tlp, $jk, $email);
            header('Location:../mhs.php?msg=success_update');
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
