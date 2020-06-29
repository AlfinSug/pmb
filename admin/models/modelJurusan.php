<?php
class modelJurusan{
    protected $koneksi;
    private $dataku;
    function __construct(){
        $sambunganDB = mysql_connect("localhost","root","");
        $koneksi=mysql_select_db("pmb");
    }

    function vijur(){
        $query = "SELECT*FROM jurusan";
        $panggil = mysql_query($query);
        if($panggil === FALSE) { 
            die(mysql_error()); // TODO: better error handling
        }

        while($tampil = mysql_fetch_array($panggil)){
            $sementara[]=$tampil;
        }
        $this->dataku=$sementara;
        return $this->dataku;
    }

    function injur($nj,$kls,$spp){
        $query = "INSERT INTO jurusan VALUES ('','$nj','$kls','$spp')";
        $panggil = mysql_query($query);
    }

    function upjur($nj,$spp,$id){
        $query = "UPDATE jurusan SET nama_jurusan='$nj', biaya_spp='$spp' WHERE id_jurusan='$id'";
        $panggil = mysql_query($query);
    }
    
    function deljur($id){
        $query = "DELETE FROM jurusan WHERE id_jurusan='$id'";
        $panggil = mysql_query($query);
    }
    function setjur(){
        $query = "ALTER TABLE `jurusan` MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0";
        $panggil2 = mysql_query($query);
    }
}
$object=new modelJurusan();
?>