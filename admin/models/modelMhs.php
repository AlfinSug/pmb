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

    function upMhs($npm,$nm,$jrsn,$almt,$ttl,$tlp,$jk,$email){
        $query = "UPDATE pendaftaran SET nama_mhs='$nm',id_jurusan='$jrsn',alamat_mhs='$almt',ttl_mhs='$ttl',telp_mhs='$tlp',gender_mhs='$jk',email='$email' WHERE npm='$npm'";
        $panggil = mysql_query($query);
    }

    function delMhs($npm){
        $query = "DELETE FROM pendaftaran WHERE npm='$npm'";
        $panggil = mysql_query($query);
    }

    function setMhs(){
        $query = "ALTER TABLE `pendaftaran` MODIFY `npm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0";
        $panggil2 = mysql_query($query);
    }

    function tomMhs($npm,$verif){
        $query = "UPDATE pendaftaran SET verifikasi='$verif' WHERE npm='$npm'";
        $panggil = mysql_query($query);
    }
}
?>