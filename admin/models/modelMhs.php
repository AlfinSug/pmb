<?php
class modelMhs{
    protected $koneksi;
    private $dataku;
    function __construct(){
        $sambunganDB = mysql_connect("localhost","root","");
        $koneksi=mysql_select_db("pmb");
    }

    function viMhs(){
        $query = "SELECT*FROM pendaftaran, jurusan WHERE jurusan.id_jurusan=pendaftaran.id_jurusan";
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
}
?>