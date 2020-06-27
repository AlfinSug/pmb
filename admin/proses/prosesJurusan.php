<?php
require '../models/modelJurusan.php';
class prosesJurusan{
    private $aksi;

    function __construct(){
        $this->aksi=$_GET['aksi'];
    }

    function proses(){
        $yuk=new modelJurusan();
        if($this->aksi=="add"){
            $nj = $_POST['nama_jurusan'];
            $kls = $_POST['kelas'];
            $spp = $_POST['spp'];

            $yuk->injur($nj,$kls,$spp);
            header("Location:../jurusan.php");
        }
        
        else if($this->aksi=="change"){
            $id = $_GET['kd'];
            $nj = $_POST['nama_jurusan'];
            $spp = $_POST['spp'];
            $yuk->upjur($nj,$spp,$id);
            header("Location:../jurusan.php");
        }
        
        else if($this->aksi=="remove"){
            $id = $_GET['kd'];
            $yuk->deljur($id);
            $yuk->setjur();
            header("Location:../jurusan.php");
        }
    }
}
$jalan=new prosesJurusan();
$jalan->proses();
?>